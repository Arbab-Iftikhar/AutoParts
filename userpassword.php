<?php
include("includes/config.php");
if((isset($_SESSION["loggedin"])) && (($_SESSION["loggedin"])) && (($_SESSION["type"] == "User")))
{
?>
<?php $conn; ?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>Change User Password</title>
	<?php

include("includes/links.php");

?>
	
</head>
<body>
<?php

include("includes/header.php");

?>

<div id="main">
<div id ="loginform">
	<?php
		if (isset($_GET["status"])) 
		{
			if($_GET["status"] == "lf")
			{
				?>
				<script type="text/javascript">
					alert("Login Failed..!")
				</script>
				<?php
			}
			if($_GET["status"] == "lo")
			{
				?>
				<script type="text/javascript">
					alert("Logged Off Succesfully..!")
				</script>
				<?php
			}
			if($_GET["status"] == "li")
			{
				?>
				<script type="text/javascript">
					alert("Logged In Succesfully..!")
				</script>
				<?php
			}
			if($_GET["status"] == "opdm")
			{
				?>
				<script type="text/javascript">
					alert("Old Password Didn't Match..!")
				</script>
				<?php
			}
			if($_GET["status"] == "npdm")
			{
				?>
				<script type="text/javascript">
					alert("New Password Didn't Match..!")
				</script>
				<?php
			}
			if($_GET["status"] == "e")
			{
				?>
				<script type="text/javascript">
					alert("Some Error Occured, Try Again..!")
				</script>
				<?php
			}

		}
	?>
<form action="userpassword-action.php" method="post">

<div><label id = "loginlab">Enter Old Password</label></div>
<div><input type="password" name="pass"/></div>
<div><label id = "loginlab">Enter New Password</label></div>
<div><input type="password" name="pass1" required/></div>
<div><label id = "loginlab" >Confirm Password</label></div>
<div><input type="password" id="pass" name="pass2" required/></div>
<div><input type="submit" value="Update"/></div>

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