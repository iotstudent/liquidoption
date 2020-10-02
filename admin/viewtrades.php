<?php session_start();?>
<?php include"includes/head.php";?>
<?php include "includes/dbconnection.php";?>
<?php
if(!isset($_SESSION['logged'])){
    header("Location:login.php");
}

?>
<title>Admin | view Traders</title>
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
                        <form action="plans.php" method="get">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="student" class="card">Student plan</button>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="basic" class="card">Basic plan</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="classic" class="card">Classic plan</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="business" class="card">Business plan</button>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="commercial" class="card">Commercial plan</button>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="company" class="card">Company plan</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="contracta" class="card">Contract plan A </button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="contractb" class="card">Contract plan B </button>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="smarta" class="card">Smart plan A </button>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="smartb" class="card">Smart plan B </button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card card-body bg-light dash-box">
                                        <button type="submit" name="plan" value="smartc" class="card">Smart plan c </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
</body>
</html>