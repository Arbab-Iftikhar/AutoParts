<?php include("includes/config.php"); ?>
<?php $conn; ?>
<?php
	
	$ID=$_POST['id'];
	$p_name= $_POST['name'];
	$price= $_POST['price'];
	$description= $_POST['description'];
	$type= $_POST['type'];
	$sale= $_POST['sale'];
	$today = date("Y-m-d H:i:s");

	//Other

   	$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $name= basename($_FILES["file"]["name"]);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            echo "<br>";
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            header("Location: updateproduct.php?status=fim");
            $uploadOk = 0;
        }
        
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        header("Location: updateproduct.php?status=ftl");
        $uploadOk = 0;
    }
    // Allow certain file formats
    if(($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/gif")) 
    {
        $uploadOk = 1;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    	header("Location: updateproduct.php?status=nu");
    // if everything is ok, try to upload file
    } else {
    	//move_uploaded_file( $_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"] );
    	if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
				$sql='UPDATE products SET p_name=?, p_price=?, p_description=?, p_type=?, p_img=?, p_sale=?, entry_date=? WHERE ID='.$ID; 
				$stmt2 = $conn->prepare($sql); 
				if($stmt2 === false) 
				{ 
					trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR);
				} 
				$stmt2->bind_param('sssssss',$p_name,$price,$description,$type,$name,$sale,$today); 
				$stmt2->execute();
				$conn->close();
				header("Location: index.php?status=rsu");
    }
}