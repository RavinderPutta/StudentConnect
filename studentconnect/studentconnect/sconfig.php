<?php
session_start();
//if(!isset($_SESSION['username']) and isset($_COOKIE['username'], $_COOKIE['password']))
          
        if(isset($_SESSION['susername'])&&isset($_SESSION['spassword']))
        {
            $susername=$_SESSION['susername'];
            $spassword=$_SESSION['spassword'];
           $connect=mysql_connect("localhost","root","") or die("Couldn't Connect");
           mysql_select_db("studentconnect",$connect) or die("Couldn't Find DB");
           $query="select * from students where susername='$susername' and spassword='$spassword'";
           $result=mysql_query($query);
           while($row=mysql_fetch_assoc($result))
               {
                   $dbusername=$row['susername'];
                   $dbpassword=$row['spassword'];
               }
               if($susername==$dbusername&&$spassword==$dbpassword)
               {
                   
               }
                else
                {
                    die("you must be logged in to view this ");
                    
                }
        }
     else 
         {
           die("you must be logged in to view this ");
          }
?>
