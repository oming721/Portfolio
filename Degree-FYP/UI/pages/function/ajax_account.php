<?php
include("../inc/dataconnection.php");

$password = md5($_GET['password']);
$id = $_GET['id'];

$result = true;

$sql=mysqli_query($connect,"SELECT * FROM account WHERE acc_id='$id' AND acc_password = '$password'");
$count=mysqli_num_rows($sql);
if($count == 0)
{
  $result = false;
}

echo json_encode($result);
?>