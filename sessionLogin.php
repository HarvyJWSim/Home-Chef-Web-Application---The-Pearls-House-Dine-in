<?php
    session_start();
    include "DBConn.php";
    $emailCheck = cleanInput($_POST["email"]);
    $pswdCheck = cleanInput($_POST["pswd"]);

    $sql = "SELECT * FROM user WHERE userEmail = '$emailCheck' AND userPassword = '$pswdCheck'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
      $_SESSION["user_email"] = $emailCheck;
      $_SESSION["is_login_verified"] = TRUE;
      $row = $result->fetch_assoc();
      $_SESSION["user_ID"] = $row["userId"];
      $_SESSION["user_type"] = $row["userType"];
      $_SESSION["user_first_name"] = $row["userFName"];

      if($_SESSION["user_type"] == 'u')
        header("Location: cust_home.php");
      else
        header("Location: chef_home.php");
    }
    else
    {
      echo "<script language = 'javascript'>";
      echo "alert('Username or password do not match. Kindly check your login details')";
      echo "</script>";
    }

    function cleanInput($inputData)
    {
      $inputData = trim($inputData);
      $inputData = stripslashes($inputData);
      $inputData = htmlspecialchars($inputData);
      return $inputData;
    }
?>
