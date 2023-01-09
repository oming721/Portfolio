<?php
$id = $_SESSION['acc'];


if($acc['acc_position'] == '2' || $acc['acc_position'] == '3' || $acc['acc_position'] == '4')
{
  $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id LEFT JOIN company ON user_company = comp_id WHERE acc_id='$id'");
}
else if($acc['acc_position'] == '5')
{
  $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN company ON comp_account = acc_id WHERE acc_id='$id'");
}




$acc=mysqli_fetch_array($sql);
if($acc['acc_position'] == '2' || $acc['acc_position'] == '3')
{
  header("Refresh:0.5; URL=/UI/pages/profile.php");
}
if(isset($_POST['more_detail']) && isset($_POST['user_id']))
{
  if($acc['acc_position'] != '4')
  {
    header("Refresh:0.5; URL=/UI/pages/profile.php");
  }
  else
  {
    $id = $_POST['user_id'];
    $self_position = $acc['acc_position'];
    $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN company ON comp_account = acc_id WHERE acc_id='$id'");
    $acc=mysqli_fetch_array($sql);
  }
}
else
{
  $id = $_SESSION['acc'];
  $self_position = $acc['acc_position'];
}

$email=$acc['acc_email'];
$id=$acc['comp_id'];
$name=$acc['comp_name'];
$location=$acc['comp_location'];

if($acc['acc_position'] == '1')
{
  $position = "Pending";
  $position_code = $acc['acc_position'];
}
else if($acc['acc_position'] == '5')
{
  $position = "Company";
  $position_code = $acc['acc_position'];
}



if(isset($_POST['update']))
{
  $email = $_POST['inputEmail'];
  $id = $_POST['inputId'];
  $name=$_POST['inputName'];
  $location=$_POST['inputLocation'];
  $position4=$_POST['inputPosition'];
  if($pst == '4')
  {
    $sql = "UPDATE account INNER JOIN company ON comp_account = acc_id SET comp_name = '$name', comp_location = '$location', acc_position = '$position4' WHERE comp_id = '$id'";
  }
  else
  {
    $sql = "UPDATE account INNER JOIN company ON comp_account = acc_id SET comp_name = '$name', comp_location = '$location' WHERE comp_id = '$id'";
  }
  mysqli_query($connect,$sql);
  
  if($_FILES['imageUpload']['tmp_name'] != '')
  {
    if (!file_exists("images/company"))
    {
      mkdir("images/company", 0777, true);
    }
    $target = "images/company/company.png";
    if(move_uploaded_file($_FILES['imageUpload']['tmp_name'], $target))
    {
      echo "<script>";
      echo "alert('Updated');";
      echo "window.location = 'company_profile.php'";
      echo "</script>";
    }
  }
  else
  {
    if(isset($_POST['more_detail']) && isset($_POST['user_id']))
    {
      $user_in = $_POST['user_id'];
      echo "<script>";
      echo "alert('Updated');";
      echo "window.location = 'company_profile.php?more_detail=detail&user_id=$user_in'";
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Updated');";
      echo "window.location = 'company_profile.php'";
      echo "</script>";
    }
  }
  
}



?>