<?php include("inc/dataconnection.php")?>

<?php

  $fullday = $_GET['fullday'];
  $result=mysqli_query($connect,"SELECT * FROM court WHERE court_date_book='$fullday'");
  $i = 0;

  while($row=mysqli_fetch_assoc($result))
  {
    $service[$i] = array("court_date"=>$row['court_date'],"court_name"=>$row['court_name'],"court_time"=>$row['court_time'],"court_end_time"=>$row['court_end_time']);
    $i ++;
  }

  header("Content-Type: application/json");
  
  echo json_encode($service);
?>