<?php
include("includes/config.php");
if((isset($_SESSION["loggedin"])) && (($_SESSION["loggedin"])) && (($_SESSION["type"] == "Admin")))
{
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
<table border="1" cellpadding="10">
				 	<thead>
				 		<th>ID</th>
				 		<th>Product Name</th>
				 		<th>Product Price</th>
				 		<th>Description</th>
				 		<th>Type</th>
				 		<th>Image Name</th>
				 		<th>Any Sale???</th>
				 		<th>Entry Date</th>
				 	</thead>
				 	<?php 
				 			$sql = " SELECT * FROM products";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_price"] . "</td><td>" . $row["p_description"] . "</td><td>" . $row["p_type"] . "</td><td>" . $row["p_img"] . "</td><td>" . $row["p_sale"] . "</td><td>" . $row["entry_date"] . "</td></tr>";
						 		}
						 		echo "</table>";
								$result->free();
							}
							else
							{
								echo "No records found.";
							}	
						?>
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
					alert("Sorry, Record Not Updated...!")
				</script>
				<?php
			}

		}
	?>

<form action="updateproduct-action.php" method="post" enctype="multipart/form-data">
	
	<div><label id = "loginlab">Product ID</label></div>
	<div><input type="text" name="id" required /></div>

	<div><label id = "loginlab">Product Name</label></div>
	<div><input type="text" id="name" name="name" placeholder="Your name.." required /></div>

	<div><label id = "loginlab">Product Price</label></div>
	<div><input type="text" name="price" required /></div>

	<div><label id = "loginlab" >Description</label></div>
	<div><textarea name="description"></textarea></div>

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
	<div><input type="Submit" value="Update" /></div>
</form>
</div>

</body>
</html>
<?php
    }
    else
    {
        header("Location: login.php?status=ul");
    }
?>