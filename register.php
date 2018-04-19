<!--?php include('functions.php') ?-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registration for Blood Donation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<?php include('admin/function.php'); ?>
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
                        <li class="current"><a href="register.php">Register</a></li>
                        <li><a href="search.php">Search</a></li>
                    </ul>
                </nav>
            </div>
        </header>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<!--?php echo display_error(); ?-->

		<div class="input-group">
			<label  class="lefttd">Username</label>
			<input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" />
		</div>
		<div class="input-group1">
			<label class="lefttd">Gender</label>
			<input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female
		</div>
		<div class="input-group">
			<label class="lefttd">Age</label>
			<input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" />
		</div>
		<div class="input-group">
			<label class="lefttd">Mobile Number</label>
			<input type="number" name="t3" required="required" pattern="[0-9]{10,11}" maxlength="10" title="please enter only numbers between 10 to 11 for mobile no." />
		</div>
		<div class="input-group2">
			<label class="lefttd">Blood Group</label>
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
		<label class="lefttd">City</label>
		 <select name="tn" required><option value="">Select</option>
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
		</div>


		<div class="input-group">
			<label class="lefttd">Email</label>
			<input type="email" name="t5" required="required" />
		</div>
		<div class="input-group">
			<label class="lefttd">Password</label>
			<input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" />
		</div>
		<div >
		<label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked required="required">
                            <span>I agree to the <a href="tandc.html" text-decoration="none">terms and conditions</a></span>
                        </label>
        </div>                
		
		<div class="input-group">
			<button type="submit" class="btn" name="sbmt" value ="Resitred">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	<?php
if(isset($_POST["sbmt"])) {
	$cn=makeconnection();
	$s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,city) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . $_POST["tn"] .  "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);		
	if($s>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Record save');</script>";
	}
		
}

// Check if image file is a actual image or fake image

    

// Check if file already exists

?> 
</body>
</html>