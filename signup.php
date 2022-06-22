<?php
include("includes/config.php");
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
		}
	?>




<form action="signup-action.php" method="post">	
<div><label id = "loginlab">Name</label></div>
<div><input type="textsign" id="name" name="name" placeholder="Your name.." required /></div>

<div>	<label id = "loginlab">Email</label></div>
<div><input type="email" name="email" required /></div>

<div><label id = "loginlab" >Password</label></div>
<div><input type="password" id="pass" name="pass"/></div>

<div><label id = "loginlab">Gender: </label></div>
	
	<select name="gender" size="1">
        <option>Click To Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Not Specified">Not Specified</option>
	</select>

	

	<div><label id = "loginlab">Date Of Birth</label></div>
	<div>	<input id="datesign" type="date" value="2020-01-06" name="dob" required /></div>

	<div><input type="Submit" value="Register" /></div>
</form>
</div>
</div>

<?php

include("includes/footer.php");

?>

</body>
</html>