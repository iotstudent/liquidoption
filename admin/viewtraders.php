<?php session_start();?>
<?php include"includes/head.php";?>
<?php include "includes/dbconnection.php";?>
<?php
if(!isset($_SESSION['logged'])){
    header("Location:login.php");
}

?>
<title> Admin | All Traders</title>
</head>
<body>

    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">
                        Traders
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
                <li class="active"><a href="viewtraders.html">All Traders</a></li>
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
                            Traders
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <table class="table table-striped table-hover table-responsive">
                                        <tr>
                                            <th>S/n</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone no</th>
                                            <th>Email Verification </th>
                                            <th>Admin Verification </th>
                                        </tr>


                         <?php
                
                            $sql= " SELECT * FROM traders  ";
                            if($result = mysqli_query($conn,$sql)){ 
                                    if (mysqli_num_rows($result)>0){
                                        $n=1;
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            $trader_fname = $row['fname'];
                                            $trader_lname = $row['lname'];
                                            $trader_email = $row['email'];
                                            $trader_phone = $row['phone'];
                                            $trader_status = $row['status'];
                                            $trader_admin_verification = $row['admin_verify'];
                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $n;?></td>
                                                <td><?php echo $trader_fname;?></td>
                                                <td><?php echo $trader_lname;?></td>
                                                <td><?php echo $trader_email;?></td>
                                                <td><?php echo $trader_phone;?></td>
                                                <td><?php echo $trader_status;?></td> 
                                                <td><?php echo $trader_admin_verification;?></td>          
                                            </tr>
                                            
                                        <?php  
                                        $n++;    
                                    }
                                    }else{
                                        echo "No matching records are found."; 
                                    }    
                                }else { 
                                    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                } 

                         ?>
  
                                                                                
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