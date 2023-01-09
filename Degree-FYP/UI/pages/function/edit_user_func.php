<?php
$id = $_SESSION['acc'];
$sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id LEFT JOIN company ON user_company = comp_id WHERE acc_id='$id'");
$acc=mysqli_fetch_array($sql);
if($acc['acc_position'] == '1' || $acc['acc_position'] == '5')
{
  header("Refresh:0.5; URL=/UI/pages/home.php");
}
if(isset($_POST['more_detail']) && isset($_POST['user_id']))
{
  if($acc['acc_position'] != '4')
  {
    header("Refresh:0.5; URL=/UI/pages/home.php");
  }
  else
  {
    $id = $_POST['user_id'];
    $self_position = $acc['acc_position'];
    $sql=mysqli_query($connect,"SELECT * FROM account INNER JOIN user ON user_account = acc_id LEFT JOIN company ON user_company = comp_id WHERE acc_id='$id'");
    $acc=mysqli_fetch_array($sql);
  }
}
else
{
  $id = $_SESSION['acc'];
  $self_position = $acc['acc_position'];
}
$result=mysqli_query($connect,"SELECT comp_id, comp_name FROM company");
$email=$acc['acc_email'];
$id=$acc['user_id'];
$name=$acc['user_name'];
$birthday=$acc['user_birthday'];
$gender=$acc['user_gender'];
$phone=$acc['user_phone'];
$address=$acc['user_address'];
if($acc['user_company'] == null)
{
  $company="Pending";
}
else
{
  $company=$acc['comp_name'];
}
if($acc['acc_position'] == '0')
{
  $position = "Pending";
  $position_code = $acc['acc_position'];
}
else if($acc['acc_position'] == '2')
{
  $position = "Employee";
  $position_code = $acc['acc_position'];
}
else if($acc['acc_position'] == '3')
{
  $position = "HR";
  $position_code = $acc['acc_position'];
}
else if($acc['acc_position'] == '4')
{
  $position = "Admin";
  $position_code = $acc['acc_position'];
}
if(isset($_POST['update']))
{
  $email = $_POST['inputEmail'];
  $id = $_POST['inputId'];
  $name=$_POST['inputName'];
  $birthday=$_POST['inputBirthday'];
  $gender=$_POST['inputGender'];
  $phone=$_POST['inputPhone'];
  $address=$_POST['inputAddress'];
  $position4=$_POST['inputPosition'];
  $company=$_POST['inputCompany'];
  
  if($pst == '4')
  {
    if($company == "NULL")
    {
      $sql = "UPDATE account INNER JOIN user ON user_account = acc_id SET user_name = '$name', user_birthday = '$birthday', user_gender = '$gender', user_phone = '$phone', user_address = '$address', acc_position = '$position4', user_company = $company WHERE user_id = '$id'";
    }
    else
    {
      $sql = "UPDATE account INNER JOIN user ON user_account = acc_id SET user_name = '$name', user_birthday = '$birthday', user_gender = '$gender', user_phone = '$phone', user_address = '$address', acc_position = '$position4', user_company = '$company' WHERE user_id = '$id'";
    }
  }
  else
  {
    if($company == "NULL")
    {
      $sql = "UPDATE account INNER JOIN user ON user_account = acc_id SET user_name = '$name', user_birthday = '$birthday', user_gender = '$gender', user_phone = '$phone', user_address = '$address' WHERE user_id = '$id'";
    }
    else
    {
      $sql = "UPDATE account INNER JOIN user ON user_account = acc_id SET user_name = '$name', user_birthday = '$birthday', user_gender = '$gender', user_phone = '$phone', user_address = '$address' WHERE user_id = '$id'";
    }
  }
  
  mysqli_query($connect,$sql);
  
  if($_FILES['imageUpload']['tmp_name'] != '')
  {
    if (!file_exists("images/$email/profile"))
    {
      mkdir("images/$email/profile", 0777, true);
    }
    $target = "images/$email/profile/profile.png";
    if(move_uploaded_file($_FILES['imageUpload']['tmp_name'], $target))
    {
      echo "<script>";
      echo "alert('Updated');";
      //echo "window.location = 'user_profile.php'";
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
      echo "window.location = 'user_profile.php?more_detail=detail&user_id=$user_in'";
      echo "</script>";
    }
    else
    {
      echo "<script>";
      echo "alert('Updated');";
      echo "window.location = 'user_profile.php'";
      echo "</script>";
    }
  }
  
}



?>