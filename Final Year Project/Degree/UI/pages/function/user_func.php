<?php
if(!isset($_POST['inputEmail']) && !isset($_POST['inputPassword']))
{
  header("Refresh:0.5; URL=/UI/pages/register.php");
}
else if(isset($_POST['inputEmail1']) && isset($_POST['inputPassword1']))
{
  $email = $_POST['inputEmail1'];
  $password = $_POST['inputPassword1'];
}
else
{
  $email = $_POST['inputEmail'];
  $password = $_POST['inputPassword'];
}
if(isset($_POST['btn_register']))
{
  $email=$_POST['inputEmail1'];
  $password=md5($_POST['inputPassword1']);
  $code=md5(rand());

  $name=$_POST['inputName'];
  $birthday=$_POST['inputBirthday'];
  $gender=$_POST['inputGender'];
  $phone=$_POST['inputPhone'];
  $address=$_POST['inputAddress'];
  
  $template = file_get_contents("email/emailtemplate.php");
	$template = str_replace('{{token}}',$code,$template);
	$template = str_replace('{{email}}',$email,$template);
  ini_set('sendmail_from', 'oming789@gmail.com');
	$to = $email;
	$subject = "Welcome to Time Attendance System";
	$message = $template;
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: TAS <oming789@gmail.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	mail($to, $subject, $message, $headers);
  mysqli_query($connect,"INSERT INTO account(acc_email, acc_password, acc_token, acc_active, acc_position) VALUES ('$email', '$password', '$code', '0', '0')");
  mysqli_query($connect,"INSERT INTO user(user_name, user_birthday, user_gender, user_phone, user_address, user_account) VALUES ('$name', '$birthday', '$gender', '$phone', '$address', LAST_INSERT_ID())");
  
  if (!file_exists("images/$email/profile"))
  {
    mkdir("images/$email/profile", 0777, true);
  }
  if (!file_exists("images/$email"))
  {
    mkdir("images/$email", 0777, true);
  }
  $target = "images/$email/profile/profile.png";
  $target1 = "images/$email/1.jpg";
  $target2 = "images/$email/2.jpg";
  if(move_uploaded_file($_FILES['imageUpload']['tmp_name'], $target) && move_uploaded_file($_FILES['imageUpload1']['tmp_name'], $target1) && move_uploaded_file($_FILES['imageUpload2']['tmp_name'], $target2))
  {
    echo "<script>";
    echo "alert('Please Active From Your Email');";
    echo "window.location = 'login.php'";
    echo "</script>";
  }
}
?>