<?php include("inc/dataconnection.php");

$result = mysqli_query($connect,"UPDATE $bas.sign_in SET staff_status='".$_POST['val']."' WHERE id = '".$_POST['id']."'");

if($result)
{
	$query = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE id = '".$_POST['id']."' ");
	$data = mysqli_fetch_assoc($result);
	echo $data['$status'];
}


?>