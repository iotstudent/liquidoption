<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
    <title>Dashboard | Soon to end</title>
</head>

<body>
  

    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">
                        Soon to end trades
                    </h2>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobilenav -->
    <?php include"includes/mobile.php";?>


    <section id="breadcrumb">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li>Dashboard /</li>
                <li class="active"><a href="soontoend.html">Soon to end trades</a></li>
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
                        <div class="card-header main-color-bg">
                            Soon to end 
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <table class="table table-striped table-hover table-responsive">
                                        <tr>
                                            <th>S/n</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Trade plan</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                            <th>profit</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>mon</td>
                                            <td>day</td>
                                            <td>mon@day.com</td>
                                            <td>Basic</td>
                                            <td>23rd july 2019</td>
                                            <td>30th july 2019</td>
                                            <td>$350</td>
                                            <td><a class="btn btn-success" href="#">Sendmail</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>mon</td>
                                            <td>day</td>
                                            <td>mon@day.com</td>
                                            <td>Basic</td>
                                            <td>23rd july 2019</td>
                                            <td>30th july 2019</td>
                                            <td>$350</td>
                                            <td><a class="btn btn-success" href="#">Sendmail</a></td>
                                           
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>mon</td>
                                            <td>day</td>
                                            <td>mon@day.com</td>
                                            <td>Basic</td>
                                            <td>23rd july 2019</td>
                                            <td>30th july 2019</td>
                                            <td>$350</td>
                                            <td><a class="btn btn-success" href="#">Sendmail</a></td>
                                           
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>mon</td>
                                            <td>day</td>
                                            <td>mon@day.com</td>
                                            <td>Basic</td>
                                            <td>23rd july 2019</td>
                                            <td>30th july 2019</td>
                                            <td>$350</td>
                                            <td><a class="btn btn-success" href="#">Sendmail</a></td>
                                            
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
</body>
</html>