<?php
include("../inc/dataconnection.php");

$email = $_GET['email'];
$data = [];
$result = true;

$sql=mysqli_query($connect,"SELECT * FROM account WHERE acc_email='$email'");
$count=mysqli_num_rows($sql);
if($count != 0)
{
  $result = false;
}

echo json_encode($result);
?>