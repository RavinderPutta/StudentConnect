<?php
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("studentconnect",$conn);
$title=$_POST['title'];
$description=$_POST['description'];
/*$name=$_POST['name'];
$email=$_POST['email'];*/
$datetime=date("d/m/y h:i:s");
$cn=$_SESSION['cusername'];
if($title&&$description)
 {
$query="insert into oppurtunities (title,description,cusername,datetime) values('".$title."','".$description."','".$cn."','".$datetime."')";
$result=mysql_query($query);
if($result)
{
header( "Location:/studentconnect/cuserspecforum.php");
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
