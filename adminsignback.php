<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="images/sportena.jpg">
		<title>Sportena - Admin</title>
		<style>
			table th{
				border: 1px solidblack; 
				text-align: center; 
				vertical-align: middle;
				font-size : 20px;
				border-collapse:collapse;
				background-color:lightblue;
			}
			table 
			{ 
				background-color:white;
				text-align: center; 
				width: 90%;
				margin: auto;
			} 
	</style>
	</head>
	<body>
		<?php
		$servername = "localhost"; 
		$username = "root"; 
		$password = ""; 
		$dbname = "sportena"; 
		$a=[];

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
		$sql = "SELECT * FROM resgistration";

		$result = $conn->query($sql);
		echo "<br>";
		echo "<table border='2'>";
		echo "<tr>";
		echo "<th>NAME</th><th>EMAIL</th><th>PHONE</th><th>INFORMATION</th></tr>";
		if ($result->num_rows> 0)
		{

		while($row = $result->fetch_assoc())
			{ echo "<tr>";
			echo "<td>". $row["name"]."</td>";
			echo "<td>". $row["email"]."</td>";
			echo "<td>". $row["phone"]."</td>";
			echo "<td>". $row["info"]."</td></tr>";
			
		}
		}

		$conn->close();
		?>
		<a href="admin_sign_in.html">Logout</a>

	</body>
</html>