<?php

		 if (emptyempty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";   
            }  
			echo "Your name is: ". $name;
		}	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Email</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Email</legend>
			Email: <input type="text" name="myname" value="">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>