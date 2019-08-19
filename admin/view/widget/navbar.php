<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   
   <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Home</a>
          </li>
          <?php if( isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
              <a class="nav-link" href="admin.php?controller=page&action=user">Users</a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
              <a class="nav-link" href="admin.php?action=about">About</a>
          </li>
      </ul>
      
      <ul class="navbar-nav mr-right">
          <?php if( isset($_SESSION['user_id'])) : ?>
          <span class="navbar-text pl-5">User logged:</span>
          <li class="nav-item dropdown pr-5">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user"></i> <?php echo $_SESSION['user_name'];?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php?controller=user&action=logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
          </li>
          <?php else : ?>
          <li class="nav-item">
              <a class="nav-link" href="admin.php?controller=page&action=login">Login</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="admin.php?controller=page&action=register"><i class="fa fa-sign-in"></i> Sign in </a>
          </li>
          <?php endif; ?>
      </ul>
</nav>
