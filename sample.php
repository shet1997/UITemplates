<?php


$servername = "localhost";
$username = "prajwala";
$password = "root";
$database = "sample";

// Create connection
$conn = mysqli_Connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST") {


	$insert_form_val = "INSERT INTO sample(first_name, last_name) VALUES('".trim($_POST['first_name'])."', '".trim($_POST['last_name'])."') ";


if (mysqli_query($conn, $insert_form_val)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert_form_val . "<br>" . mysqli_error($conn);
}

}

die();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>first name</label>
				<input type="text" name="first_name" class="form-control">
			</div>
			<div class="form-group">
				<label>last name</label>
				<input type="text" name="last_name" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">submit</button>
		</form>
	</div>
</body>
</html>