<?php
include("includes/config.php");
if((isset($_SESSION["loggedin"])) && (($_SESSION["loggedin"])) && (($_SESSION["type"] == "User")))
{
?>
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
<div class="contain">
  <form onSubmit="valid();" name="od" method="post" action="order-action.php">
  <fieldset>    <legend>Fill:</legend>
  <h3>Contact Information</h3>
    <div><label for="name"> Name</label></div>
    <div><input type="text" id="name" name="name" placeholder="Your name.." required /></div>
    <div><label>Phone No</label></div>
    <div><input type="text" name="number" id="no" placeholder="Phone No"  /></div>
    <div><label>Email</label></div>
    <div><input type="email" id="email" name="email" placeholder="Email.."  /></div>
    
    
    <h3>Order Detail</h3>
    <label for="subject">Comments</label>
    <textarea id="subject" name="subject" placeholder="Further Information"  ></textarea>

    <input type="submit" value="Submit" />

</fieldset>
</form>
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