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

	$sql='SELECT * FROM users WHERE user_Email= ?'; 
	$stmt = $conn->prepare($sql); 
	if($stmt === false) 
		{ 
			trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);

		} 
		$stmt->bind_param('s', $email); 
		$stmt->execute(); 
		$stmt->store_result(); 
		$matched = false; 
		if($stmt->num_rows > 0)
		{
			header("Location: signup.php?status=eau");
			exit;
		}
		$stmt->free_result();
		
		$sql='INSERT INTO users (Name, user_Email, user_Password, Gender, DOB, user_Type) VALUES (?,?,?,?,?,"User")'; 
		$stmt2 = $conn->prepare($sql); 
		if($stmt2 === false) 
		{ 
			trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);
		} 
		$stmt2->bind_param('sssss',$name,$email,$hpwd,$gender,$dob); 
		$stmt2->execute(); 	
		$conn->close();
		setcookie("useremail", $email, time()+60*60*24*30);
		header("Location: login.php?status=rs");