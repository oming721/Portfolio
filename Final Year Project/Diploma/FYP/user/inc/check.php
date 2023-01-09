<?php
if($_SESSION['enter']==false)
{
  echo "<script>";
  echo "alert('Please Login First');";
  echo "</script>";
  header("Refresh:0.1; URL=//localhost/FYP/user/login.php");
}
?>