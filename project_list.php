<?php
	include('config.php'); 
	include('header.php');
	if(isset($_GET['status']))
	{
		$status = $_GET['status'];
		$sql = "select * from project where status='$status'";
		$res = mysqli_query($con,$sql);
	}
	if(isset($_POST['txtpname']))
	{
		$id = $_POST['txtid'];
		$pname = $_POST['txtpname'];
		$cname = $_POST['txtcname'];
		$cnum = $_POST['txtcno'];
		$sql = "UPDATE `project` SET `proj_name`='$pname',`client_name`='$cname',`client_number`='$cnum' WHERE `id`='$id'";
		if(mysqli_query($con,$sql))
		{
			header("location:index.php");
		}
	}
?>
<div class="container mt-2 mb-2">
	<a href="index.php" class="btn btn-primary">BACK</a></br></br>
	<table class="table table-sm table-bordered text-center">
		<tr>
			<th>Sr
			<th>Project Name
			<th>Client Name
			<th>Client No.
			<th>Amount
			<th>Rec. Date
			<th>Due Date
			<th>Actions
<?php
	$i = 0;
	while($row = mysqli_fetch_assoc($res))
	{
		$i++;
?>
	<tr>
		<td><?php echo $i; ?>
		<td><?php echo $row['proj_name']; ?>
		<td><?php echo $row['client_name']; ?>
		<td><?php echo $row['client_number']; ?>
		<td><?php echo $row['proj_amount']; ?>
		<td><?php echo $row['prdate']; ?>
		<td><?php echo $row['pddate']; ?>
		<td><a href="#" class="btn btn-sm text-white bg-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-id="<?php echo $row['id']; ?>" data-bs-pname="<?php echo $row['proj_name']; ?>" data-bs-cname="<?php echo $row['client_name']; ?>" data-bs-cnum="<?php echo $row['client_number']; ?>">Update</a>
<?php
	}
?>
	</table>
	<div class="modal fade  text-center" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-titl" id="staticBackdropLabel">Update Project</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<form action="project_list.php" method="POST">
					<input type="text" id="txtpname" name="txtpname" class="form-control" placeholder="Enter Project Name" required></br>
					<input type="text" id="txtid" name="txtid" class="form-control" hidden>
					<input type="text" id="txtcname" name="txtcname" class="form-control" placeholder="Enter Client Name" required></br>
					<input type="text" id="txtcno" name="txtcno" class="form-control" placeholder="Enter Client Number" required>
			  </div>
			  <div class="modal-footer">
				<input type="submit" class="btn btn-primary w-100" value="Update Project">
				</form>
			  </div>
			</div>
		  </div>
		</div>
</div>
<script>
  const exampleModal = document.getElementById('staticBackdrop')
  exampleModal.addEventListener('show.bs.modal', event => {
  const button = event.relatedTarget
  const id = button.getAttribute('data-bs-id')
  const pname = button.getAttribute('data-bs-pname')
  const cname = button.getAttribute('data-bs-cname')
  const cnum = button.getAttribute('data-bs-cnum')
  const modalTitle = exampleModal.querySelector('.modal-titl')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalTitle.textContent = `Update Project ID : ${id}`
  document.getElementById("txtpname").value = pname 
  document.getElementById("txtid").value = id 
  document.getElementById("txtcname").value = cname 
  document.getElementById("txtcno").value = cnum 
})
</script>