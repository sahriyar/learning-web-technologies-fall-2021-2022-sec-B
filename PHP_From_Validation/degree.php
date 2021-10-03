<?php 
function CheckDegree()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//$Sdegree = $_POST['check'];

		if(empty($_POST['check']))
		{
			echo "check the degrees";
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
		<b>Degree:</b>
		</td>

		<td>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>SSC</b>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>HSC</b>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>BSc.</b>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>MSc.</b>
		<? CheckDegree(); ?>
		</td>
	</tr>
			
	</td>
</tr>
</table>
</form>
</body>
</html>
