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