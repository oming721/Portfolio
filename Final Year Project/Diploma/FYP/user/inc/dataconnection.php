<?php

session_start();
if(empty($_SESSION['enter']))
{
  $_SESSION['enter']=false;
}
$connect = mysqli_connect("localhost","root","","badminton_admin_system") or die("Could Not Connect");



?>