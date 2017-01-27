<head>
    
<link rel="stylesheet" href="style.css" type="text/css">
<link media="screen" href="header.css" type="text/css" rel="stylesheet">
</head>
<?php
include('config.php');
// Connect to server and select databse.
$connection=mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("studentconnect",$connection)or die("cannot select DB");
$sql="SELECT * FROM forum_question ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);
?>
<?php include('header.php'); ?>
<div id="viewtopic">
<table class="author" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
    <?php
 if(isset($_SESSION['susername']) and $_SESSION['susername']==$admin)
    {?>
         <th width="6%" align="center" bgcolor="#E6E6E6"><strong>Action</strong></th>           
 <?php   }?>   
<th width="10%" align="center" bgcolor="#E6E6E6"><strong>#</strong></th>
<th width="63%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></th>
<th width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></th>
</tr>

<?php
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>
<tr>
    <?php
    if(isset($_SESSION['susername']) and $_SESSION['susername']==$admin)
    {?>
<td><a href="deletetopic.php?id=<?php echo $rows['id']; ?>"><img src="images/delete.png" alt="Delete" /></a></td> 
    <?php
    }
    ?>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="viewtopic.php?id=<?php echo $rows['id'];?>"><?php echo $rows['topic'];?></a> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysql_close();
?>
</table>
</div>