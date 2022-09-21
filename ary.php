<form action="ary.php" method="POST">
	<input type="text" name="txtval" placeholder="Enter">
	<input type="submit" value="save">
</form>

<form action="ary.php" method="POST">
<?php
	if (isset($_POST['txtval']))
	{
		session_start();
		$_SESSION['count']=$_POST['txtval'];
		
		for($i=1; $i<=$_SESSION['count'];$i++)
	    {
		?>
			<input type="text" name="txtarray<?php echo $i ?>" required></br>
		<?php
		}
		?>
		<input type="submit" value="store">
		</form>
	    <?php
	}
			if (isset($_POST['txtarray1']))
			{
				session_start();
				for ($i=1; $i<=$_SESSION['count']; $i++)
				{
					$array[$i]=$_POST['txtarray'.$i];
					echo $array[$i];
				}
			}	
		?>
	