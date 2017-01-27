<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="header.css" type="text/css">
    </head>  
<?php
session_start();
     $conn=mysql_connect("localhost", "root", "");
if(!$conn)
{
    die("Couldn't connect to database");
}
mysql_select_db("studentconnect",$conn);
if(isset($_POST['fullname'], $_POST['collegename'], $_POST['rollno'], $_POST['emailid'], $_POST['user_name'], $_POST['password']) and $_POST['user_name']!='')
{
	if(get_magic_quotes_gpc())
	{
		$_POST['fullname'] = stripslashes($_POST['fullname']);
		$_POST['collegename'] = stripslashes($_POST['collegename']);
		$_POST['rollno'] = stripslashes($_POST['rollno']);
		$_POST['emailid'] = stripslashes($_POST['emailid']);
		$_POST['user_name'] = stripslashes($_POST['user_name']);
                $_POST['password'] = stripslashes($_POST['password']);
	}
	
		if(strlen($_POST['password'])>=6)
		{
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['emailid'])&& preg_match('/^S/',$_POST['user_name']))
			{
                                $sfname = mysql_real_escape_string($_POST['fullname']);
                                $sclgename = mysql_real_escape_string($_POST['collegename']);
                                $srollnum = mysql_real_escape_string($_POST['rollno']);
                                $seid = mysql_real_escape_string($_POST['emailid']);
				$suname = mysql_real_escape_string($_POST['user_name']);
				$spass = mysql_real_escape_string(sha1($_POST['password']));
$query="INSERT INTO students (sfullname, scollegename, srollno, semailid, susername, spassword) VALUES('".$sfname."','".$sclgename."','".$srollnum."','".$seid."','".$suname."','".$spass."')";
$result=mysql_query($query);
if(!$result)
{
   echo "failed";
   echo mysql_error();
}
else{  
}
                        }
                        else {
                            echo ("Check Email or Username") ;  
                        }
                }
                else
                    echo 'Password should be of minimum 6 Characters';
}
else
{
    die("Enter all the details");
}
mysql_close($conn);
?>
<body>
    h1 align="center">Registration Successful</h1>
 <br/><br/>
 <h1>Click <a href="index.php">here</a>To login</h1>
</body>
</html>