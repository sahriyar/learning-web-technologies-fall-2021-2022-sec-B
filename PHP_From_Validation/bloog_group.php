<?php
function BG()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$bloodGroup = $_POST['blood'];

		if(empty($bloodGroup))
		{
			echo "Blood Group is required";
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
		<b>Blood Group:</b>
		</td>

		<td>
			<select name="blood">
				<option></option>
				<option >A+</option>
				<option >B+</option>
				<option>AB+</option>
				<option >O+</option>
			</select>
			<?php BG(); ?>
			</td>
		</tr>
			
	</td>
</tr>
</table>
</form>
</body>
</html>

