<?php
	$con = mysqli_connect("localhost","root","","college_mgt");
	if(!$con)
	{
		echo "Some Problem With Database";
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
	</head>
	<div class="container mt-2">
		<form action="index.php" method="POST">
			<input type="text" name="txtrno" class="form-control" placeholder="Enter Roll No." required></br>
			<input type="text" name="txtnm" class="form-control" placeholder="Enter Stud. Name" required></br>
			<input type="submit" class="btn btn-primary w-100" value="Save">
		</form>
	</div>
	<?php
		if(isset($_POST['txtrno']))
		{
			$rno = $_POST['txtrno'];
			$nm = $_POST['txtnm'];
			$sql = "INSERT INTO `stud`(`roll_no`, `stud_name`) VALUES ('$rno','$nm')";
			mysqli_query($con,$sql);
		}
	?>
	<div class="container">
		<table class="table table-sm table-bordered text-center">
			<tr>
				<th>SR.
				<th>Roll No.
				<th>Student Name
				<th>Actions
			<?php
				$sql = "select * from stud";
				$res = mysqli_query($con,$sql);
				$i = 1;
				while($row = mysqli_fetch_assoc($res))
				{
			?>
					<tr>
						<td><?php echo $i; ?>
						<td><?php echo $row['roll_no']; ?>
						<td><?php echo $row['stud_name']; ?>
						<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-id="<?php echo $row['id']; ?>" data-bs-nm="<?php echo $row['stud_name']; ?>">Update</button>
			<?php
					$i++;
				}
			?>
		</table>
	</div>
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Roll No:</label>
            <input type="text" class="form-control" id="roll">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Student Name:</label>
            <input type="text" class="form-control" id="sname">
          </div>
        </form>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary w-100">Update</button>
		  </div>
		</div>
	 </div>
</div>
</html>
<script>
	const exampleModal = document.getElementById('staticBackdrop')
	exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const roll = button.getAttribute('data-bs-id')
    const nm = button.getAttribute('data-bs-nm')
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')
    const modalBodyInput1 = exampleModal.querySelector('.modal-body input')
    document.getElementById('roll').value = roll;
	document.getElementById('sname').value = nm;
})
</script>
