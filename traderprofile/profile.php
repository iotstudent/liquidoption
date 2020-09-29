<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
<?php
if (!isset($_SESSION['logged'])) {
    header("Location:login.php");
}
?>
  <!-- Sidenav -->
  <?php include"includes/side.php";?>
  <!-- Main content -->
  <div class="main-content" id="panel">
  
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 200px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="text-white" style="text-transform:capitalize;"><?php echo $_SESSION['user_name'];?></h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="assets/img/avatar.svg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="post" action="process/processprofile.php">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">First name</label>
                        <input type="text"  class="form-control" placeholder="First name" name="fname"
                        value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} ?>"
                        >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Last name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lname"
                        value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} ?>"
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email"
                        value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?>"
                        >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone"
                        value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} ?>"
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Account</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Account</label>
                    <input type="text"  class="form-control" placeholder="Account Number" name="account"
                    value="<?php if(isset($_SESSION['account'])){ echo $_SESSION['account'];} ?>"
                    >
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>