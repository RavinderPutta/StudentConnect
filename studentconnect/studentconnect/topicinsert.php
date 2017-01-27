<?php
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("studentconnect",$conn);
$topic=$_POST['topic'];
$detail=$_POST['detail'];
/*$name=$_POST['name'];
$email=$_POST['email'];*/
$datetime=date("d/m/y h:i:s");
$sn=$_SESSION['susername'];
if($topic&&$detail)
{
$query="insert into forum_question (topic,detail,username,datetime) values('".$topic."','".$detail."','".$sn."','".$datetime."')";
$result=mysql_query($query);
if($result)
{
    header( "Location:/studentconnect/suserspecforum.php");
}
else
{
    die("Error");
}
}
 else 
{
  echo "enter all details"  ;
}

mysql_close();
?>