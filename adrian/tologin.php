<?php

	if(isset($_POST["username"])){

		$username = $_POST["username"];
		$password = $_POST["password"];

		echo $username;
		echo $password;

		$connection = mysqli_connect("localhost", "root","", "testphp");

			if ($connection) {
				echo "WEEEEEEEEE";
			}else {
				die ("DB Connection Failed");
			}

			$query = "INSERT INTO users (username,password) VALUES ('$username', '$password')";

		$result = mysqli_query($connection, $query);

		if(!$result){
			die('DIE Query' .mysqli_error());
		}
	}
?>




<!DOCTYPE html>
<html>
<head>
	<title>To login</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
	<div class="container col-lg-6 mx-auto border border-success rounded-lg">
		<h1>Login</h1>
		<div>
			<form method="POST" action="tologin.php">
				<div class="form-group">
					<label>Username :</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group">
					<label>Password :</label>
					<input type="password" name="password" class="form-control">	
				</div>


					<input type="submit" name="submit" value="login" class="btn btn-primary">
			</form>

		</div>

	</div>


</body>
</html>