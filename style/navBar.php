  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
      <a class="navbar-brand" href="index.php">Todo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
          <ul class="navbar-nav mr-auto">
              <!-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                  </a>
              </li> -->
          </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
              <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
              </li>
              <?php
                if (isset($_SESSION["id"])) { ?>
                  <form action="" method="post">
                      <li>
                          <button name="btnLogout" type="submit" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Log out</button>
                      </li>
                      <!-- <li class="nav-item">
                      <a class="nav-link" href="login.php">log out</a>
                  </li> -->
                  </form>
              <?php } else { ?>
                  <li class="nav-item">
                      <a class="nav-link" href="login.php">log in</a>
                  </li>
              <?php } ?>
              <!-- <li class="nav-item avatar">
                  <a class="nav-link p-0" href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                  </a>
              </li> -->
          </ul>
      </div>
  </nav>
  <!--/.Navbar -->

  <?php
    if (isset($_POST["btnLogout"])) {
        $user->userLogout();
    }
    ?>