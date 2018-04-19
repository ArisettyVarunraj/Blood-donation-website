<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Blood Groups</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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

<header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Blood</span> Donation</h1>
                </div>
                
            </div>
        </header>
 <div class="nav_bg">
<div class="wrap">
    <ul class="nav">
      
            <li><a href="../index.php" target="_blank">Preview Website</a></li>
             <li><a href="logout.php">Log Out</a></li>
     
            </ul>
  </div>
    </div>      
    <center>
   <div style="width:1000px; height:700px; box-shadow:-10px 10px 5px #CCC">
       <div style="width:200px; float:left;">
       <?php include('left.php'); ?>
       </div>
       <div style="width:800px;float:left">
<br /><br />

<?php include('function.php'); ?>


       <form method="post">
<table border="0" align="center" width="400px" height="500px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd"><span class="cityspan">View Blood Group </span></td></tr>
<tr><td align="center" style="padding-top:10px">
<table border="1" align="center" width="80%" height="200px" >
<tr><td>Blood Group Id </td><td align="center">Blood Group Name</td></tr>
<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td  style='padding-left:50px'>$data[1]</td></tr>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>