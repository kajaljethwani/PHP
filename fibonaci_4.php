<-----1,0,1,0,1,0......n---></br><hr>
<?php
	if (isset($_POST['txtno']))
	{
		$no=$_POST['txtno'];
		for ($i=1;$i<=$no;$i++)
		{
			if($i%2==0)
			{
				echo "0"."&nbsp";
			}
			else
			{	
				echo "1"."&nbsp";
			}
		}
    }
?>
<form action="fibonaci_4.php" method="POST">
	<input type="text" name="txtno"></br></br>
	<input type="submit" value="Display">
</form>