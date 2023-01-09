<?php include("inc/dataconnection.php"); ?>

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
            <a class="nav-link" href="booking.php" id="book">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" id="about">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" id="contact">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Guest
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login.php" id="login"><i class="fas fa-sign-in-alt fa-sm fa-fw mr-2"></i>Login</a>
              <a class="dropdown-item" href="register.php" id="register"><i class="fas fa-user-plus fa-sm fa-fw mr-2"></i>Register</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->