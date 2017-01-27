<head>
    <title>Post Opportunities</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link media="screen" href="header.css" type="text/css" rel="stylesheet">
</head>
<?php
include('config.php');
include 'header.php';
?>
<div id="viewtopic">
<table  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="opportunityinsert.php">
<td>
<table border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Post New Opportunity</strong> </td>
</tr>
<td>&nbsp;</td>
<tr>
<td width="14%"><strong>Title</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="title" type="text" id="title" size="50" /></td>
</tr>
<td>&nbsp;</td>
<tr>
<td valign="center"><strong>Description</strong></td>
<td valign="center">:</td>
<td><textarea name="description" cols="50" rows="10" id="description"></textarea></td>
</tr>
<td>&nbsp;</td>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input class="button" type="submit" name="Submit" value="Submit" align="left"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="button" type="reset" name="Submit2" value="Reset" align="right" />
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
