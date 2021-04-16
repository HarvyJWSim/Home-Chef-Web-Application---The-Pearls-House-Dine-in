<?php
    include "DBConn.php";

    $firstName = cleanInput($_POST["sgCustFName"]);
    $lastName = cleanInput($_POST["sgCustLName"]);
    $email = cleanInput($_POST["sgCustEmail"]);
    $password = cleanInput($_POST["sgCustPswd"]);
    $contactNumber = cleanInput($_POST["sgCustContactNum"]);
	
	$sql = "SELECT * FROM user where userEmail = '$email'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)==0){
		$sql1 = "INSERT INTO user(userFName, userLName, userEmail, userPassword, userContactNumber, userType) VALUES ('$firstName', '$lastName', '$email', '$password', '$contactNumber', 'u')";

		if($result = $conn->query($sql1) === TRUE) {
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