<?php
session_start();
if(empty($_SESSION['enter']))
{
  $_SESSION['enter']=false;
}
if($_SESSION['enter']==false)
{
  header("Refresh:0.5; URL=/UI/pages/login.php");
}
else
{
  header("Refresh:0.5; URL=/UI/pages/home.php");
}
?>