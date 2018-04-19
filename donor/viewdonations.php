<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Donations</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
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

<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>

 <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Blood</span> Donation</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.php" >Home</a></li>
                        <li><a href="../about.html">About</a></li>
                        <li><a href="../requests.php">Request Blood</a></li>
                        <li><a href="../search.php">Search</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
			<li><a href="chngpwd.php">Change Password</a></li>	
			<li><a href="updateprofile.php">Update Profile</a></li>            
			<li><a href="blooddonated.php">Blood Donated</a></li>
            <li class="active"><a href="viewdonations.php">View Donations</a></li>
            <li><a href="viewrequest.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</div>
<div style="height:600px; width:800px; margin:auto; margin-top:50px; margin-bottom:50px;border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
  <table cellspacing="0" cellpadding="0" width="750px" height="400" style="margin:auto" class="tableborder" >
        
        <tr><td colspan="4" align="center"><h1>Your Donations</h1> </td></tr>
        <tr><td colspan="4">&nbsp;</td></tr>
   
             <tr style="background-color:bisque" align="center" class="bold">     
           <td>Camp Name</td><td>Date of Donation</td><td>No. of Units</td><td>Email Id</td>
        </tr>
          <tr><td colspan="4">&nbsp;</td></tr>
    <?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from camp,donation where camp.camp_id=donation.camp_id and donation.email='" . $_SESSION["email"] . "'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[1]</td><td  style=' padding-left:50px'>$data[9]</td><td  style=' padding-left:40px'>$data[10]</td><td  style=' padding-left:30px'>$data[12]</td></tr>";
			}
			mysqli_close($cn);
			?>               






</table>
</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved | Design by Mr. Bhatia |</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>




			
			
	
</body>
</html>