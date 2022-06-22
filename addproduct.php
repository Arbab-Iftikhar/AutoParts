<?php
include("includes/config.php");
if((isset($_SESSION["loggedin"])) && (($_SESSION["loggedin"])) && (($_SESSION["type"] == "Admin")))
{
?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>Add Product</title>
	<?php

include("includes/links.php");

?>
</head>
<body>
<?php

include("includes/header.php");

?>
<div id="main2">
<div id ="signform">



	<?php
		if (isset($_GET["status"])) 
		{
			if($_GET["status"] == "eau")
			{
				?>
				<script type="text/javascript">
					alert("Email Already In Used..!")
				</script>
				<?php
			}
			if($_GET["status"] == "rsi")
			{
				?>
				<script type="text/javascript">
					alert("Record Succesfully Inserted..!")
				</script>
				<?php
			}
			if($_GET["status"] == "fim")
			{
				?>
				<script type="text/javascript">
					alert("File Isn't Image, Upload Again..!")
				</script>
				<?php
			}
			if($_GET["status"] == "ftl")
			{
				?>
				<script type="text/javascript">
					alert("File To Large, Upload again..!")
				</script>
				<?php
			}
			if($_GET["status"] == "te")
			{
				?>
				<script type="text/javascript">
					alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed...!")
				</script>
				<?php
			}
			if($_GET["status"] == "nu")
			{
				?>
				<script type="text/javascript">
					alert("Sorry, your file was not uploaded...!")
				</script>
				<?php
			}
			if($_GET["status"] == "rni")
			{
				?>
				<script type="text/javascript">
					alert("Sorry, Record Not Inserted...!")
				</script>
				<?php
			}

		}
	?>




<form action="addproduct-action.php" method="post" enctype="multipart/form-data">	
	<div><label id = "loginlab">Product Name</label></div>
	<div><input type="text" id="name" name="name" placeholder="Your name.." required /></div>

	<div><label id = "loginlab">Product Price</label></div>

	<div><input type="text" name="price" required /></div>


	<div><label id = "loginlab" >Description</label></div>

	<div><textarea name="description"></textarea> </div>


	<div><label id = "loginlab">Type: </label></div>
	
	<select name="type" size="1">
        <option>Click To Select</option>
        <option value="Tire">Tires</option>
        <option value="Rim">Rims</option>
        <option value="Exhaust">Exhaust</option>
        <option value="Tire">Tires</option>
        <option value="Rim">Rims</option>
        <option value="Exhaust">Exhaust</option>
        <option value="Tire">Tires</option>
        <option value="Rim">Rims</option>
        <option value="Exhaust">Exhaust</option>
	</select>

	
	<div><label id = "loginlab">Enter Product Image</label></div>
	<div><input type="file" name="file" required /></div>
	<div><label id = "loginlab">About sale</label></div>
	<div><textarea name="sale"></textarea></div>
	<div><input type="Submit" value="Register" /></div>
</form>
</div>
</div>

<?php

include("includes/footer.php");

?>

</body>
</html>
<?php
    }
    else
    {
        header("Location: login.php?status=ul");
    }
?>