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
				 		<th>Name</th>
				 		<th>Contact</th>
				 		<th>Email</th>
				 		<th>Suggustion Type</th>
				 		<th>Details</th>
				 	</thead>
				 	<?php 
				 			$sql = " SELECT * FROM suggustions";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc())
								{
									echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["name"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["email"] . "</td><td>" . $row["s_type"] . "</td><td>" . $row["detail"] . "</td></tr>";
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