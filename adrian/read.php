<?php

$connection = mysqli_connect('localhost','root','','testphp');

	if($connection){
		echo "WRRRRRRRRRRR";
	}
	else {
		die("DB WEW FAILED");
	}

	$query = "SELECT * FROM users";
	$result = mysqli_query($connection,$query);

	if(!$result){

		die("DEADS No working " .mysql_error());

	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>
		READ
	</title>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="col-lg-6">
			<?php
				while($row = mysqli_fetch_row($result)) {
					print_r($row);
			?>
				<pre>
					<?php
					print_r($row);
					?>
				</pre>

			<?php	
				}

			?>
			
		</div>
	</div>

</body>
</html>