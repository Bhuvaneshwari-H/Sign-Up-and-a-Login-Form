<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['username'])){
	header('locaton:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,inital-scale=1.0">
	<title>Signup page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
  <h1 class="display-4 text-center text-success">Welcome <?php echo $_SESSION['username'];?></h1>
  
  <p class="lead">
  	<a class="btn btn-danger btn-lg" href="logout.php" role="button">Log Out</a>
  </p>
</div>
</body>
</html>

