<?php 
	include("includes/config.php");
 	$conn;
	session_destroy();                  
	header("Location: login.php?status=lo");  
	