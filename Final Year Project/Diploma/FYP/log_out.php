<?php include("inc/dataconnection.php");

if(isset($_SESSION['loggedin'])){
	session_destroy();
	header("Location:sign_in.php");
}else{
	header("Location:sign_in.php");
}


?>