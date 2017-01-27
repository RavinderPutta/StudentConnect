<?php
include 'config.php';
$dtid=$_GET['id'];
$qqid=$_SESSION['qid'];
mysql_query("delete from forum_question where id='$dtid'");
header("Location:/studentconnect/mainstudentforum.php");
?>