<?php
if(isset($_SESSION['enter']))
{
	session_destroy();
	header("Location:login.php");
}

else
{
	header("Location:login.php");
}
?>