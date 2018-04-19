<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
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
if($_SESSION['loginstatus']=="")
{
	header("location:admimlogin.php");
}
?>
<?php include('topbar.php'); ?>
    <center>
   <div style="width:1000px; height:700px; box-shadow:-10px 10px 5px #CCC">
       <div style="width:200px; float:left;">
       <?php include('left.php'); ?>
       </div>
       <div style="width:800px;float:left">
<div style="height:500px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
    <img src="images/welcome1.jpg" height="500px"/>
        
			
			
	</div>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>