<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Blood</title>
<link href="style (2).css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
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
	<?php include('Admin/function.php'); ?>
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
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li class="current"><a href="search.php">Search</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<div class="input-group2">
			<label><span class="search">Blood Group</span></label>
			<select name="t4" required><option value="">Select</option>
			<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>
		</select>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?>		
		 <!--label><span class="search">City</span></label>
		 <select name="t4" required><option value="">Select</option>
		 <option value="13">Vijayawada</option><option value="14">Hyderabad</option><option value="15">Chennai</option><option value="16">Bangalore</option><option value="17">Visakhapatnam</option><option value="18">Mumbai</option><option value="19">Delhi</option><option value="20"></option>
		 </select-->
		 <input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">

</div>
 




		


       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
		
	
</div>
<?php 
if(isset($_POST["sbmt"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>

</body>
</html>