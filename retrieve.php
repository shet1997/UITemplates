<?php 

// header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "prajwala";
$password = "root";
$database = "sample";

// Create connection
$conn = mysqli_Connect($servername, $username, $password, $database);
$conn->set_charset("utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$select = "SELECT * FROM sample";
$select_ex = mysqli_query($conn, $select);




?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
	<table class="table">
		<thead>
			<th>first_name</th>
			<th>last_name</th>
		</thead>
		<tbody>
			<?php

			while($row = mysqli_fetch_assoc($select_ex)) {
				print_r($row);
				echo "<tr><td>".$row['first_name']."</td>
					      <td>".$row['last_name']."</td>
					  </tr>";

			}

			 ?>
		</tbody>
	</table>
 </div>
</body>
</html>