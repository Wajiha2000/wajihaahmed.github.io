<!DOCTYPE html>
<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$database = "theprotec_db";

		$mycon = new mysqli($serverName, $userName,$password, $database);
		if ($mycon->connect_error)
		{
			echo "unable to connect database";
		}
		else {
			echo "database connected ";
		}
		?>
	</body>
</html>