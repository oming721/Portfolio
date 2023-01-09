<?php
$position = $acc['acc_position'];

if($position == '2' || $position == '3' || $position == '4')
{
  header("Location:user_profile.php");
}
else if($position == '5')
{
  header("Location:company_profile.php");
}
?>