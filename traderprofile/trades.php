<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
<?php
if (!isset($_SESSION['logged'])) {
    header("Location:login.php");
}
if ($_SESSION['status'] != "verified") {
  header("Location:verify.php");
}
?>
  <!-- Sidenav -->
  <?php include"includes/side.php";?>
  <!-- Main content -->
  <div class="main-content" id="panel">
  <?php include"includes/sidetoggle.php";?>
    
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Trades</h6>
              
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="plans.php" class="btn btn-sm btn-neutral">New</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Trades</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">s/n</th>
                    <th scope="col" class="sort" data-sort="budget">Plan Name</th>
                    <th scope="col" class="sort" data-sort="status">Start Date</th>
                    <th scope="col" class="sort" data-sort="status">Maturity Date</th>
                    <th scope="col">Duration</th>
                    <th scope="col" class="sort" data-sort="completion">Principal</th>
                    <th scope="col" class="sort" data-sort="completion">Profit</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td>1</td>
                    <td class="budget">Starter</td>
                    <td>
                      <span class="status">12-12-2012</span>
                    </td>
                    <td>12-12-2013</td>
                    <td>7 weeks</td>
                    <td>$300</td>
                    <td>$350</td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                  
                  
                </tbody>
              </table>
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