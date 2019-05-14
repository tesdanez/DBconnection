<?php require "db.php";?>
<?php include 'functions.php';?>
<?php
	
 	if(isset($_POST['submit'])){
 		$username = $_POST['username'];
 		$password = $_POST['password'];
 		$id = $_POST['id'];	

 		$query = "UPDATE users SET username ='$username', password = '$password' WHERE id = {$id}";
 		$result = mysqli_query($connection,$query);

 		if(!$result){
 			die("Query Failed" .mysqli_error());
 		}
 	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>

	<div class="container col-lg-6 mx-auto border border-success rounded-lg">
		<h1>UPDATE</h1>
		<div>
			<form method="POST" action="login-update.php">
				<div class="form-group">
					<label>Username :</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group">
					<label>Password :</label>
					<input type="password" name="password" class="form-control">	
				</div>

				<select name="id">
					<?php
						showData();
					?>
				</select>
				<br>

					<input type="submit" name="submit" value="login" class="btn btn-primary">
			</form>

		</div>

	</div>

</body>
</html>