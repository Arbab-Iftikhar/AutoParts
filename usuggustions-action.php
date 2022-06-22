<?php include("includes/config.php"); ?>
<?php $conn; ?>
<?php

	$name= $_POST['name'];
	$contact= $_POST['number'];
	$email= $_POST['email'];
	$s_type= $_POST['type'];
	$detail= $_POST['comments'];
	//DATA BASE MANIPULATION
		$sql='INSERT INTO suggustions (name, contact, email, s_type, detail) VALUES (?,?,?,?,?)'; 
		$stmt2 = $conn->prepare($sql); 
		if($stmt2 === false) 
		{ 
			trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);
		} 
		$stmt2->bind_param('sssss',$name,$contact,$email,$s_type,$detail); 
		$stmt2->execute(); 	
		$conn->close();
		header("Location: index.php?status=s");