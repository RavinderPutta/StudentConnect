<?php

$connect=mysql_connect("localhost","root","") or die("Couldn't Connect");
           mysql_select_db("studentconnect",$connect) or die("Couldn't Find DB");
      $username=strtolower(mysql_real_escape_string($_POST['username']));
      $query="select * from students where susername='$username'";
      $res=mysql_query($query);
      $count=mysql_num_rows($res);
      $HTML='';
      if($count > 0){
        $HTML='user exists';
      }else{
        $HTML='';
      }
      echo $HTML;

?>