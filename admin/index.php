<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
<?php include"includes/count.php";?>
<?php
if(!isset($_SESSION['logged'])){
    header("Location:login.php");
}

?>
    <title>Admin|Dashboard</title>
</head>

<body>
   

    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Dashboard</h2>
                </div>
            </div>
        </div>
    </header>


    <!-- Mobilenav -->
    <?php include"includes/mobile.php";?>

    <section id="breadcrumb">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="active"><a href="index.html">Dashboard</a></li>
            </ol>
        </div>
    </section>




    <section id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                <?php include"includes/side.php";?>
                </div>
                <div class="col-md-10">

                    <div class="card ">
                        <div class="card-header main-color-bg">Panel</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <h2><i class="fa fa-user"></i></h2>
                                        <h6><?php CountTraders();?></h6>
                                        <h5>Traders</h5>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <h2><i class="fa fa-user-times"></i></h2>
                                        <h6><?php CountUnverified();?></h6>
                                        <h5>Unverified Traders</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <h2><i class="fa fa-money"></i></h2>
                                        <h6>10000</h6>
                                        <h5>Trades</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <h2><i class="fa  fa-bell-slash "></i></h2>
                                        <h6>100</h6>
                                        <h5>Soon to End Trades</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Latest unverified traders -->
                    <div class="card lower-sections">
                        <div class="card-header main-color-bg">
                            Unverified Traders
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>S/n</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>paul</td>
                                    <td>james </td>
                                    <td>paul@jmaes.com</td>
                                    <td><a class="btn btn-success" href="#">Verify</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sale</td>
                                    <td>man</td>
                                    <td>sale@man.com</td>
                                    <td><a class="btn btn-success" href="#">Verify</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>john</td>
                                    <td>mark</td>
                                    <td>john@mark.com</td>
                                    <td><a class="btn btn-success" href="#">Verify</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>susan</td>
                                    <td>peter</td>
                                    <td>susan@peter.com</td>
                                    <td><a class="btn btn-success" href="#">Verify</a></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- modal for add page -->
    <div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <form action="">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Page</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Page Title</label>
                    <input type="text" class="form-control" placeholder="page title">
                </div>
                <div class="form-group">
                    <label>Page Body</label>
                    <textarea name="editor1" placeholder="page body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Meta Tags</label>
                    <input type="text" class="form-control" placeholder="Some tags">
                </div>
                <div class="form-group">
                    <label>Meta description</label>
                    <input type="text" class="form-control" placeholder="Meta tags">
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
          </div>
        </div>
      </div>      
</body>
</html>