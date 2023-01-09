<?php include("inc/dataconnection.php"); 

if(isset($_POST["email_address"]))
{
	$result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE email = '".$_POST["email_address"]. "'") or die ("You can't connect to database".mysqli_error($connect)) ;
	$count = mysqli_num_rows($result);

	if($count > 0)
	{
		echo '<span>Email Already Exit</span>';
	}

	else
	{
		echo '<span class="text-success">Email Available</span>';
	}
}

else
{
	echo "Cannot Connect";
}
?>