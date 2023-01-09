<?php
$action = "user.php";
if($_SESSION['enter']==true)
{
  header("Refresh:0.5; URL=home.php");
}
?>