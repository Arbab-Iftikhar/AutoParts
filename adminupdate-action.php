<?php include("includes/config.php"); ?>
<?php $conn; ?>
<?php

	$name= $_POST['name'];
	$email= $_POST['email'];
	$password= $_POST['pass'];
	$gender= $_POST['gender'];
	$dob= $_POST['dob'];
	$hpwd=password_hash($password, PASSWORD_DEFAULT);

	//DATA BASE MANIPULATION

	$sql='UPDATE users SET Name=?, Gender=?, DOB=? WHERE ID='.$_SESSION['id']; 
	$stmt2 = $conn->prepare($sql); 
	if($stmt2 === false) 
	{ 
		trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);
	} 
	$stmt2->bind_param('sss',$name,$gender,$dob); 
	$stmt2->execute(); 	
	$conn->close();
	setcookie("useremail", $email, time()+60*60*24*30);
	header("Location: login.php?status=rus");