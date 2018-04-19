<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin login</title>
<link href="stylelogin.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="flexslider.css" rel="stylesheet" type="text/css" media="all" />
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
  </script>
</head>

<body>
	<?php include('function.php'); ?>

<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Blood</span> Donation</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.php" target="_blank">Go to Website</a></li>
                    </ul>
                </nav>
            </div>
        </header>


 


  
   
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><h1><span class= adminspan>Admin Login</span></h1></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
               
                    <td style="vertical-align:top"><table cellpadding="0" align="center" cellspacing="0" height="200px">             


<tr><td class="lefttd">User Name</td><td><input type="text" name="t1" /></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password" name="t2" /></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>
</td></tr></table>


		
</form>
</div>

       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">

			
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved | Blood Donation</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
		
	
</div>


<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from users where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	
	
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";

header("location:index.php");
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
	

?> 
</body>
</html>