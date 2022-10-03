<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-3">
 <center><b><h1>Login Page</h1><b></br></center>
	<form action="login_1.php" method="POST">
		<input type="email" name="txtmail" class="form-control" placeholder="Enter Mail Address" required></br>
		<input type="password" name="txtpass" class="form-control" placeholder="Enter Password" required></center></br>
		<center><input type="submit" value="Login" class="btn btn-success w-50">
	</form>
</div>
<?php
if(isset($_POST['txtmail']))
{
	$email=$_POST['txtmail'];
	$password=$_POST['txtpass'];
	$sql="SELECT * FROM `social_media` WHERE `mail`='$email' `pass`='$password'";
	$res=mysqli_query($con,$sql);
	header("location:home_page.php");
}
?>