<header class="site-header mo-left header fullwidth">
  <!-- main header -->
  <div class="sticky-header main-bar-wraper navbar-expand-lg">
    <div class="main-bar clearfix">
      <div class="container-fluid clearfix">
        <!-- website logo -->
        <div class="logo-header mostion">
          <a href="home"><img src="images/logo.png" class="logo" alt=""></a>
        </div>
        <!-- nav toggle button -->
        <!-- nav toggle button -->
        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse"
          data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!-- extra nav -->
        <?php
        if ($_SESSION['isLoggedIn']) {
          echo '<div class="extra-nav">
          <div class="extra-cell">
            <a href="user/view/' . $_SESSION['id'] . '" class="site-button"><i class="fa fa-user"></i> My Account</a>
            <a href="logout" class="site-button"><i class="fa fa-sign-out"></i> Log Out</a>
          </div>
          </div>';
        } else {
          echo '<div class="extra-nav">
          <div class="extra-cell">
            <a href="register" class="site-button"><i class="fa fa-user"></i> Register</a>
            <a href="login" class="site-button"><i class="fa fa-lock"></i> Login</a>
          </div>
        </div>';
        }

        ?>


        <!-- main nav -->
        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
          <ul class="nav navbar-nav">
            <li class="">
              <a href="home">Home</a>
            </li>
            <li>
              <a href="info">Site Map</a>
            </li>
            <li>
              <a href="cv/all">For Employers <i class="fa fa-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="cv/all" class="dez-page">Browse Candidates</a></li>
                <li><a href="cv/create" class="dez-page">Submit Resume</a></li>
              </ul>
            </li>
            <li>
              <a href="recruit/all">For Candidates <i class="fa fa-chevron-down"></i></a>
              <ul class="sub-menu">
                <li><a href="recruit/all" class="dez-page">Browse Companies</a></li>
                <li><a href="recruit/create" class="dez-page">Publish Organization</a></li>
              </ul>
            </li>
            <?php
            if ($_SESSION['isLoggedIn']) {
              echo '<li>
              <p class="v-align-m text-justify fw9" style="padding-top: 10px;">Currently logged in as ' . $_SESSION['username']
                . ' (' . $_SESSION['role'] . '#' . $_SESSION['id'] . ')</p>
              </li>';
            }
            ?>
            <?php
            if ($_SESSION['isLoggedIn']) {
              if ($_SESSION['role'] == 'admin') {
                echo '<li>
                  <a class="dez-page" href="/admin">Admin Dashboard</a>
                  </li>';
              }
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- main header END -->
</header>