<?php include("includes/config.php"); ?>
<?php $conn; ?>
<?php

	$name= $_POST['name'];
	$contact= $_POST['number'];
	$email= $_POST['email'];
	$comments= $_POST['subject'];
	$today = date("Y-m-d H:i:s");
	//DATA BASE MANIPULATION
		$sql='INSERT INTO _order (name, contact, email, date, comments) VALUES (?,?,?,?,?)'; 
		$stmt2 = $conn->prepare($sql); 
		if($stmt2 === false) 
		{ 
			trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);
		} 
		$stmt2->bind_param('sssss',$name,$contact,$email,$today,$comments); 
		$stmt2->execute(); 	
		$conn->close();
		header("Location: index.php?status=os");