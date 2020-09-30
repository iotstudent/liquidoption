<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
    <title> Account Login</title>
</head>

<body class="main-color-bg">
   
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" style="color:#ebce44;"> Admin </h2>
                </div>
            </div>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4"> 
                    
                    <form action="process/processlogin.php" method="post" class="card card-body bg-light" id="login">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <div class="form-group">
                                    <img src="img/gold.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <p class="text-center"> <?php error_alert(); success_alert();?> </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>