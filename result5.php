<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Results</title>
<link href="style (2).css" rel="stylesheet" type="text/css" media="all" />
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
<div class="nav_bg">   
<div style=" height:auto">

     <form method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>            
            <td>
            
            
            
  <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        <tr><td  align="center"><h1><span class=searchblood>Search Results</span></h1></td></tr>
        <tr><td >&nbsp;</td></tr> 
          
              <?php
$cn=makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
  $n=0;
  while($data=mysqli_fetch_array($result))
  {
?>
  <tr><td  >
    <tr><td>
       <?php
       if(isset($_REQUEST['city']) && $_REQUEST['city']!="")
{
 

$cn=makeconnection();
$s="select * from donarregistration,city where donarregistration.city='". $_REQUEST["city"]."' and donarregistration.city=bloodgroup.city_id";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
  $n=0;
 } 
  while($data=mysqli_fetch_array($result))
  {
?>
    </td></tr>

            <table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">
               <tr><td width="100px"  align="center" style="vertical-align:middle">

                        <table cellpadding="0" width="500px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[1]; ?></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title">Gender</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Mobile No:</span></td><td><?php echo $data[4]; ?></td></tr>
                  <tr><td><span class="title">Email</span></td><td><?php echo $data[6]; ?></td></tr>
                   <tr><td><span class="title">Blood Group</span></td><td><?php echo $data[10]; ?></td></tr>
                   <tr><td><span class="title">City</span></td><td><?php echo $data[8]; ?></td></tr>


                     <tr><td colspan="2">&nbsp;</td></tr>
                     
                     
                      </table>

                    </td></tr></table></td></tr>
   <?php }
   ?>
           </table></td></tr></table></form>

 <?php }
   ?>
		
</form>
</div>

       
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