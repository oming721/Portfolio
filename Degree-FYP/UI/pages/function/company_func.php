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
  $location=$_POST['inputLocation'];
  
  $template = file_get_contents("email/emailtemplate.php");
	$template = str_replace('{{token}}',$code,$template);
	$template = str_replace('{{email}}',$email,$template);
  ini_set('sendmail_from', 'oming789@gmail.com');
	$to = $email;
	$subject = "Welcome to Time Attendane System";
	$message = $template;
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: TAS <oming789@gmail.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	mail($to, $subject, $message, $headers);
  mysqli_query($connect,"INSERT INTO account(acc_email, acc_password, acc_token, acc_active, acc_position) VALUES ('$email', '$password', '$code', '0', '1')");
  mysqli_query($connect,"INSERT INTO company(comp_name, comp_location, comp_account) VALUES ('$name', '$location', LAST_INSERT_ID())");
  
  echo "<script>";
  echo "alert('Please Active From Your Email');";
  echo "window.location = 'login.php'";
  echo "</script>";

  
}
?>