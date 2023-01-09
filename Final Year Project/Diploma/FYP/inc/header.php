<?php 
if(isset($_SESSION))
{

$result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE email ='".$_SESSION['admin_email']."'");
$row = mysqli_fetch_assoc($result);

?>

<header class="main-header">
             
   <!-- Logo Start -->
   <div class="seipkon-logo">
      <a href="index.php">
         <h2 style="color: white; font-style: italic; font-size: 30px;">KSBB Badminton Court</h2>      
      </a>
   </div>
   <!-- Logo End -->
             
   <!-- Header Top Start -->
   <nav class="navbar navbar-default">
      <div class="container-fluid">
         <div class="header-top-section">
            <div class="pull-left">         
               <!-- Collapse Menu Btn Start -->
               <button type="button" id="sidebarCollapse" class=" navbar-btn">
                  <i class="fa fa-bars"></i>
               </button>
               <!-- Collapse Menu Btn End -->
                         
               <!-- Header Top Search Start -->
              <!--  <div class="header-top-search">
                  <form>
                     <input type="search" placeholder="Search..." >
                     <button type="submit" ><i class="fa fa-search"></i></button>
                  </form>
               </div> -->
               <!-- Header Top Search End -->               
            </div>
                     
            <div class="header-top-right-section pull-right">
               <ul class="nav nav-pills nav-top navbar-right">      
                  <!-- Full Screen Btn Start -->
                  <li>
                     <a href="#" id="fullscreen-button">
                        <i class="fa fa-arrows-alt"></i>
                     </a>
                  </li>
                  <!-- Full Screen Btn End -->
                            
                  <!-- Profile Toggle Start -->
                  <li class="dropdown">
                     <a class="dropdown-toggle profile-toggle" href="index.php" data-toggle="dropdown">
                        <img src="profile_picture/<?php echo $row['staff_image'];?>" style="width: 50px; height: 45px; border-radius: 30px; float: left;" class="output"/>
                        <div class="profile-avatar-txt">
                           <p><?php echo $row['staff_name'];?></p>
                           <i class="fa fa-angle-down"></i>
                        </div>
                     </a>
                              
                     <div class="profile-box dropdown-menu animated bounceIn">
                        <ul>
                           <li><a href="view_profile.php"><i class="fa fa-user"></i>View Profile</a></li>
                           <li><a href="edit_profile.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i>Edit Profile</a></li>
                           <li><a href="change_password.php"><i class="fa fa-lock"></i>Change Password</a></li>
                           <li><a href="log_out.php"><i class="fa fa-power-off"></i>Sign Out</a></li>
                        </ul>
                     </div>
                  </li>
                  <!-- Profile Toggle End -->
                            
               </ul>
            </div>
         </div>
      </div>
   </nav>
   <!-- Header Top End -->
</header>

<?php 
}

else
{
   header("Location:sign_in.php");
}
?>