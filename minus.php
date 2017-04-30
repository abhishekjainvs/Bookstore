<?php

		if($_GET["cata"])
		{
			session_start();
			$v=$_GET["cata"];
			$uid=$_SESSION["userid"];
			
			$con=mysqli_connect("localhost","root","","ecommerce");
			$res=mysqli_query($con,"select * from `cart` where `name`='$v' and `email`='$uid'");
			
	while($val=mysqli_fetch_array($res))
	{
		//$con=mysqli_connect("localhost","root","","ecommerce");
		
		$s=$val[6];
		
		$result=mysqli_query($con,"select * from `product` where `b_name`='$v'");
			
			while($val1=mysqli_fetch_array($result))
	{
		$qp=$val1[14];
		
		if($s!=0)
		{
			$s=$s-1;
			$qp=$qp+1;
			
			$query="update `cart` set `quantity`='$s' where `name`='$v' and `email`='$uid'";
		echo $query;
		mysqli_query($con,$query);
		
		mysqli_query($con,"update `product` set `quantity`='$qp' where `b_name`='$v'");

		}
		
	}	
	}


header("location:user_details.php?");

}

else
{
	echo"<script language='javascript'> alert('You will have to login first.')</script>";
	
	header("location:login.php");
}


?>