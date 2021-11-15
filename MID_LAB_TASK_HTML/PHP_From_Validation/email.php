<?php

function checkemailPattern($str) {
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

function EmailCheck()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sEmail = $_POST['Email'];

		if($sEmail == "" || !checkemailPattern($sEmail))
		{
			echo "Valid Email is required";
		}
	}

}
?>

<html>
<head>
	<title>Person Profile</title>
</head>
<body>
<form method="POST">
	<table width="100%" align="center">
		<tr>
			<td colspan="2">
			<center><h1>Person Profile</h1></center>
			</td>
		</tr>
		<tr>
			<td>

<tr>
			<td>
			<b>Email: </b>
			</td>
			<td>
			<input type="Email" name="Email"><?php EmailCheck(); ?> <br/>
			</td>
		</tr>
	</td>
</tr>
</table>
</form>
</body>
</html>

