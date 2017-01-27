<?php
include('config.php');
$qid=$_SESSION['qid'];
if(isset($_SESSION['susername']))
    {
$suname=$_SESSION['susername'];
    }
 else {
   $suname=$_SESSION['cusername'];     
}
$answer=$_POST['reply'];
if($answer)
{
     $conn=mysql_connect("localhost", "root", "");
if(!$conn)
{
    die("Couldn't connect to database");
}
mysql_select_db("studentconnect",$conn);
$datetime=date("d/m/y h:i:s");
$query="INSERT INTO forum_answer (question_id,username,answer,datetime ) VALUES('".$qid."','".$suname."','".$answer."','".$datetime."')";
$result=mysql_query($query);
if(!$result)
{
   echo "failed";
   echo mysql_error();
}
else
{
    echo "Row added";

  header( "Location:/studentconnect/viewtopic.php?id=$qid ");
    
}
    

mysql_close($conn);
}
else
{
    die("Enter all the details");
    //echo "Click <a href='sinsert.php'>here</a>to go back";
}
?>