<head>
<link rel="stylesheet" href="style.css" type="text/css">
<link media="screen" href="header.css" type="text/css" rel="stylesheet">
<title>View Topic</title>
</head>
<?php
include('config.php');
include('header.php');
$conn=mysql_connect("localhost","root","");
mysql_select_db("studentconnect",$conn);
$id=$_GET['id'];
$_SESSION['qid']=$id;
$result=mysql_query("select * from forum_question where id='$id'");
$rows=mysql_fetch_array($result);
$result1=mysql_query("select * from forum_answer where question_id='$id'");
//$rows1=mysql_fetch_array($result1);
?>
<div id="viewtopic">
<table class="author" align="center" border="0" cellpadding="2" cellspacing="0">
    <tr>
        <th>Title</th>
        <td><?php echo $rows['topic']; ?></td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?php echo $rows['detail']; ?></td>
    </tr>
    <tr>
        <th>By</th>
        <td><?php echo $rows['username']; ?></td>
    </tr>
    <tr>
        <th>Date&Time</th>
        <td><?php echo $rows['datetime']; ?></td>
    </tr>
</table>
    <br>
    <br>   
<table class="replydisplay" align="center" border="0" cellpadding="2" cellspacing="0">
<?php
if(isset($_SESSION['susername']) and $_SESSION['susername']==$admin)
    {?>
<th>Action</th>
<?php
}
?>
<th>Username</th>
<th>Reply</th>
<th>DateTime</th>
    <?php while($rows1=mysql_fetch_array($result1)){?> 
 <tr>
<?php
if(isset($_SESSION['susername']) and $_SESSION['susername']==$admin)
    {?>
<td><a href="deletecomment.php?id=<?php echo $rows1['id']; ?>"><img src="images/delete.png" alt="Delete" /></a></td>
<?php
    }
    ?>
<td><?php echo $rows1['username']; ?></td>
<td><?php echo $rows1['answer']; ?></td>
<td><?php echo $rows1['datetime']; ?></td>
 </tr>
 <?php } ?>
  </table>
<?php
mysql_close();
?>
<br>
<br>
<table class="displayforum" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form id="form1" name="form1" method="post" action="replyinsert.php">
<td class="">
<table border="0" cellpadding="3" cellspacing="1" bgcolor="#000000">
<tr>
<td valign="top"><strong>Comment</strong></td>
<td valign="top">:</td>
<td><textarea name="reply" cols="100" rows="5" id="detail"></textarea></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<tr>
<td><input class="button" type="submit" name="Submit" align="center"; value="Submit" /> </td>
<td> <input class="button" type="reset" name="Submit2" align="center"; value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>