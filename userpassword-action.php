<?php include("includes/config.php"); ?>
<?php $conn; ?>
<?php
	$pass= $_POST['pass'];
	$pass1= $_POST['pass1'];
	$pass2= $_POST['pass2'];

	//DATA BASE MANIPULATION

$check='SELECT * FROM users WHERE ID='.$_SESSION['id']; 
	$stmt = $conn->prepare($check); 
	if($stmt === false) 
		{ 
			trigger_error('Wrong SQL: ' . $check. ' Error: ' . $conn->error, E_USER_ERROR);

		} 
		$stmt->execute(); 
		$stmt->store_result(); 
		$matched = false; 
		if($stmt->num_rows === 1)
		{
			$stmt->bind_result($id,$name,$em,$pw,$gender,$dob,$type); 
			while ($stmt->fetch()) 
			{ 
				$matched = password_verify($pass, $pw); 
				$check1='SELECT user_Password FROM users WHERE ID='.$_SESSION['id']; 
				$stmt1 = $conn->prepare($check1); 
				if($stmt1 === false) 
					{ 
						trigger_error('Wrong SQL: ' . $check1. ' Error: ' . $conn->error, E_USER_ERROR);

					} 
					$stmt1->execute(); 
					$stmt1->store_result();
				if($check1 == $matched)
				{
					if($pass1 == $pass2)
					{
						$hpwd=password_hash($pass1, PASSWORD_DEFAULT);
						$sql='UPDATE users SET user_Password=? WHERE ID='.$_SESSION['id']; 
						$stmt2 = $conn->prepare($sql); 
						if($stmt2 === false) 
							{ 
								trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);

							} 
							$stmt2->bind_param('s', $hpwd); 
							$stmt2->execute(); 	
			    			$conn->close();  
			    			session_destroy();
			    			header("Location: login.php?status=cs");
					}
					else
					{
						header("Location: userpassword.php?status=npdm");
					}
				}
				else
				{
					header("Location: userpassword.php?status=opdm");
				}
			} 
		}
		else
		{
			header("Location: userpassword.php?status=e"); 
		}

$stmt->free_result(); 	
$conn->close();   