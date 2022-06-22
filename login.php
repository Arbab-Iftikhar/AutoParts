<?php
include("includes/config.php");
?>
<?php $conn; ?>
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

<div id="main">
<div id ="loginform">
	<?php
		if (isset($_GET["status"])) 
		{
			if($_GET["status"] == "lfwe")
			{
				?>
				<script type="text/javascript">
					alert("Login Failed, Wrong Email..!")
				</script>
				<?php
			}
			if($_GET["status"] == "lfwp")
			{
				?>
				<script type="text/javascript">
					alert("Login Failed, Wrong Password..!")
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
			if($_GET["status"] == "ul")
			{
				?>
				<script type="text/javascript">
					alert("UnAuthorized Login Attempt, Login First..!")
				</script>
				<?php
			}
			if($_GET["status"] == "cs")
			{
				?>
				<script type="text/javascript">
					alert("Password Changed Succesfully, Login Again..!")
				</script>
				<?php
			}
			if($_GET["status"] == "rs")
			{
				?>
				<script type="text/javascript">
					alert("Registration Succesfull, Login Now..!")
				</script>
				<?php
			}
			if($_GET["status"] == "rus")
			{
				?>
				<script type="text/javascript">
					alert("Record Updtaed Succesfully, Login Now..!")
				</script>
				<?php
			}
		}
	?>
<form action="login-action.php" method="post" enctype="multipart/form-data">
<div><label id = "loginlab">Email</label></div>
<div><input type="email"

<?php 
	if (isset($_COOKIE["useremail"])) 
		echo "value='" . $_COOKIE["useremail"]. "'";
?>

 name="email" required /></div>
 <div><label id = "loginlab" > Password</label></div>
 <div><input type="password" id="pass" name="pass"/></div>
 <div><input type="submit" value="Login"/></div>

</form>
</div>
</div>




<?php

include("includes/footer.php");

?>

</body>
</html>