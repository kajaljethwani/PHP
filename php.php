<?php
	if(isset($_POST['txtno']))
	{
		$no=$_POST['txtno'];
		$nm=$_POST['txtnm'];
		echo $no." ".$nm;
	}
?>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap-grid.min.css" />	
	<div class="container mt-5">
      <div class="form-control">	
		<form action="php.php" method="POST">
			<input type="text" name="txtno" class="form-control" placeholder="Enter Roll No" required></br>
			<input type="text" name="txtnm" class="form-control" placeholder="Enter Name" required></br>
			<input type="submit" class="btn btn-primary w=100" value="save">
	  </div>
		</form>
	</div>
</body>