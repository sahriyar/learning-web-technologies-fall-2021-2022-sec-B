<?php

function nameCheck()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sname = $_POST['name'];

		if($sname == "" || strlen($sname) < 2 || ctype_digit($sname[0]) )
		{
			echo "Please enter a valid name";
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

			<b>Name:</b>
			</td>
			<td>
			<input type="text" name="name" value=""><?php nameCheck(); ?> <br/>
			</td>
		</tr>
	</table>
</form>
</body>
</html>