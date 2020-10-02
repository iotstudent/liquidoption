<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
<?php
if (!isset($_SESSION['logged'])) {
    header("Location:login.php");
}
?>
<title> Admin | Change Password </title>
</head>

<body class="main-color-bg">
   
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" style="color:#ebce44;"> Change Password </h2>
                </div>
            </div>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">  
                    <form action="process/processchange.php" method="post" class="card card-body bg-light" id="login">
                        
                        <div class="form-group">
                            <p class="text-center"> <?php error_alert(); success_alert();?> </p>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password"  name="npassword" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="rnpassword" class="form-control" placeholder="Re-enter New Password">
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