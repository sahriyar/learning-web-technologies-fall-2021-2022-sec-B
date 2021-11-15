<?php
function IsGenderSelected()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sGender = $_POST['gender'];

		if($sGender == "")
		{
			echo "Please select your gender";
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
			<b>Gender: </b>
			</td>

			<td>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male"><b>Male</b></label>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female"><b>Female</b></label>
			<input type="radio" id="other" name="gender" value="other">
			<label for="other"><b>Other</b></label>  
			
			</td>
	</td>
</tr>
</table>
</form>
</body>
</html>

