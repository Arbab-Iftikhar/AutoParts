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


<form action="adminupdate-action.php" method="post"> 
<div><label id = "loginlab">Name</label></div>
<div> <input type="textsign" id="name" name="name" 

    <?php 
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] && isset($_COOKIE["name"])) 
            echo "value='" . $_COOKIE["name"]. "'";
    ?>
    required /></div>

    <div> <label id = "loginlab">Email</label></div>
    <div> <input type="email" name="email" 

    <?php 
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] && isset($_COOKIE["useremail"])) 
            echo "value='" . $_COOKIE["useremail"]. "'";
    ?>

    required  /></div>

    <div> <label id = "loginlab">Gender: </label></div>
    
    <select name="gender" size="1">
        <option>
            <?php 
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] && isset($_COOKIE["gender"])) 
                    echo $_COOKIE["gender"];
            ?>
            
        </option>
        <option value="ca">Choose Another</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Not Specified">Not Specified</option>
    </select>

    

    <div> <label id = "loginlab">Date Of Birth</label></div>
    <div><input id="datesign" type="date" 

    <?php 
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] && isset($_COOKIE["dob"])) 
            echo "value='" . $_COOKIE["dob"]. "'";
    ?>

    name="dob" required /></div>

    <div><input type="Submit" value="Update" /></div>
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