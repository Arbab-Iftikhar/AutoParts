<?php include("includes/config.php"); ?>
<?php $conn; ?>
<?php
	$email= $_POST['email'];
	$password= $_POST['pass'];
    

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
		if($stmt->num_rows === 1)
		{
			$stmt->bind_result($id,$name,$em,$pw,$gender,$dob,$type); 
			while ($stmt->fetch()) 
			{ 
				$matched = password_verify($password, $pw); 
				if($matched)
				{
					$_SESSION["loggedin"] = true;
					$_SESSION["type"] = $type;
					$_SESSION["email"] = $em;
					$_SESSION["id"] = $id;
					setcookie("useremail", $em, time()+60*60*24*30);
					setcookie("name", $name, time()+60*60*24*30);
					setcookie("gender", $gender, time()+60*60*24*30);
					setcookie("dob", $dob, time()+60*60*24*30);
					header("Location: index.php?status=li"); 
				}
				else
				{
					header("Location: login.php?status=lfwp");
				}
			} 
		}
		else
		{
			header("Location: login.php?status=lfwe"); 
		}
		
	$stmt->free_result(); 	
    $conn->close();                    