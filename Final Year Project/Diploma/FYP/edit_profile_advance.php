<?php include("inc/dataconnection.php");
 
if(isset($_SESSION['loggedin']))
{ 

if(isset($_POST['save']))
{
   $target = "profile_picture/".basename($_FILES['fileToUpload']['name']);
   $image = $_FILES['fileToUpload']['name'];
   
   $name = $_POST['staff_name'];
   $position = $_POST['staff_position'];
   $number = $_POST['phone_number'];
   $email = $_POST['email'];
   $id = $_SESSION['id'];

   if($image != '' && isset($image))
   {
      $query = "UPDATE $bas.sign_in SET staff_image='$image', staff_name='$name', staff_position='$position', staff_phone_number='$number', email ='$email' WHERE id = '$id' ";
   }

   else
   {
      $query = "UPDATE $bas.sign_in SET staff_name='$name', staff_position='$position', staff_phone_number='$number', email ='$email' WHERE id = '$id' ";
   }
   
   if(trim($name) != '')
   {
      mysqli_query($connect,$query);

      header("Location:view_profile.php"); 
   }

   else
   {
      echo "No Successful";
   }
    
}

?>

<?php 
}

else
{
   header("Location:sign_in.php");
}


?>