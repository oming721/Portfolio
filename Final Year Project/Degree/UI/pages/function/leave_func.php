<?php
if(isset($_POST['addleave']))
{
  $id = $_SESSION['acc'];
  $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id WHERE acc_id='$id'");
  $acc=mysqli_fetch_array($sql);
  $user_id = $acc['user_id'];
  
  $date = $_POST['inputDate'];
  $type = $_POST['inputType'];
  $reason = $_POST['inputReason'];

  mysqli_query($connect,"INSERT INTO leave1(leave_date, leave_type, leave_reason, leave_status, leave_user) VALUES ('$date', '$type', '$reason', '0', '$user_id')");
  echo "<script>";
  echo "alert('Success');";
  echo "window.location = 'home.php'";
  echo "</script>";
}
?>