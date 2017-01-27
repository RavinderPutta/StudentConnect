<html>
<head>
    <title>Student Connect</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="header.css" type="text/css">
</head>
<?php include 'header.php';?>
<body>
    <div id="infobox">
    <table border="0" cellspacing="1" align="center">
<form id="form1" name="form1" method="post" action="login.php">
<tr>
<td colspan="2"><h2>Members Login</h2></td>
</tr>
<tr>
<td>UserName:</td>
<td><input type="text" name="username"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td align="center">
<input type="submit" name="btnSubmit" value="Log In" class="button" />
</td>
<td align="center">
<a href="userselect.php">New User??</a>
</td>
</tr>
</form>
</table>
    </div>
</body>
</html>