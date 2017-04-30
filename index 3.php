<html>
<body>
<div>
<?php
session_start();
if($_SESSION["jhumpa"])
{
}
else
{
	echo"<script language>'javascript'> alert('You will have to login first.')</script>";
	
	header("location:admin_login.php");
}

?>



<form action="index 3.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend style="text-transform: uppercase;"> enter book details</legend>
<table>

<tr>
<td> Book Name</td>
<td><input type="text" name="bname" placeholder="book name" required </td>
</tr>

<tr>
<td> Author Name</td>
<td><input type="text" name="aname" placeholder="author name" required </td>
</tr>

<tr>
<td>Price</td>
<td><input type="text" name="bprice" placeholder="book price" required</td>
</tr>

<tr>
<td>Publisher</td>
<td><input type="text" name="bpublisher" placeholder="book publisher" required style="text-transform: capitalize;"</td>
</tr>

<tr>
<td>Pages</td>
<td><input type="text" name="bpages" placeholder="book pages" required</td>
</tr>

<tr>
<td> Language </td>
<td><input type="text" name="blanguage" placeholder="book language" required </td>
</tr>

<tr>
<td> Genre</td>
<td><input type="text" name="bgenre" placeholder="book genre" required </td>
</tr>

<tr>
<td> Sub-Genre</td>
<td><input type="text" name="bsub" placeholder="book subgenre" required </td>
</tr>

<tr>
<td> Release Date</td>
<td><input type="text" name="brelease" placeholder="book release" required</td>
</tr>

<tr>
<td> Popular</td>
<td><input type="text" name="bpopular" placeholder="book popular" required</td>
</tr>

<tr>
<td> Offers</td>
<td><input type="text" name="boffers" placeholder="book offers" required</td>
</tr>

<tr>
<td> Image</td>
<td><input type="file" name="filetoupload" id="filetoupload" /></td>
</tr>

<tr>
<td>Discounted Price</td>
<td><input type="text" name="bdprice" placeholder="discounted price" required</td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="submit product" /></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="display" value="display product" /></td>
</tr>

</table>
</fieldset>
</form>
</div>
<?php

if(isset($_REQUEST["submit"]))
{
	$bn=$_REQUEST["bname"];
	$an=$_REQUEST["aname"];
	$bp=$_REQUEST["bprice"];
	$bpu=$_REQUEST["bpublisher"];
	$bpa=$_REQUEST["bpages"];
	$bl=$_REQUEST["blanguage"];
	$bg=$_REQUEST["bgenre"];
	$bs=$_REQUEST["bsub"];
	$br=$_REQUEST["brelease"];
	$bpo=$_REQUEST["bpopular"];
	$bo=$_REQUEST["boffers"];
	$url="img/".$_FILES["filetoupload"]["name"];
	$bdp=$_REQUEST["bdprice"];
	
	
	$target_file="C:\\wamp\\www\\my\\e-commerce\\img/".$_FILES["filetoupload"]["name"];
	
	move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file);
	
	
	$con=mysqli_connect("localhost","root","","ecommerce");
	//$query="insert into `product`(`b_name`,`author`,`price`,`publisher`,`pages`,`language`,`genre`,`subgenre`,`release date`,`popular`,`offers`,`imgurl`) values('$bn','$an','$bp','$bpu','$bpa','$bl','$bg','$bs','$br','$bpo','$bo','$url')";
	//echo $query;
	mysqli_query($con,"insert into `product`(`b_name`,`author`,`price`,`publisher`,`pages`,`language`,`genre`,`subgenre`,`release date`,`popular`,`offers`,`imgurl`,`discounted_price`) values('$bn','$an','$bp','$bpu','$bpa','$bl','$bg','$bs','$br','$bpo','$bo','$url','$bdp')");
}


