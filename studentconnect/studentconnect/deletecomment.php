<?php
include 'config.php';
$did=$_GET['id'];
$qqid=$_SESSION['qid'];
mysql_query("delete from forum_answer where id='$did'");
header("Location:/studentconnect/viewtopic.php?id=$qqid");
?>