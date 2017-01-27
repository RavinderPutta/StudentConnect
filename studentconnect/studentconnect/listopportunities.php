<head>
    <title>List Opportunities</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<link media="screen" href="header.css" type="text/css" rel="stylesheet">
</head>
<?php
include('config.php');
// Connect to server and select databse.
$connection=mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("studentconnect",$connection)or die("cannot select DB");
//$sn=$_SESSION['susername'];
//echo "$sn";
$sql="SELECT * FROM oppurtunities";
// OREDER BY id DESC is order result by descending
include('header.php');
?>
<div id="viewtopic">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Title</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
$result=mysql_query($sql);
if($result)
{
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="viewopportunities.php?id=<?php echo $rows['id'];?>"><?php echo $rows['title'];?></a> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
}
else{}
mysql_close();
?>
</table>
</div>