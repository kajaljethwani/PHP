<?php
	$con=mysqli_connect("localhost","root","","college_mgt");
	if (isset($_POST['texrno']))
	{
		$rno=$_POST['texrno'];
		$nm=$_POST['textnm'];
		$sql="INSERT INTO `college_mgt`( `roll_no`, `name`) VALUES ('$rno','$nm')";
		mysqli_query($con,$sql);
	}
?>

<html>
	<head> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container mt-3">
			<form action="table3.php" method="POST">
				<input type="text" name="texrno" class="form-control" placeholder="Enter Roll No" required></br>
				<input type="text" name="textnm" class="form-control" placeholder="Enter Name" required></br>
				<input type="submit" class="btn btn-primary w-100" value="Save">
			</form>
				<table class="table table-bordered text-center">
					<tr>
						<th>SR.
						<th>Roll No
						<th>Name
						<th>Actions
					<?php
						$sql="SELECT * FROM `college_mgt`";
						$res=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($res))
						{
					?>
						<tr>
							<td><?php echo $i; ?>
							<td><?php echo $row['roll_no']; ?>
							<td><?php echo $row['name']; ?>
							<td> <a class="btn btn-danger" href="delete.php?id=<?php echo $row [`id`]; ?>">delete</a>
							
					<?php 
							$i++;
						}
					?>
				</table>							
		</div>
	</body>
</html>
