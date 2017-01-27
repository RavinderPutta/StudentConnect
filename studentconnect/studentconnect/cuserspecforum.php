<head>
    <title>Corporate Specific Forum</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link media="screen" href="header.css" type="text/css" rel="stylesheet">
</head>
<?php
include('config.php');
$connection=mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("studentconnect",$connection)or die("cannot select DB");
$cn=$_SESSION['cusername'];
$sql="SELECT * FROM oppurtunities  where cusername='$cn'";
include 'header.php';
?>
<div id="viewtopic">
<table border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td  align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td  align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td  align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
$result=mysql_query($sql);
if($result)
{
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="cviewopportunity.php?id=<?php echo $rows['id'];?>"><?php echo $rows['title'];?></a> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
}
else{}
mysql_close();
?>
<tr>
<td  align="left" bgcolor="#E6E6E6"><input type="button" name="btnSubmit" value="Post Opportunities" onclick="window.location.href='postopportunities.php';" class="button" /></td>
<td  align="center" bgcolor="#E6E6E6"></td>
<td  align="right" bgcolor="#E6E6E6"><input type="button" name="btnSubmit" value="Main Forum" onclick="window.location.href='mainstudentforum.php';" class="button" /></td>
</tr>
</table>
</div>

