<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container ">
      <a class="navbar-brand col-2" href="index.php">JOB PORTAL</a>

      <div class="collapse navbar-collapse col-8 d-flex justify-content-around">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="searchapplicant.php">Search users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="searchcompany.php">Find company</a>
          </li>
          <?php if ($_SESSION['role'] == 'applicant') {
          ?>
           <li class="nav-item">
            <a class="nav-link" href="searchjob.php">Find jobs</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="forum.php">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="postquestion.php?id=<?=$_SESSION['user_id']?>">Post a question</a>
            </li>
          <?php
          } elseif ($_SESSION['role'] == 'employer') {
          ?>

            <li class="nav-item">
              <a class="nav-link" href="postjob.php">Post Job</a>
            </li>
          <?php
          }

          ?>
<li class="nav-item">
              <a class="nav-link" href="message.php?id=<?=$_SESSION['user_id']?>">View messages</a>
            </li>
        </ul>
      </div>
      <div class="col-2 mt-3 d-flex justify-content-around">
        <ul class="navbar-nav">
          <li class="nav-item">
            <i class="far fa-user bg-light"></i>
          </li>
          <li class="nav-item px-2">
            <p class="text-light"><?= $_SESSION['name'] ?></p>
          </li>
          <li class="nav-item">
          <form action="" method="post">
          <a href="./logout.php" class="btn btn-sm btn-light" name="logout" onclick="return confirm('Do you want to logout?')">Log out</a>
          </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
</header>