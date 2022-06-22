<?php
include("includes/config.php");
$conn;
?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>WEB PROJECT</title>
	<?php

include("includes/links.php");

?>

</head>
<body>

<?php

include("includes/header.php");

?>

<div id="homi">

<?php
		if (isset($_GET["status"])) 
		{
			if($_GET["status"] == "li")
			{
				?>
				<script type="text/javascript">
					alert("Logged In Succesfully..!")
				</script>
				<?php
			}
			if($_GET["status"] == "rsu")
			{
				?>
				<script type="text/javascript">
					alert("Record Succesfully Updated..!")
				</script>
				<?php
			}
			if($_GET["status"] == "rsd")
			{
				?>
				<script type="text/javascript">
					alert("Record Succesfully Deleted..!")
				</script>
				<?php
			}
			if($_GET["status"] == "os")
			{
				?>
				<script type="text/javascript">
					alert("Ordered Succesfully..!")
				</script>
				<?php
			}
			if($_GET["status"] == "s")
			{
				?>
				<script type="text/javascript">
					alert("Submitted..!")
				</script>
				<?php
			}
		}
?>

<div id ="slideshow">

<img src = "graphics/image.jpg" alt="Slider">

</div>

</div> 

<div id="parts"> <!-- START OF MAIN DIV OF PARTS -->

<div id="part1">
<a href="form.php"><img src ="graphics/part1.jpg" alt="Image of Car Part"></a>

</div>

<div id="part2">

<a href="form.php"><img src ="graphics/part2.jpg" alt="Image of Car Part"></a>

</div>



<div id="part3">

<a href="form.php"><img src ="graphics/part3.jpg" alt="Image of Car Part"></a>

</div>

<div id="part4">

<a href="form.php"><img src ="graphics/part4.jpg" alt="Image of Car Part"></a>

</div>


<div id="part5">

<a href="form.php"><img src ="graphics/part5.jpg" alt="Image of Car Part"></a>

</div>

<div id="part6">

<a href="form.php"><img src ="graphics/part6.jpg" alt="Image of Car Part"></a>

</div>
<div id="tbtn"
onclick="topFunction()"
> 
<input type="button"  value="Go Top" /> </div>
<div class="clear"></div>


</div> <!-- END OF MAIN DIV OF PARTS -->
	
<?php

include("includes/footer.php");

?>

</body>
</html>