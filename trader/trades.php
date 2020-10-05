<?php session_start();?>
<?php include "includes/dbconnection.php";?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
<?php
if (!isset($_SESSION['logged'])) {
    header("Location:login.php");
}
if ($_SESSION['adminverify'] != "verified") {
  $_SESSION['error'] = "You have not been verified by the admin. Kindly check back later";
  header("Location:index.php");
}
$id=$_SESSION['logged'];
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
              <a href="plans.php" class="btn btn-sm btn-neutral">New Trade</a>
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
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                
                $sql= " SELECT * FROM Trades WHERE user_id = '$id' ORDER BY start_date DESC ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $trade_plan = $row['plan'];
                                $start_date = $row['start_date'];
                                $end_date = $row['end_date'];
                                $duration = $row['duration'];
                                $principal = $row['principal'];
                                $profit = $row['expected_earning'];
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $trade_plan;?></td>
                                    <td><?php echo $start_date;?></td>
                                    <td><?php echo $end_date;?></td>
                                    <td><?php echo $duration;?></td>
                                    <td><?php echo $principal;?></td>
                                    <td><?php echo $profit;?></td>
                                            
                                </tr>
                                
                            <?php  
                            $n++;    
                        }
                        }   
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

             
             ?>
                  
                  
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