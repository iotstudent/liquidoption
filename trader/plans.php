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
  
  <?php include"includes/sidetoggle.php";?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-12 col-7">
                <h1 class="text-white mb-0">Plans</h1>
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
              <form action="pay.php" method="get">
                
                <div class="row" style="padding:25px;">
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Student plan</h3>
                            <p class="card-text">Principal: $300</p>
                            <p class="card-text">Duration: 1 week</p>
                            <button type="submit" name="plan" value="student" class="btn btn-primary">Trade</button>
                        </div>
                    </div>
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Starter plan</h3>
                            <p class="card-text">Principal: $500</p>
                            <p class="card-text">Duration: 1 week</p>
                            <button type="submit" name="plan" value="starter" class="btn btn-primary">Trade</button>
                        </div>
                    </div>
                    <div class="card  mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Classic plan</h3>
                            <p class="card-text">Principal: $1500</p>
                            <p class="card-text">Duration: 1 week</p>
                            <button type="submit" name="plan" value="classic" class="btn btn-primary">Trade</button>
                        </div>
                    </div>
                </div>

                <!-- second row -->
                <div class="row" style="padding:25px">
                    <div class="card  mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Business plan</h3>
                            <p class="card-text">Principal: $3200</p>
                            <p class="card-text"> 1 week :$5,500 </p>
                            <p class="card-text"> 1 month :$11,500 </p>
                            <p class="card-text"> 1 year :$23,000 </p>
                            <a href="business.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">Commercial plan</h3>
                            <p class="card-text">Principal: $6500</p>
                            <p class="card-text"> 1 week :$7,500 </p>
                            <p class="card-text"> 1 month :$15,500 </p>
                            <p class="card-text"> 1 year :$30,000 </p>
                            <a href="commercial.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">Company plan</h3>
                            <p class="card-text">Principal: $10,000</p>
                            <p class="card-text"> 1 week :$12,300 </p>
                            <p class="card-text"> 1 month :$24,600 </p>
                            <p class="card-text"> 1 year :$55,600 </p>
                            <a href="company.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                </div>

                <!-- third row -->
                <div class="row" style="padding:25px">
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Contract plan A</h3>
                            <p class="card-text">Principal: $150,000</p>
                            <p class="card-text"> Duration : Minimum of 1 year </p>
                            <a href="contracta.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">Contract plan B</h3>
                            <p class="card-text">Principal: $1,000,000</p>
                            <p class="card-text"> Duration : Minimum of 1 year </p>
                            <a href="contractb.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">Smart plan A</h3>
                            <p class="card-text">Principal: $50,000</p>
                            <p class="card-text"> 1 year :$100,000 </p>
                            <p class="card-text"> 2 year :$200,000 </p>
                            <a href="smarta.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                </div>

                <!-- fourth row -->
                <div class="row" style="padding:25px">
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">Smart plan B</h3>
                            <p class="card-text">Principal: $500,000</p>
                            <p class="card-text"> 1 year :$1,000,000 </p>
                            <p class="card-text"> 2 year :$1,500,000 </p>
                            <a href="smartb.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                    <div class="card mr-3 ml-3" style="width: 18rem;">
                        <img src="assets/img/theme/money.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">Smart plan C</h3>
                            <p class="card-text">Principal: $1,000,000</p>
                            <p class="card-text"> 1 year :$2,000,000 </p>
                            <p class="card-text"> 2 year :$3,000,000 </p>
                            <a href="smartc.php" class="btn btn-primary">Trade</a>
                        </div>
                    </div>
                
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
  <script src="https://js.paystack.co/v1/inline.js"></script>
</body>
</html>