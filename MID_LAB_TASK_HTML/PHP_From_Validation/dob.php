<?php

function DOB()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sDOB = $_POST['dob'];

		if($sDOB == "")
		{
			echo "Date of birth required";
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

			<td><b>Date Of Birth:</b></td>
			<td> <input type="text" id = "day" name="dob" size="2">/<input type="text" id = "month" name="dob" size="2">/
			<input type="text" id = "year" name="dob" size="2">
			(dd/mm/yyyy) <?php DOB(); ?></td> 
			
	</td>
</tr>
</table>
</form>
</body>
</html>

