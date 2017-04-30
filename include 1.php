
<div class="navbar-inner" style="width:98%; align: center">
    <a class="brand" href="index.php"><img src="themes/images/logo1.jpg" alt="Booksshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		<input class="srchTxt" name='search' type="text" />
		<button type="submit" id="submitButton" name='ser' class="btn btn-primary">Search</button>
		  <select class="srchTxt" name='genre'>
			<option>All</option>
			<option>FICTION</option>
			<option>ACADEMICS</option>
			<option>CHILDREN & YOUNG ADULT</option>
			<option>COMPETETIVE</option>
			<option>NON-FICTION</option>
			<option>SELF-HELP</option>
		</select> 
		  <button type="submit" id="submitButton" name="go" class="btn btn-primary">Go</button>
    </form>
			
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="index.php">Home</a></li>
	 <li class=""><a href="special_offer.php">Specials Offer</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">
	  
<?php
	
	try
	{
		
		
//$uid=$_SESSION["userid"];
//$upass=$_SESSION["pass"];
if(isset($_SESSION["userid"]))
{
	echo"<a href='logout.php' role='button' style='padding-right:0'><span class='btn btn-large btn-success'>Logout</span></a>";
}
	else
	{
		echo"<a href='#login' role='button' data-toggle='modal' style='padding-right:0'><span class='btn btn-large btn-success'>Login</span></a>
	<div id='login' class='modal hide fade in' tabindex='-1' role='dialog' aria-labelledby='login' aria-hidden'false' >
		  <div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class='modal-body'>
			<form class='form-horizontal loginFrm'>
			  <div class='control-group'>								
				<input type='text' name='userid' id='inputEmail' placeholder='Email'>
			  </div>
			  <div class='control-group'>
				<input type='password' name='pass' id='inputPassword' placeholder='Password'>
			  </div>
			  <div class='control-group'>
			  <a href='forgetpass.php'><h5>Forget Password?</h5></a>
			<button type='submit' name='sub' class='btn btn-success'>Sign in</button>
			<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>
					<br/><h4>Haven't Registered?</h4>
				<a href='register.php' style='text-decoration:underline; font-size:18px;'><h4>Register</h4></a>
				
				</div>
			
			</form>		
		  </div>
	</div>";

	}
	}
	catch(Exception $ea){}
?>

	 
	</li>
    </ul>
  </div>
  
  
<?php
  
  if(isset($_REQUEST["sub"]))
{
	$uid=$_REQUEST["userid"];
	$upass=$_REQUEST["pass"];
	
	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"select * from `user_detail` where `email`='$uid' and `password`='$upass'");

	if($val=mysqli_fetch_array($res))
	{
		session_start();
		$_SESSION["userid"]=$val[4];
		$_SESSION["pass"]=$val[5];
	
	
		echo"<script language='javascript'> window.location.href='user_details.php' </script>";
		/*if (window.confirm('You have successfully login. Click OK to continue.'))
		{
			window.location.href='index 3.php';
		};
		
		</script>";*/
	}
	else
	{
		echo"<script language'javascript'>alert('Incorrect Email Id and Password')</script>";
	}
}
?>
