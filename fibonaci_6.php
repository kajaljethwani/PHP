<---1 A 2 B 3 C 4 C.....N---></br><hr>
<?php
	if(isset($_POST['txtno']))
	{
		$a=65;
		$b=122;
		$no=$_POST['txtno'];
		for($i=1;$i<=$no;$i++)
		{
			echo $i.chr($a).($b)."&nbsp";
			$a++;
			$b--;
		}
	}
?>
<form action="fibonaci_6.php" method="POST">
	<input type="text" name="txtno"></br></br>
	<input type="submit" value="Display">
</form>