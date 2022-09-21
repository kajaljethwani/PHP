<?php
	$con = mysqli_connect("localhost","root","","kajal");
	$id=$_REQUEST['id'];
	$sql="DELETE FROM `kajal` WHERE `id`='$id'";
	$res=mysqli_query($con,$sql);
	header("location:project.php");
?>