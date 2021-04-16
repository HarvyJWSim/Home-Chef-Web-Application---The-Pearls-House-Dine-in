<?php
    include "DBConn.php";

    $userId = $_SESSION['user_ID'];
    $sql = "SELECT * FROM chef WHERE userId = $userId";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
      $row = $result->fetch_assoc();
      $_SESSION["revenue"] = $row["chefRevenue"];
      $_SESSION["cancel_rate"] = $row["chefCancelRate"];
      $_SESSION["service_rate"] = $row["chefServRate"];
      $_SESSION["punctuality"] = $row["chefPunctuality"];
      $_SESSION["menu_quality"] = $row["chefMenuQuality"];
    }

    $sql2 = "SELECT COUNT(*) AS served_count FROM service WHERE chefId = '$userId' AND (servStatus = 'c' OR servStatus = 'f') AND servDateTime < 'CURRENT_TIMESTAMP'";
    $result2 = $conn->query($sql2);
    if($result2->num_rows > 0)
    {
      $count = 0;
      while($row2 = $result2->fetch_assoc())
        $count = $count + 1;
      $_SESSION["served_count"] = $count;
    }

    $sql3 = "SELECT COUNT(*) AS served_count FROM service WHERE chefId = '$userId' AND (servStatus = 'b' OR servStatus = 'p') AND servDateTime > 'CURRENT_TIMESTAMP'";
    $result3 = $conn->query($sql3);
    if($result3->num_rows > 0)
    {
      $count = 0;
      while($row3 = $result3->fetch_assoc())
        $count = $count + 1;
      $_SESSION["pending_count"] = $count;
    }

    $custName = [];
    $dateTime = [];
    $menuProposal = [];

    $sql4 = "SELECT userFName, userLName, servDateTime, menuName FROM ((service INNER JOIN user ON service.custId = user.userId) INNER JOIN menuproposal ON service.menuId = menuproposal.menuId)";
    $result4 = $conn->query($sql4);
    if($result4->num_rows > 0)
    {
      $count = 0;
      while($row4 = $result4->fetch_assoc())
      {
        array_push($custName, $row4["userFName"].$row4["userLName"]);
        array_push($dateTime, $row4["servDateTime"]);
        array_push($menuProposal, $row4["menuName"]);
      }
    }
?>
