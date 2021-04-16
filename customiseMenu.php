<?php
    include "DBConn.php";

    $userId = $_SESSION['user_ID'];
    $eventType = $_COOKIE["event_type"];
    $paxCount = $_COOKIE["pax_count"];
    $dateTime = $_COOKIE["date_time"];
    $cuisineClass = $_COOKIE["cuisine_class"];
    $globalCuisineType = $_COOKIE["global_cuisine_type"];
    if (isset($_POST["allergic_id"]))
      $allergicId = $_POST["allergic_id"];

    $sql = "INSERT INTO service(custId, servDateTime, servStatus, eventId, paxCount, cClassId, globalCuisineType) VALUES ('$userId', '$dateTime', 'p', '$eventType', '$paxCount', '$cuisineClass', '$globalCuisineType')";
    $result = $conn->query($sql);

    $menuId = [];
    $cuisineId = [];
    $menuName = [];
    $cuisineName = [];
    $cuisineDesc = [];
    $filePath1 = "appRes/";
    $filePath2 = ".jpg";

    $sql2 = "SELECT menuproposal.menuId, cuisine.cuisineId, menuName, cuisineName, cuisineDesc FROM (((menuproposal INNER JOIN cuisinecourse ON menuproposal.menuId = cuisinecourse.menuId) INNER JOIN cuisine ON cuisinecourse.cuisineId = cuisine.cuisineId) INNER JOIN eventpurpose ON menuproposal.menuId = eventpurpose.menuId) WHERE cClassId = '$cuisineClass' AND menuGlobalCuisType = '$globalCuisineType' AND eventId = '$eventType'";
    $result2 = $conn->query($sql2);

    if($result2->num_rows > 0)
    {
      while($row2 = $result2->fetch_assoc())
      {
        array_push($menuId, $row2["menuId"]);
        array_push($cuisineId, $row2["cuisineId"]);
        array_push($menuName, $row2["menuName"]);
        array_push($cuisineName, $row2["cuisineName"]);
        array_push($cuisineDesc, $row2["cuisineDesc"]);
      }
    }

?>
