<-----1,1,2,3,5,8,13......n---></br><hr>
<?php
	if (isset($_POST['txtno']))
	{
		$no=$_POST['txtno'];
		$a=0;
		$b=1;
		for ($i=1;$i<=$no;$i++)
		{
			$c=$a+$b;
			$a=$b;
			$b=$c;
			echo $c."&nbsp";
		}
    }
?>
<form action="fibonaci.php" method="POST">
	<input type="text" name="txtno"></br>
	<input type="submit" value="Display">
</form>