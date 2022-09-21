<?php
	$con = mysqli_connect("localhost","root","","kajal");
	if (isset($_POST['txtsnm']))
	{
		$snm=$_POST['txtsnm'];
		$rno=$_POST['txtrno'];
		$sno=$_POST['txtsno'];
		$sql="INSERT INTO `shop_details`(`shop name`, `route no`, `shop no`) VALUES ('$snm','$rno','$sno')";
		$res=mysqli_query($con,$sql);
	}
?>

<head> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container mt-3">
			<form action="shop.php" method="POST">			
				<input type="text" name="txtsnm" class="form-control" placeholder="Enter Shop-Name" required></br>
				<input type="text" name="txtrno" class="form-control" placeholder="Enter Route-No" required></br>				
				<input type="text" name="txtsno" class="form-control" placeholder="Enter Shop-No" required></br>				
				<center><input type="submit" class="btn btn-primary w-50" value="Save"></center>
		</div>	
			</form>
<?php
	if (isset($_POST['txtsnm']))
	{
		$snm=$_POST['txtsnm'];
		$rno=$_POST['txtrno'];
		$sno=$_POST['txtsno'];
		$sql="UPDATE `shop_details` SET `shop name`='$snm',`route no`='$rno',`shop no`='$sno' WHERE `id`='$id'";
		$res=mysqli_query($con,$sql);
	}
?>