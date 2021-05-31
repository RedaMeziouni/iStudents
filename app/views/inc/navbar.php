<?php if(isset($_SESSION['user_id'])) : ?>

<nav class="navbar navbar-expand-lg bg-light mb-5 w-100">
  <div class="container w-100">

  <div class=" w-50 ">
      <a class="navbar-brand mr-5 " href="<?php echo URLROOT; ?>/pages/home"><?php echo SITENAME; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="collapse navbar-collapse w-50 row justify-content-end" id="navbarsExampleDefault">
     
        <ul class="navbar-nav   ">
        <!-- Hide Home from the NavBar -->
        <!-- <?php// if(isset($_SESSION['user_id'])) : ?> -->
        <!-- Home -->
          <?php if ($_SESSION['user_role'] == 1) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/home">Home</a>
          </li>
          <!-- Reports -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/posts/index">Reports</a>
          </li>
          <!-- Students -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Students
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo URLROOT; ?>/students/addStudent">Add</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo URLROOT; ?>/students/showStudent">Show</a>
            </div>
          </li>
          <!-- Classes -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Classes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo URLROOT; ?>/classes/addclass">Add</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo URLROOT; ?>/classes/showClass">Show</a>
            </div>
          </li>
          
                  <!-- About us -->
                  <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About Us</a>
          </li>
          <!-- Contact us -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact Us</a>
          </li>
          <!--  -->
          <?php else : ?>
          <!-- Students case -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/home">Home</a>
          </li>
        <!-- About us -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About Us</a>
          </li>
          <!-- Contact us -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact Us</a>
          </li>
        <!-- </ul> -->
        <?php endif; ?>
        
        <!-- <ul class="navbar-nav float-right"> -->
          <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
              <a class="nav-link text-dark" href="#">Welcome <?php echo $_SESSION['user_name']; ?></a>
            </li>
          <li class="nav-item bg-danger rounded">
              <a class="nav-link text-light" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <button type="submit" class="btn btn-light btn-lg btn-block" >
                <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
              </button>
            </li>
            <li class="nav-item">
              <button type="submit" class="btn btn-light btn-lg btn-block" >
                <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
              </button>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    
    </div>
  </nav>
  <?php endif; ?>
