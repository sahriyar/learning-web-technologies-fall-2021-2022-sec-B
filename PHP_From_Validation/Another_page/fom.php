<?php

		 if (emptyempty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
			echo "Your name is: ". $name;
		}	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>NAME</legend>
			Name: <input type="text" name="myname" value="">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>