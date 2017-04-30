<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BOOK ROOM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/logo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<?php
session_start();

//$upass=$_SESSION["pass"];
if(isset($_SESSION["userid"]))
{
	$uid=$_SESSION["userid"];
	echo"<div class='span6'><strong>Welcome! $uid </strong></div>
	<div class='span6'>
	<div class='pull-right'>";
	
			$con=mysqli_connect("localhost","root","","ecommerce");
			$val=mysqli_query($con,"select count(*) as `total` from `cart` where `email`='$uid'");
			$data=mysqli_fetch_object($val);
			echo"<a href='user_details.php'><span class='btn btn-mini btn-primary'><i class='icon-shopping-cart icon-white'></i> [ $data->total ] Itemes in your cart </span> </a>";
	
	echo"</div>
	</div>";

}
else
{
	echo"<div class='span6'><strong>Welcome! user </strong></div>";

}
?>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
<?php include("include 1.php");?>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php include("include 2.php"); ?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	
		
	<div class="row">	
	
	
	<?php
	if($_GET["cata"])
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","ecommerce");
			$res=mysqli_query($con,"select * from `product` where `id`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
		echo"
			<div id='gallery' class='span3'>
            <a href='$val[12]' title='$val[1]'>
				<img src='$val[12]' style='width:100%'/>
            </a></div>";
			
			echo"<div class='span6'>
				<h3>$val[1]</h3>
				<h5>$val[2]</h5>
				<hr class='soft'/>
				<form class='form-horizontal qtyFrm' action='product_details.php' method='post'>
				  <div class='control-group'>
					<label class='control-label' style='text-decoration: line-through;'><span>Rs.$val[3]</span></label><br/>
					<label class='control-label' style='margin-left:-160px;'><span>Rs.$val[13]</span></label>
					<div class='controls'>
					
					  <a href='cart.php?cata=$val[0]' class='btn btn-large btn-primary pull-right'> Add to <i class=' icon-shopping-cart'></i></a>
					</div>
				  </div>
				</form>
				
				<a class='btn btn-small pull-right' href='#detail'>More Details</a>
				<br class='clr'/>
			<a href='#' name='detail'></a>
			<hr class='soft''/>
			</div>
			";
	
	echo"<div class='span9'>
            <ul id='productDetail' class='nav nav-tabs'>
              <li class='active'><a href='#home' data-toggle='tab'>Product Details</a></li>
              <li><a href='#profile' data-toggle='tab'>Related Products</a></li>
            </ul>";
          	
	}
		}
		?>
			<?php	
			
				if($_GET["cata"])
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","ecommerce");
			$result=mysqli_query($con,"select * from `product` where `id`='$v'");
			
			 echo" <div id='myTabContent' class='tab-content'>
              <div class='tab-pane fade active in' id='home'>
			  <h4>Product Information</h4>
			  
                <table class='table table-bordered'>
				<tbody>
				<tr class='techSpecRow'><th colspan='2'>Product Details</th></tr>
				";
			
				while($val1=mysqli_fetch_assoc ($result))
	{
		//--------------------------
		$i=0;
			foreach($val1 as $name=>$value)
				{
				
				    if($i>3 && $i<11)	
					{
						//echo"<td class='techSpecTD2'> $val[$i]</td>";
					echo"<tr class='techSpecRow'><td class='techSpecTD2'>$name</td><td class='techSpecTD2'> $value </td></tr>";
					}
					elseif($i==11)
					{
						echo"<tr class='techSpecRow'><td class='techSpecTD2'>offers</td><td class='techSpecTD2'> $value% </td></tr>
					";
					}
					$i++;
				}
				
				
				}
		//-----------------
		
		
	
				
				
				echo"</tr>
				</tbody>
				</table>
				</div>";
				
	}
		
		?>
				
	<?php
	if($_GET["cata"])
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","ecommerce");
			$res=mysqli_query($con,"select * from `product` where `id`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
	echo"
		<div class='tab-pane fade' id='profile'>
		<div id='myTab' class='pull-right'>
		 <a href='#listView' data-toggle='tab'><span class='btn btn-large'><i class='icon-list'></i></span></a>
		 <a href='#blockView' data-toggle='tab'><span class='btn btn-large btn-primary'><i class='icon-th-large'></i></span></a>
		</div>
		<br class='clr'/>
		<hr class='soft'/>
		<div class='tab-content'>
			<div class='tab-pane' id='listView'>";
			
			
	}
		}
		?>
		
			<?php
		if($_GET["cata"])
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","ecommerce");
			$res=mysqli_query($con,"select * from `product` where `id`='$v'");
	
			while($val=mysqli_fetch_array($res))
		{
	$t=$val[8];
		}
	
	$re=mysqli_query($con,"select * from `product` where `subgenre`='$t'");
		while($val=mysqli_fetch_array($re))
		{
	
		echo"
		
				<div class='row'>	  
					<div class='span2'>
						<img src='$val[12]' alt=''/>
					</div>
					<div class='span4'>
						<h3>$val[1]</h3>				
						<hr class='soft'/>
						<h5>$val[2]</h5>
						<a class='btn btn-small pull-right' href='product_details.php?cata=$val[0]'>View Details</a>
						<br class='clr'/>
					</div>
					<div class='span3 alignR'>
					
					<h4 style='text-decoration: line-through;'>Rs.$val[3]</h4>
			<h4>Rs.$val[13]</h4>
			<div class='btn-group'>
					  <a href='cart.php?cata=$val[0]' class='btn btn-large btn-primary'> Add to <i class=' icon-shopping-cart'></i></a>
					  </div>
					</div>
				</div>";
		}
		}
		?>
			<hr class="soft"/>
			
			</div>
			<div class="tab-pane active" id="blockView">
				<ul class="thumbnails">
				<?php
		if($_GET["cata"])
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","ecommerce");
			$res=mysqli_query($con,"select * from `product` where `id`='$v'");
			
			while($val=mysqli_fetch_array($res))
		{
	$t=$val[8];
		}
	
	$re=mysqli_query($con,"select * from `product` where `subgenre`='$t'");
		while($val=mysqli_fetch_array($re))
		{
		echo"
		
					<li class='span3'>
			  <div class='thumbnail'>
				<a href='product_details.php'><img src='$val[12]' height='160px' width='187px' alt=''/></a>
				<div class='caption'>
				  <h5>$val[1]</h5>
				     <h4 style='text-align:center'> <a class='btn' href='cart.php?cata=$val[0]'>Add to <i class='icon-shopping-cart'></i></a> $val[11]% off</h4>
				<h4 style='text-align:center'><a class='btn btn-primary' href='#' style='text-decoration: line-through;'>Rs.$val[3]</a> <a class='btn btn-primary' href='#'>Rs.$val[13]</a></h4>
				</div>
			  </div>
			</li>";
		}
		}
		?>
 </ul>
			<hr class="soft"/>
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>

	
			<!--<input type='number' class='span1' name='qty' placeholder='Qty.'/><div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  
              </div>-->
			  
			 <!--<div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>-->
			
			
			
  <!--<hr class="soft"/>
				<h4>100 items in stock</h4>
				<form class="form-horizontal qtyFrm pull-right">
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span2">
						  <option>Black</option>
						  <option>Red</option>
						  <option>Blue</option>
						  <option>Brown</option>
						</select>
					</div>
				  </div>
				</form>
				<hr class="soft clr"/>
				<p>
				14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. 
				Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. 
				Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).
				
				</p>-->
				
				
				<!--<h5>Features</h5>
				<p>
				14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).<br/>
				OND363338
				</p>

				<h4>Editorial Reviews</h4>
				<h5>Manufacturer's Description </h5>
				<p>
				With a generous 18x Fujinon optical zoom lens, the S2950 really packs a punch, especially when matched with its 14 megapixel sensor, large 3.0" LCD screen and 720p HD (30fps) movie capture.
				</p>

				<h5>Electric powered Fujinon 18x zoom lens</h5>
				<p>
				The S2950 sports an impressive 28mm – 504mm* high precision Fujinon optical zoom lens. Simple to operate with an electric powered zoom lever, the huge zoom range means that you can capture all the detail, even when you're at a considerable distance away. You can even operate the zoom during video shooting. Unlike a bulky D-SLR, bridge cameras allow you great versatility of zoom, without the hassle of carrying a bag of lenses.
				</p>
				<h5>Impressive panoramas</h5>
				<p>
				With its easy to use Panoramic shooting mode you can get creative on the S2950, however basic your skills, and rest assured that you will not risk shooting uneven landscapes or shaky horizons. The camera enables you to take three successive shots with a helpful tool which automatically releases the shutter once the images are fully aligned to seamlessly stitch the shots together in-camera. It's so easy and the results are impressive.
				</p>

				<h5>Sharp, clear shots</h5>
				<p>
				Even at the longest zoom settings or in the most challenging of lighting conditions, the S2950 is able to produce crisp, clean results. With its mechanically stabilised 1/2 3", 14 megapixel CCD sensor, and high ISO sensitivity settings, Fujifilm's Dual Image Stabilisation technology combines to reduce the blurring effects of both hand-shake and subject movement to provide superb pictures.
				</p>-->
              <!--<div class="row">	  
					<div class="span2">
						<img src="themes/images/products/5.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<a class="btn btn-small pull-right" href="product_details.php">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<div class="btn-group">
						<a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
					</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/6.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<a class="btn btn-small pull-right" href="product_details.php">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $222.00</h3>
					<div class="btn-group">
				  <a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				  <a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				 </div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/7.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<a class="btn btn-small pull-right" href="product_details.php">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<div class="btn-group">
						<a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			
			<hr class="soft"/>
			<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/8.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<a class="btn btn-small pull-right" href="product_details.php">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<div class="btn-group">
						<a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
				<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/9.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<a class="btn btn-small pull-right" href="product_details.php">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<div class="btn-group">
						<a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			<hr class="soft"/>-->
					<!--<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.php"><img src="themes/images/products/11.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product Name</h5>
						  <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.php"><img src="themes/images/products/12.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product Name</h5>
						   <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.php"><img src="themes/images/products/13.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product Name</h5>
						   <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.php"><img src="themes/images/products/1.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product Name</h5>
						   <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.php"><img src="themes/images/products/2.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product Name</h5>
						   <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
						</div>
					  </div>
					</li>-->
				 
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include("include 3.php"); ?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Original Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>