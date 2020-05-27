<nav class="navbar">
      <a class="navbar-brand" href="<?php echo URLROOT ?>"><img src="<?php echo URLROOT; ?>/images/logo.png" alt="sebastian tomala"></a>
      
      <div class="navbar-collapse">
        <input class="hamburger-checkbox" type="checkbox" />
        <div class="hamburger-menu">
          <span class="hamburger-part"></span>
          <span class="hamburger-part"></span>
          <span class="hamburger-part"></span>
        </div>
        <ul class="navbar-nav categories">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
          </li>
        </ul>

        <ul class="navbar-nav login">
          <?php if(isset($_SESSION['user_id'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT ?>/users/logout">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Welcom <?php echo $_SESSION['user_name']; ?></a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT ?>/users/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
</nav>