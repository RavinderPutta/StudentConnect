<link rel="stylesheet" href="style.css" type="text/css">
<link media="screen" href="header.css" type="text/css" rel="stylesheet">
<?php
include('config.php');
$conn=mysql_connect("localhost","root","");
mysql_select_db("studentconnect",$conn);
$urname=$_SESSION['cusername'];
$id=$_GET['id'];
$_SESSION['oid']=$id;
$result=mysql_query("select * from oppurtunities where cusername='$urname'");
$rows=mysql_fetch_array($result);
include 'header.php';
?>
<div id="viewtopic">
<table class="author" align="center" border="0" cellpadding="2" cellspacing="0">
    <tr>
        <th>Title</th>
        <td><?php echo $rows['title']; ?></td>
    </tr>
    <tr>
        <th rows="10">Description</th>
        <td rows="10"><?php echo $rows['description']; ?></td>
    </tr>
    <tr>
        <th>By</th>
        <td><?php echo $rows['cusername']; ?></td>
    </tr>
    <tr>
        <th>Date&Time</th>
        <td><?php echo $rows['datetime']; ?></td>
    </tr>
</table>
</div>
<?php 
mysql_close();
?>
<a href="cuserspecforum.php">Home</a>