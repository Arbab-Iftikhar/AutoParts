<?php include("includes/config.php"); ?>
<?php $conn; ?>
<?php
	
	$ID=$_POST['id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
		$sql='DELETE FROM products WHERE ID='.$ID; 
		$stmt2 = $conn->prepare($sql); 
		if($stmt2 === false) 
		{ 
			trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);
		} 
		$stmt2->execute();
		$conn->close();
		header("Location: index.php?status=rsd");
    }