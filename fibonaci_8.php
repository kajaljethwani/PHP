<---A0 B2 C1 D1 E2
    F0 G0 H2 I1
	J1 K2 L0
	M0 N2
	O1.....N---> Pyramid</br><hr>
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
		
		for($i=$no;$i>=1;$i--)
		{			
			for($j=1;$j<=$i;$j++)
			{	
				if($count==1)
				{
					echo chr($l).$a."&nbsp";
					$l++;
					$count++;
				}
				else if($count==2)
				{
					echo chr($l).$b."&nbsp";
					$l++;
					$count++;
				}
				else if($count==3)
				{
					echo chr($l).$c."&nbsp";
					$l++;
					$count=0;
					$count=1;
				}
				else if($count1==1)
				{
					echo chr($l).$d."&nbsp";
					$l++;
					$count1=2;
				}
				else if($count1==2)
				{
					echo chr($l).$e."&nbsp";
					$l++;
					$count1=3;
				}
				else if($count1==3)
				{
					echo chr($l).$f."&nbsp";
					$l++;
					$count1=0;
					$count=1;
				}
				
			}
				echo "<br>";  
		}
	
	}
?>
<form action="fibonaci_8.php" method="POST">
	<input type="text" name="txtno"></br></br>
	<input type="submit" value="Display">
</form>