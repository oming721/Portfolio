<?php
if(isset($_POST['btnAddMore']))
{
  if($_FILES['imageUpload1']['tmp_name'] != '')
  {
    if (!file_exists("images/$email"))
    {
      mkdir("images/$email", 0777, true);
    }
    $target = "images/$email/1.jpg";
    if(move_uploaded_file($_FILES['imageUpload1']['tmp_name'], $target))
    {
      
    }
  }
  if($_FILES['imageUpload2']['tmp_name'] != '')
  {
    if (!file_exists("images/$email"))
    {
      mkdir("images/$email", 0777, true);
    }
    $target = "images/$email/2.jpg";
    if(move_uploaded_file($_FILES['imageUpload2']['tmp_name'], $target))
    {
      
    }
  }
  echo "<script>";
  echo "alert('changed');";
  echo "window.location = 'selfie.php'";
  echo "</script>";
}
?>