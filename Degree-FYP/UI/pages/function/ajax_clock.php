<?php
include("../inc/dataconnection.php");

$id = $_GET['id'];

$i = 0;

$sql=mysqli_query($connect,"SELECT * FROM account WHERE acc_id='$id'");
$acc = mysqli_fetch_array($sql);
if($acc['acc_position'] == '5')
{
  $sql=mysqli_query($connect,"SELECT * FROM company INNER JOIN user ON user_company = comp_id INNER JOIN account ON acc_id = user_account WHERE comp_account='$id'");
  while($row=mysqli_fetch_assoc($sql))
  {
    $result[$i] = $row['acc_email'];
    $i++;
  }
}
else
{
  $result[0] = $acc['acc_email'];
}

echo json_encode($result);
?>