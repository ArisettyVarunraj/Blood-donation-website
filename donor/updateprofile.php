<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update you profile</title>
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
<?php
			
	$cn=mysqli_connect("localhost","root","","bloodbank");
			$s="select * from donarregistration where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$gender=$data[2];
	$age=$data[3];
	$mobile=$data[4];
	
	//echo $name;
	mysqli_close($cn);

?> 
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
			<li class="active"><a href="updateprofile.php">Update Profile</a></li>            
            <li><a href="viewrequest.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</div>
<div style="height:400px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
 <form method="post" >

    <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">

    <tr><td style="padding-bottom:40px" colspan="2" align="center"><h1>Update Profile</h1></td></tr>
   
     <tr><td colspan="2">&nbsp;</td></tr>
     <table cellpadding="0" cellspacing="0" height="400px" width="700px"  class="tableborder" style="margin:auto">
    
    <td style="vertical-align:top" width="450px" height="400px">
                <table cellpadding="0" cellspacing="0" width="450px">
   <td style="vertical-align:top; padding-left:70px" width="500px">
   <table cellpadding="0" cellspacing="0" width="450px" align="center" >
    <tr><td class="lefttd"  style="vertical-align:middle"> Name </td><td><input type="text" name="t1" value="<?php echo @$name;  ?>"  required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 5 to 15 for  name" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td class="lefttd">Gender</td><td><input name="r1" checked="checked" type="radio" value="male"  <?php if($gender=="male"){ echo "checked" ;}  ?>>Male<input name="r1"type="radio" value="female" <?php if($gender=="female"){ echo "checked" ;}  ?> />Female</td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Age</td><td><input type="text" name="t2"  required="required" pattern="[0-9]{2,2}" title="please enter only numbers  between 2 to 2 for age" value="<?php echo @$age;?>" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle"> Mobile No</td><td><input type="text" name="t3" value="<?php echo @$mobile;?>"  pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         <tr><td class="lefttd"  style="vertical-align:middle"> City </td><td><select name="tn"  value="<?php echo @$city;  ?>" required><option value="">Select</option>
         <?php
$cn=makeconnection();
$s="select * from city";
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
         <tr><td class="lefttd"  style="vertical-align:middle"> Blood Group </td><td><select name="tp"  value="<?php echo @$b_id;  ?>" required><option value="">Select</option><?php
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
</td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         
		<tr><td>&nbsp;</td><td><input type="submit" value="Update" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
        
        <tr><td colspan="2"  align="center"></td></tr>
        
		</table></table></td></tr>	</table></form>
	</div>
 
     
   
<?php
	
	if(isset($_POST["sbmt"])) 
	{
		$cn=makeconnection();
		
		
					$s="update donarregistration set name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "',city='" .$_POST["tn"]. "',b_id='" .$_POST["tp"]. "' where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record update');</script>";
	
}
?> 


      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
		<div class="copy">
			<p class="title">© All Rights Reserved | Blood Donation</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>


</body>
</html>