<?php
include('config.php');
// Connect to server and select databse.
$connection=mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("studentconnect",$connection)or die("cannot select DB");
$sn=$_SESSION['susername'];
$sql="SELECT * FROM forum_question  where username='$sn'";
// OREDER BY id DESC is order result by descending

?>
<head>
    <title>Student Specific Forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link media="screen" href="header.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include('header.php'); ?>
    <div id="viewtopic">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<th width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></th>
<th width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></th>
<th width="23%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></th>
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
<td bgcolor="#FFFFFF"><a href="viewtopic.php?id=<?php echo $rows['id'];?>"><?php echo $rows['topic'];?></a> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
}
else
{
    die("error");
}
mysql_close();
?>
<tr>
    <td width="6%" align="center" bgcolor="#E6E6E6"><input type="button" name="btnSubmit" value="Create Topic" onclick="window.location.href='createtopic.php';" class="button" /></td>
    <td width="53%" align="center" bgcolor="#E6E6E6"><input type="button" name="btnSubmit" value="Main Forum" onclick="window.location.href='mainstudentforum.php';" class="button" /></td>
    <td width="13%" align="center" bgcolor="#E6E6E6"><input type="button" name="btnSubmit" value="View Opportunities" onclick="window.location.href='viewopportunities.php';" class="button" /></td>
</tr>
</table>
    </div>
</body>