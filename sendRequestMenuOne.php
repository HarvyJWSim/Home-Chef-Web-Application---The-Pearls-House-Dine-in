<?php
    session_start();
    include "DBConn.php";
    $userId = $_SESSION['user_ID'];
    $dateTime = $_COOKIE["date_time"];
    $menuId = 0;

    $sql = "UPDATE service SET menuId = '$menuId'  WHERE custId = '$userId' AND servDateTime = '$dateTime'";
;
    $result = $conn->query($sql);

    echo "<script language = 'javascript'>";
    echo "alert('Request success! The chef will be notified shortly!')";
    echo "</script>";


?>
