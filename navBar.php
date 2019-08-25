
<
        	<?php 
                
               if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
                if(isset($_SESSION['login_user']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
                    $myusername = $_SESSION['login_user'];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="UserPage.php">Home</a></li>
             <li><a href="AddCourier.php">New Courier</a></li>
             <li><a href="viewCouriers.php">View My Courier</a></li>
             <li><a href="logout.php">Logout</a></li>
       
          </ul>
        </li>';
 }
 if(isset($_SESSION["login_branch"]))   // Checking whether the employer session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
                    $myusername = $_SESSION["login_branch"];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="BranchPage.php">Branch Home</a></li>
             <li><a href="viewAllCouriers.php">Couriers</a></li>
              <li><a href="makeDelivery.php">Deliver</a></li>
              <li><a href="AddStaff.php">Staff</a></li>
            <li><a href="logout.php">Logout</a></li>
       
          </ul>
        </li>';
 }
  ?>
       
        
      </ul>
          
    </div>

    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>