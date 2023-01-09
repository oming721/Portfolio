<?php include("inc/dataconnection.php"); 

if(isset($_SESSION['enter']))
{
?>

<div class="click-closed"></div>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="home.php">KSBB<span class="color-b"> Badminton Court</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="book" data-toggle="modal" data-target="#exampleModalLong">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" id="about">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" id="contact">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="profile.php" id="profile"><i class="fas fa-user fa-sm fa-fw mr-2"></i>Profile</a>
              <a class="dropdown-item" href="book_history.php" id="history"><i class="fas fa-receipt fa-sm fa-fw mr-2"></i>Book History</a>
              <a class="dropdown-item" href="confirm.php" id="change"><i class="fas fa-lock fa-sm fa-fw mr-2"></i>Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Log Out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

<?php 

}

else
{
  header("LOCATION: //localhost/FYP/user/login.php");
}


?>