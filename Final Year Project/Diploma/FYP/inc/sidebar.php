<?php include("inc/dataconnection.php"); ?>

<?php

if($_SESSION['level'] == "admin")
{
   $display = "block";
}

else
{
   $display = "hidden";
}

if($_SESSION['level'] == "staff")
{
	$display1 = "block";
}

else
{
	$display1 = "hidden";
}

?>

<!-- Sidebar Start -->
<style>
hidden
{
   display: none; 
}

block
{
   display:block;
}

   </style>
         <aside class="seipkon-main-sidebar">
            <nav id="sidebar">
                
               <!-- Sidebar Profile Start -->
               <div class="sidebar-profile clearfix">
                  <div class="profile-avatar">

                     <?php

                        $result = mysqli_query($connect,"SELECT * FROM $bas.sign_in WHERE email ='".$_SESSION['admin_email']."'");
                        $row = mysqli_fetch_assoc($result);

                     ?>
                     
                    <img src="profile_picture/<?php echo $row['staff_image'];?>" style="width: 100px; height: 65px; border-radius: 50px;" class="output"/>
                  </div>

                  <div class="profile-info">
                     <h3><?php echo $row['staff_position']; ?></h3>
                     <p>Welcome <?php echo $row['staff_name']; ?></p> 
                  </div>
               </div>
               <!-- Sidebar Profile End -->
                
             <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>Book Details</h3>
                  <ul class="list-unstyled components">
                    <!--  <li class="active">
                        <a href="index.php">
                        <i class="fa fa-dashboard"></i>
                        Booking
                        </a>
                     </li> -->
                     
                    <li class="active">
                        <a href="add-product.html#ecommerce" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Booking
                        </a>
                        <ul class="collapse list-unstyled" id="ecommerce">
                           <li class="active"><a href="index.php">Disable Details</a></li>
                           <li class="active"><a href="member_booking_details.php">Member Booking Details</a></li>
                           <li class="active"><a href="manage_booking.php">Manage Booking</a></li>
                        </ul>
                     </li>

                     <!-- <li>
                        <a href="index.html#forms" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-edit"></i>
                        Promotion
                        </a>
                        <ul class="collapse list-unstyled" id="forms">
                          <li><a href="all_promotion.php">All Promotion</a></li>
                           <li><a href="add_promotion.php">Add Promotion</a></li>
                        </ul>
                     </li> -->
                     
                  </ul>
               </div>
               <!-- Menu Section End -->

               <div class="menu-section">
                  <h3>Member</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="add-product.html#apps" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-address-book-o"></i>
                        Member
                        </a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="all_user.php">Member Account</a></li>
                           <li><a href="contact_us.php">Contact Us</a></li>
                        </ul>
                     </li>
               </div>

               <!-- Menu Section Start -->
               <div class="menu-section <?php echo $display1;?>">
                  <h3>Staff Information</h3>
                  <ul class="list-unstyled components">
                     
                     <li>
                        <a href="index.html#ui_elements" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-laptop"></i>
                        Staff
                        </a>
                        <ul class="collapse list-unstyled" id="ui_elements">
                           <li><a href="view_all_staff.php">View All Staff</a></li>
                        </ul>
                     </li>
               </div>
               <!-- Menu Section End -->

               <div class="menu-section <?php echo $display;?>">
                  <h3>Staff</h3>
                   <ul class="list-unstyled components">

                     <li class="active">
                        <a href="pages.html#createpage" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        New Staff
                        </a>
                        <ul class="collapse list-unstyled" id="createpage">
                           <li class="active"><a href="all_staff.php">All Staff</a></li>
                           <li class="active"><a href="add_staff.php">Add Staff</a></li>
                        </ul>
                  </ul>
               </div>

               <!-- Menu Section Start>-->
               <div class="menu-section <?php echo $display;?>">
                  <h3>Send Mail</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="index.html#ex_authentication" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        Mail
                        </a>
                        <ul class="collapse list-unstyled" id="ex_authentication">
                           <li><a href="mail.php">Send Mail</a></li>
                        </ul>

                     </li>
                  </ul>
               </div>
               <!-- Menu Section End -->

            </nav>
         </aside>
         <!-- End Sidebar -->
