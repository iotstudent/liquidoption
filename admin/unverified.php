<?php session_start();?>
<?php include"includes/head.php";?>
<?php include "includes/dbconnection.php";?>
<title> Dashboard | Saved property</title>
</head>

<body>
    

    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Unverified Traders</h2>
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
                <li class="active"><a href="unverified.html">Unverified Traders</a></li>
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
                        <div class="card-header main-color-bg">Unverified Traders</div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>S/n</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
             <?php
                
                $sql= " SELECT * FROM traders WHERE status IS NULL  OR status <> 'verified'";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $trader_fname = $row['fname'];
                                $trader_lname = $row['lname'];
                                $trader_email = $row['email'];
                                $trader_phone = $row['phone'];
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $trader_fname;?></td>
                                    <td><?php echo $trader_lname;?></td>
                                    <td><?php echo $trader_email;?></td>
                                    <td><a class="btn btn-success" href="#">Verify</a></td>            
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
    </section>
</body>
</html>