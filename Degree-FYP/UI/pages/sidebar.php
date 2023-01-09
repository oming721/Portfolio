<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <?php if($pst == "4"){?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Employee" aria-expanded="false" aria-controls="Employee">
              <i class="icon-target menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Employee">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="all_admin.php">Admin</a></li>
                <li class="nav-item"> <a class="nav-link" href="all_employee.php">Employee</a></li>
                <li class="nav-item"> <a class="nav-link" href="all_company.php">Company</a></li>
                <li class="nav-item"> <a class="nav-link" href="all_pending.php">Pending</a></li>
              </ul>
            </div>
          </li>
          <?php }if($pst== "5"){?>
          
          <li class="nav-item">
            <a class="nav-link" href="company_employee.php">
              <i class="icon-target menu-icon"></i>
              <span class="menu-title">Employees</span>
            </a>
          </li>
          
          <?php }if($pst == "3"){?>
          
          <li class="nav-item">
            <a class="nav-link" href="all_employee.php">
              <i class="icon-target menu-icon"></i>
              <span class="menu-title">View ALL Employee</span>
            </a>
          </li>
          
          <?php }?>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Attendance" aria-expanded="false" aria-controls="Attendance">
              <i class="icon-clock menu-icon"></i>
              <span class="menu-title">Attendance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Attendance">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="clock_in.php">Clock In</a></li>
                <li class="nav-item"> <a class="nav-link" href="clock_out.php">Clock Out</a></li>
              </ul>
            </div>
          </li>
          
          <?php if($pst == "5"){?>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Report" aria-expanded="false" aria-controls="Report">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Report</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Report">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="self_leave.php">Today Leaves</a></li>
                <li class="nav-item"> <a class="nav-link" href="self_attendance.php">Today Attendance</a></li>
              </ul>
            </div>
          </li>
          
          <?php } if($pst == "2" || $pst == "3" || $pst == "4"){?>
          
          <li class="nav-item">
            <a class="nav-link" href="self_attendance.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">View Attendance</span>
            </a>
          </li>
          
          <?php } if($pst == "3" || $pst == "4"){?>
          <li class="nav-item">
            <a class="nav-link" href="all_attendance.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">View All Attendance</span>
            </a>
          </li>
          
          <?php } if($pst == "2" || $pst == "3" || $pst == "4"){?>
          
          <li class="nav-item">
            <a class="nav-link" href="add_leave.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Add Leaves</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="self_leave.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">View Leaves</span>
            </a>
          </li>
          
          <?php } if($pst == "3" || $pst == "4"){?>
          
          <li class="nav-item">
            <a class="nav-link" href="all_leave.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">View ALL Leaves</span>
            </a>
          </li>
          
          <?php }?>
          
        </ul>
      </nav>