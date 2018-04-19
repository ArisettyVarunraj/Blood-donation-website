<!--?php include('functions.php') ?-->
<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Blood Donation login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="style (2).css">
	<!--link href="flexslider.css" rel="stylesheet" type="text/css" media="all" />
	 <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script-->
</head>
<body>
	<?php include('function.php'); ?>

	<!-- preloader 
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>-->
		<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Blood</span> Donation</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php" >Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="requests.php">Request Blood</a></li>
                        <li class="current"><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="search.php">Search</a></li>
                    </ul>
                </nav>
            </div>
        </header>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<!--?php echo display_error(); ?-->

		<div class="input-group">
			<label class="lefttd">Email</label>
			<input type="email" name="t1" required="required" />
		</div>
		<div class="input-group">
			<label class="lefttd">Password</label>
			<input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  />
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="sbmt" value="Log In" >Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo "<script>location.replace('donor/index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 

</body>
</html>