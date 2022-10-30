<?php
$user=0;
$success=0;
$match=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';
	if(isset($_POST['signup'])){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$cpassword=md5($_POST['cpassword']);

		/*$sql="insert into `data` (username,password) values('$username','$password')";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "Data inserted successfully";
		}else{
			die(mysqli_error($con));
		}
		$sql="Select * from `data` where username='$username'";
		$result=mysqli_query($con,$sql);
		if($result){
			$num=mysqli_num_rows($result);
			echo $num;
		}*/
		$sql="Select * from `data` where username='$username'";
		$result=mysqli_query($con,$sql);
		if($result){
			$num=mysqli_num_rows($result);
			//echo $num;
			if($num>0){
				//echo "User aldready exists";
				$user=1;
			}else{
				if($password===$cpassword){
					$sql="insert into `data` (username,password) values ('$username','$password')";
				$result=mysqli_query($con,$sql);
				if($result){
					//echo "Sign up succesfull";
					$success=1;
				}
				}else{
					//echo "Password didn't match";
					$match=1;
				
			  }
				
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,inital-scale=1.0">
	<title>Signup page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
	if($user){
		echo "<div class='alert alert-danger' role='alert'>
  User aldready exists!
</div>";
	}else{
		if($success){
			echo "<div class='alert alert-success' role='alert'>
  Sign up successfull!
</div>";
		}else{
			if($match){
				echo "<div class='alert alert-danger' role='alert'>
  Password did not match!
</div>";
			}
		}
	}
	?>
	</body>
	</html>
