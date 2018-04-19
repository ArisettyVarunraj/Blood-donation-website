<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Blood Donation</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
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
		
            <li><a href="viewrequest.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
          
	</div>
<div style="height:300px; width:900px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
    <img height="300px" width="900px" src="Images/welcome (1).jpg"/>
        
			
			
	</div>
	

      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
		<div class="copy">
			<p class="title">© All Rights Reserved | Blood Donation|</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>