if(isset($_REQUEST["display"]))
{
	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"select * from `product`");
	
	echo "<table><tr>
	<th>ID</th>
	<th>Book Name</th>
	<th>Author Name</th>
	<th>Price</th>
	<th>Publisher</th>
	<th>Pages</th>
	<th>Language</th>
	<th>Genre</th>
	<th>Sub-Genre</th>
	<th>Release-Date</th>
	<th>Popular</th>
	<th>Offers</th>
	<th>Image</th>
	<th>Discounted Price</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<14;$i++)
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";	}
	echo"</table>";
}

	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"select `id` from `product`");
 
	echo"<form action='index 3.php' method='post'>";
	echo"<select name='ID'/>";

	while($val=mysqli_fetch_array($res))
	{
		echo"<option>$val[0]</option>";
    }
	
	echo"</select>";
	echo"<input type='submit' name='ser' value='search'/>";
	echo"<br/>";
	echo"<input type='submit' name='delete' value='delete product' />";
	echo"<br/>";
	echo"<input type='submit' name='update' value='update product' />";
	echo"</form>";

if(isset($_REQUEST["ser"]))
{
	$val1=$_REQUEST["ID"];
	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"select * from `product` where `id`='$val1' ");
	
	echo "<table><tr>
	<th>ID</th>
	<th>Book Name</th>
	<th>Author Name</th>
	<th>Price</th>
	<th>Publisher</th>
	<th>Pages</th>
	<th>Language</th>
	<th>Genre</th>
	<th>Sub-Genre</th>
	<th>Release-Date</th>
	<th>Popular</th>
	<th>Offers</th><th>Image</th>
	<th>Discounted Price</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<13;$i++)
			
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";
	}
	echo"</table>";
}


if(isset($_REQUEST["delete"]))
{
	$val1=$_REQUEST["ID"];
	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"delete from `product` where `id`='$val1'");
}


	if(isset($_REQUEST["update"]))
	{	
		$val1=$_REQUEST["ID"];

echo"<form action='index 3.php' method='post' enctype='multipart/form-data'>
<fieldset>
<legend style='text-transform: uppercase;'> enter book details</legend>
<table>

<tr>
<td> Product id</td>
<td><input type='text' name='prodid' value='$val1' /> </td>
</tr>

<tr>
<td> Book Name</td>
<td><input type='text' name='bname' placeholder='book name' style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Author Name</td>
<td><input type='text' name='aname' placeholder='author name'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td>Price</td>
<td><input type='text' name='bprice' placeholder='book price'  </td>
</tr>

<tr>
<td>Publisher</td>
<td><input type='text' name='bpublisher' placeholder='book publisher'  style='text-transform: capitalize;'</td>
</tr>

<tr>
<td>Pages</td>
<td><input type='text' name='bpages' placeholder='book pages' </td>
</tr>

<tr>
<td> Language </td>
<td><input type='text' name='blanguage' placeholder='book language'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Genre</td>
<td><input type='text' name='bgenre' placeholder='book genre'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Sub-Genre</td>
<td><input type='text' name='bsub' placeholder='book subgenre'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Release Date</td>
<td><input type='text' name='brelease' placeholder='book release' </td>
</tr>

<tr>
<td> Popular</td>
<td><input type='text' name='bpopular' placeholder='book popular' </td>
</tr>

<tr>
<td> Offers</td>
<td><input type=text' name='boffers' placeholder='book offers' </td>
</tr>

<tr>
<td> Image</td>
<td><input type='file' name='filetoupload' id='filetoupload' /></td>
</tr>

<tr>
<td></td>
<td><input type='submit' name='upd' value='update product' />
</td>
</tr>

</table>
</fieldset>
</form>
";
	}
if(isset($_REQUEST["upd"]))
{
	$pn=$_REQUEST["pname"];
	$pp=$_REQUEST["pprice"];
	$val2=$_REQUEST["prodid"];
	$con=mysqli_connect("localhost","root","","ecommerce");
	mysqli_query($con,"UPDATE `product` SET `b_name`='$bn',`author`='$an',`price`='$bp',`publisher`='$bpu',`pages`='$bpa',`language`='$bl',`genre`='$bg',`sub genre`='$bs',`release date`='$br',`popular`='$bpo',`offers`='$bo',`imgurl`='$url' WHERE `id`='$val2'");
}
	


?>
</body>
</html>