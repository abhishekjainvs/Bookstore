<?php
session_start();
if(isset($_SESSION["userid"]))
{
	
	$uid=$_SESSION["userid"];
	$upass=$_SESSION["pass"];
	
	if($_GET["cata"])
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","ecommerce");
			$res=mysqli_query($con,"select * from `product` where `id`='$v'");
			
	while($val=mysqli_fetch_array($res))
	{
		//$con=mysqli_connect("localhost","root","","ecommerce");
		
		$s=$val[8];
		$q=$val[14];
		
			$result=mysqli_query($con,"select * from `cart` where `email`='$uid' and `name`='$val[1]'");
		
			if($val1=mysqli_fetch_array($result))
			{
				if($q!="0")
				{
					$quan=$val1[6];
					$quan=$quan+1;
					$q=$q-1;
					
					mysqli_query($con,"update `cart` set `quantity`='$quan' where `name`='$val1[2]' and `email`='$uid'");
				
					mysqli_query($con,"update `product` set `quantity`='$q' where `id`='$v'");
					
					header("location:products.php?cata=$s");
				}
				
				
				else
				{
					echo"<script language='javascript'> alert('Out of Stock.')</script>";
				}
				
			}
		
			else
			{
				if($q!="0")
				{
					$q=$q-1;
					$query="insert into `cart` (`email`,`name`,`imgurl`,`price`,`discount`,`quantity`) values ('$uid','$val[1]','$val[12]','$val[3]','$val[11]','1')";
		echo $query;
		mysqli_query($con,$query);
		
		mysqli_query($con,"update `product` set `quantity`='$q' where `id`='$v'");
				
				header("location:products.php?cata=$s");
	
				}
				else
				{
					echo"<script language='javascript'> alert('Out of Stock.')</script>";
				}
				
			}
			
			}	
}


}

else
{
	echo"<script language='javascript'> alert('You will have to login first.')</script>";
	
	header("location:login.php");
}


?>