<?php
if(isset($_POST['btn_submit']))
{
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $id = $_POST['inputid'];
  $email = preg_replace("/\([^)]+\)/","",$_POST['inputEmail']);
  $todaydate = date("Y/m/d");
  
  $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id INNER JOIN attendance ON att_user = user_id WHERE acc_email = '$email' AND att_date = '$todaydate'");
  $count=mysqli_num_rows($sql);
  $sql1=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id WHERE acc_email = '$email'");
  $acc=mysqli_fetch_array($sql1);
  $user=$acc['user_id'];
  $time=date("h:i:sa");
  
  if($count==0)
  {
    mysqli_query($connect,"INSERT INTO attendance(att_date, att_clock_out, att_user) VALUES ('$todaydate', '$time', '$user')");
  }
  else
  {
    mysqli_query($connect,"UPDATE attendance SET att_clock_out = '$time' WHERE att_date = '$todaydate' AND att_user = '$user'");
  }
  echo "<script>alert('$time');window.location = 'home.php';</script>";
  
  
}
?>