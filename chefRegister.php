<?php
    include "DBConn.php";

    $firstName = cleanInput($_POST["sgChefFName"]);
    $lastName = cleanInput($_POST["sgChefLName"]);
    $email = cleanInput($_POST["sgChefEmail"]);
    $password = cleanInput($_POST["sgChefPswd"]);
    $contactNumber = cleanInput($_POST["sgChefContactNum"]);
	$chefExpert = cleanInput($_POST["sgChefExpert"]);
	$chefAward = cleanInput($_POST["sgChefRecAward"]);
	$bankAccNum = cleanInput($_POST["sgChefBankAccNum"]);
	$bankAccName = cleanInput($_POST["sgChefBankAccName"]);
	$bankName = cleanInput($_POST["sgChefBankName"]);

	$sql = "SELECT * FROM user WHERE userEmail = '$email'";

    $result = $conn->query($sql);
    if(mysqli_num_rows($result)==0){
		$sql1 = "INSERT INTO user(userFName, userLName, userEmail, userPassword, userContactNumber, userType) VALUES ('$firstName', '$lastName', '$email', '$password', '$contactNumber', 'h')";
		
		if($conn->query($sql1)) {
		  $query = "SELECT userId from user where userEmail='$email'";
		  $chefIdFetched = $conn->query($query);
		  $chefId = mysqli_fetch_assoc($chefIdFetched);
		  $chefIdNum = $chefId['userId'];
		  $sql2 = "INSERT INTO chef(userId, chefExpertise, chefRecognitionAwrd, chefStatus, chefBankAccNum, chefBankAccName, chefBankName) VALUES ('$chefIdNum', '$chefExpert', '$chefAward', 't', '$bankAccNum', '$bankAccName', '$bankName')";
		  $conn->query($sql2);
		  echo "Register successfully";
	    } 
		else {
		  echo "The email address has already been registered before. Please use another email.";
	    }
	}
		
    function cleanInput($inputData) {
      $inputData = trim($inputData);
      $inputData = stripslashes($inputData);
      $inputData = htmlspecialchars($inputData);
      return $inputData;
    }
?>