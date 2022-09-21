<---A0z1 B1y2 C2x1 D2w2 .....N---></br><hr>
<?php
	if(isset($_POST['txtno']))
	{
		$no=$_POST['txtno'];
		$count=1;
		$count1=0;
		$a=0;
		$b=2;
		$c=1;
		$d=1;
		$e=2;
		$f=0;
		$l=65;
		
		$x=1;
		$y=2;
		
		$z=122;
		
		for($i=$no;$i>=1;$i--)
		{
		  if($i<=2)
	      {
			  echo $i."&nbsp";
		  }
			for($j=1;$j<=$i;$j++)
			{	
				if($count==1)
				{
					echo chr($l).$a.chr($z).$x."&nbsp";
					$l++;
					$count++;
					$z--;
				}
				else if($count==2)
				{
					echo chr($l).$b.chr($z).$y."&nbsp";
					$l++;
					$count++;
					$z--;
				}
				else if($count==3)
				{
					echo chr($l).$c.chr($z).$x."&nbsp";
					$l++;
					$count=0;
					$count1=1;
					$z--;
				}
				else if($count1==1)
				{
					echo chr($l).$d.chr($z).$y."&nbsp";
					$l++;
					$count1=2;
					$z--;
				}
				else if($count1==2)
				{
					echo chr($l).$e.chr($z).$x."&nbsp";
					$l++;
					$count1=3;
					$z--;
				}
				else if($count1==3)
				{
					echo chr($l).$f.chr($z).$y."&nbsp";
					$l++;
					$count1=0;
					$count=1;
					$z--;
				}
				
			}
				echo "<br>";  
		}
	
	}
?>
<form action="fibonaci_9.php" method="POST">
	<input type="text" name="txtno"></br></br>
	<input type="submit" value="Display">
</form>