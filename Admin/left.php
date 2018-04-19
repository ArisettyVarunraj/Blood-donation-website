<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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

 
   <div style="width:1000px; height:700px; box-shadow:-10px 10px 5px #CCC">
      
       <div style="width:800px;float:left; height:500px">
<table style="width:100%; height:600px">
<tr><td style="font-size:24px; color:#F00; font-weight:bold">Admin Links</td></tr>
<br />
<?php if($_SESSION["usertype"]=="Admin")
{?>

<?php }?>

<tr><td class="lefttd"><a href="addcity.php">Add City</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td class="lefttd"><a href="deletecity.php">Delete City</a></td></tr>


<?php }?>


<?php if($_SESSION["usertype"]=="Admin")
{?>


<?php }?>



<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td class="lefttd"><a href="addbloodgroup.php">Add Blood Group</a></td></tr>
<tr><td class="lefttd"><a href="deletebloodgroup.php">Delete Blood Group</a></td></tr>

<?php }?>

<tr><td class="lefttd"><a href="viewcity.php">View City</a></td></tr>
<tr><td class="lefttd"><a href="viewbloodgroup.php">View Blood Group</a></td></tr>


</table></div></div>

</body>
</html>