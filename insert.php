<?php
	$con=mysqli_connect("localhost","root","","kajal");
	if(isset($_POST['txtid']))
	{
		$id = $_POST['txtid'];
		$pname = $_POST['txtpname'];
		$cname = $_POST['txtcname'];
		$cnum = $_POST['txtcno'];
		$sql="INSERT INTO `project`(`id`, `project name`, `client name`, `client no`,) VALUES ('$id','$project_name')
		mysqli_query($con,$sql);
	}
?>