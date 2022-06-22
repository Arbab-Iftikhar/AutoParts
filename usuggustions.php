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
<div id="main3"></div>
<div class="contain">
  <form onSubmit="validate();" name="Ar" method="post" action="usuggustions-action.php"> 
  <fieldset>    <legend>Fill:</legend>
  <h3>Suggestion Information</h3>
    <div><label> Name</label></div>
    <div><input type="text" id="name" name="name" placeholder="Dexter" required /></div>
    <div><label>Phone No</label></div>
    <div><input type="text" id="no" name="number" placeholder="03*********"  /></div>
    <div><label>Email</label></div>
    <div><input type="email" id="email" name="email" placeholder="abc@gmail.com"  /></div>
    <div><label>Suggestion Of</label></div>
    <div><input type="text" id="suggestiontp" name="type" placeholder="For Example Suggestion of Tire" 
     /></div>
    <label for="subject">Comments</label>
    <textarea id="subject" name="comments" placeholder="Details About your Suggestion"  ></textarea>

    <input type="submit" value="Submit" />

</fieldset>
</form>
</div>
<?php

include("includes/footer.php");

?>

</body>
</html>