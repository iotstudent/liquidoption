<?php session_start();?>
<?php include"includes/alerts";?>
<?php include"includes/header.php";?>
<body>
<?php include"includes/nav.php";?>
    
    <div class="container-fluid  signup-bg">
        
        <div class="container">
            <div class="row ">
                <div class="col-12 py-5">
                    <center>
                    
                        <form method="post" action="processsignup.php" class="shadow col-5 py-4 bg-white rounded p-2">
                            
                            <img src="images/liquid.png" class=" py-0" width="50%" />
                            
                            <div class="row p-2">
                            <div class="form-group text-left bg-transparent col-6" style="width: 100%;">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control bg-transparent border-bottom-0">
                            </div>
                            <div class="form-group text-left bg-transparent col-6" style="width: 100%;">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control bg-transparent border-bottom-0">
                            </div>
                            </div>
                            <div class="row p-2">
                                <div class="form-group text-left bg-transparent col-6" style="width: 100%;">
                                    <label>Email</label>
                                    <input type="email" name="email"class="form-control bg-transparent border-bottom-0">
                                </div>
                                <div class="form-group text-left bg-transparent col-6" style="width: 100%;">
                                    <label> Phone Number</label>
                                    <input type="text" name="phone" class="form-control bg-transparent border-bottom-0" >
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="form-group text-left bg-transparent col-6" style="width: 100%;">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control bg-transparent border-bottom-0" >
                                </div>
                                <div class="form-group text-left bg-transparent col-6" style="width: 100%;">
                                    <label>Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control bg-transparent border-bottom-0">
                                </div>
                            </div>
                            
                            <input type="submit"  value="Signup" class="btn btn-success" style="width: 20%;"> <br/><br/>
                            <a href="login.php" class="text-dark  pt-3">Sign In</a>

                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>


    

   
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menuzord.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.bootFolio.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/rev-function.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.matchHeight.js"></script>
    <script src="js/main.js"></script>


   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>