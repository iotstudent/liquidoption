<?php session_start();?>
<?php include"includes/head.php";?>
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
                <li> Dashboard /</li>
                <li class="active"><a href="viewtrades.html">View Trades</a></li>
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
                                        <a href="student.php" class="plans-link">
                                            <h6>100</h6>
                                            <h5>Student plan</h5>
                                        </a>
                                        
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>200</h6>
                                            <h5>Basic plan</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>500</h6>
                                            <h5>Classic plan</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>800</h6>
                                            <h5>Business plan</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>100</h6>
                                            <h5>Commercial plan</h5>
                                        </a>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>100</h6>
                                            <h5>Company plan</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>100</h6>
                                            <h5>Contract plan A</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>300</h6>
                                            <h5>Contract plan B</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>100</h6>
                                            <h5>Smart plan A</h5>
                                        </a>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="" class="plans-link">
                                            <h6>100</h6>
                                            <h5>Smart plan B</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <a href="smartb.html" class="plans-link">
                                            <h6>100</h6>
                                            <h5>Smart plan B</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
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