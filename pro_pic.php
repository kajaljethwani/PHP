<form action="pro_pic.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="txtroll" placeholder="Enter roll no."></br>
	<input type="text" name="txtnm" placeholder="Enter name."></br>
	<input type="file" name="fileupload1" id="imgInp" accept=".png.jpg.jpeg"></br>
	<img src="" id="blah" alt="select image" height="150" width="150"></br>
	<input type="submit" value="save">
</form>

<?php
	if(isset($_POST['txtroll']))
	{
		$con=mysqli_connect("localhost","root","","kajal_1");
		if($con)	
		{
			$roll=$_POST['txtroll'];
			$nm=$_POST['txtnm'];
			$target_dir="images/";
			$name=rand(150,480000);
			$extension=pathinfo($_FILES["fileupload1"]["name"],PATHINFO_EXTENSION);
			$fnm=$name.$extension;
			move_uploaded_file($_FILES["fileupload1"]["tmp_name"],$target_dir.$name.".".$extension);
			$sql="INSERT INTO `profile_pic`(`roll`,`name`,`profile_pic`)VALUES('$roll','$nm','$fnm')";
			$res=mysqli_query($con,$sql);
		}
	}	
?>
<script>
	imgInp.onchange = evt =>
	{
		const[file]=imgInp.files
		if(file)
		{
			blah.src= URL.createObjectURL(file)
		}
	}
</script>