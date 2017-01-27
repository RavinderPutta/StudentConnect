<head>
    <title>View Opportunities</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link media="screen" href="header.css" type="text/css" rel="stylesheet">
</head>
<?php
include('config.php');
$conn=mysql_connect("localhost","root","");
mysql_select_db("studentconnect",$conn);
//$urname=$_SESSION['susername'];
//$id=$_GET['id'];
//$_SESSION['oid']=$id;
include 'header.php';
$result=mysql_query("select * from oppurtunities");
while($rows=mysql_fetch_array($result))
{
?>
<div id="viewopportunity">
<table width="90%" class="author" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>   
<table width="95%" class="author" border="0" cellpadding="3" cellspacing="1" bordercolor="1">
<tr>
<th>Title</th>   
<td bgcolor="#F8F7F1"><strong><?php echo $rows['title']; ?></strong></td>
</tr>

<tr>
<th>Description</th>    
<td bgcolor="#F8F7F1"><?php echo $rows['description']; ?></td>
</tr>

<tr>
<th>By</th>    
<td bgcolor="#F8F7F1"><?php echo $rows['cusername']; ?> </td>
</tr>

<tr>
<th>Date&Time</th>    
<td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
</tr>

</table></td>
</tr>
</table>
</div>
<?php
}
// Exit looping and close connection
mysql_close();
/*if (!isset($_SESSION['prs'])) {
echo "pears were not set";
session_register ("pears");
$pears = dmondindex("pear");
}*/
?>