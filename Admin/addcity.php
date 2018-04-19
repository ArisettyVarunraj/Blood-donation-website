<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add City</title>
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
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into city(city_name,pin_code,district) values('" . $_POST["t3"] . "','" .$_POST["t2"] . "','" .$_POST["t1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}

?>

       <form method="post">
<table border="0" align="center" width="500px" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd"><span class=cityspan>Add City</span> </td></tr>

<tr><td class="lefttd">City Name</td><td><input type="text" name="t3" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character between 5 to 15 for city name"/></td></tr>
<tr><td class="lefttd">Pin Code</td><td><input type="number" name="t2" required="required" pattern="[0-9]{6,10}" maxlenght="6" title="please enter only numbers between 6 to 10 for pin code"/></td></tr>
<tr><td class="lefttd">District</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character between 5 to 15 for city name"/></td></tr>



</select>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>