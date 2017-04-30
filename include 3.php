<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
			
			
			<?php
if(isset($_SESSION["userid"]))
{

				echo"<h5>ACCOUNT</h5>
				<a href='user_details.php'>YOUR ACCOUNT</a>
				<a href='user_details.php'>PERSONAL INFORMATION</a> 
				<a href='user_details.php'>ADDRESSES</a>  
				<a href='user_details.php'>ORDER HISTORY</a>";
				
}

		else
{
	echo"<h5>ACCOUNT</h5>
				<a href='login.php'>YOUR ACCOUNT</a>
				<a href='login.php'>PERSONAL INFORMATION</a> 
				<a href='login.php'>ADDRESSES</a>  
				<a href='login.php'>ORDER HISTORY</a>";

}

?>

			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.php">CONTACT</a>  
				<a href="register.php">REGISTRATION</a>  
				<a href="#">LEGAL NOTICE</a>  
				<a href="#">TERMS AND CONDITIONS</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="products.php?cata=0000-00-00">NEW PRODUCTS</a> 
				<a href="products.php?cata=0">TOP SELLERS</a>  
				<a href="special_offer.php">SPECIAL OFFERS</a>
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; BOOK ROOM<br>Designed By: ABHISHEK JAIN</p>
		<br/>
	</div><!-- Container End -->
	</div>