
<html>
    <body>
        <?php
        session_start();
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username&&$password)
        {
           $connect=mysql_connect("localhost","root","") or die("Couldn't Connect");
           mysql_select_db("studentconnect",$connect) or die("Couldn't Find DB");
           $query="select * from students where susername='$username' and spassword='$password'";
           $result=mysql_query($query);
           if(mysql_num_rows($result)==0)
           {
               $query="select * from corporates where cusername='$username' and cpassword='$password'";
               $result=mysql_query($query);
               if(mysql_num_rows($result)==0)
               {
                   die("Incorrect Username or Password");
               }
               else
               {
                   while($row=mysql_fetch_assoc($result))
                   {
                       $dbusername=$row['cusername'];
                       $dbpassword=$row['cpassword'];
                   }
                   if($username==$dbusername&&$password==$dbpassword)
                   {
                      
                       $_SESSION['cusername']=$username;
                       $_SESSION['cpassword']=$password;
                       $uid = $_SESSION['cusername'];
                       header( "Location:/studentconnect/cuserspecforum.php?id=$uid ");
                   }
               }
           }
           else
           {
               if($row=mysql_fetch_assoc($result))
               {
                   $dbusername=$row['susername'];
                   $dbpassword=$row['spassword'];
               }
               if($username==$dbusername&&$password==$dbpassword)
               {
                   $_SESSION['susername']=$username;
                   $_SESSION['spassword']=$password;
                   /*$susername = "username";
                   session_start();
                   session_register($susername);*/
                   $uid=$_SESSION['susername'];
                   header( "Location:/studentconnect/suserspecforum.php?id=$uid ");
                   //echo "<a href='studentselect.html'>click here</a> to view Profile";
               }
           }
        }
        else
        {
            die("Enter Username And Password");
        }
        ?>
</body>  
</html>