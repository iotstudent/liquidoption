
<?php session_start();?>
<?php include"includes/head.php";?>
<?php include "includes/dbconnection.php";?>
<?php
if(!isset($_SESSION['logged'])){
    header("Location:login.php");
}

?>
<title> Admin | Unverified</title>
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
                        <div class="card-header main-color-bg">
                            <h4>Unverified Traders</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>S/n</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
             <?php
                
                $sql= " SELECT * FROM traders WHERE (admin_verify IS NULL OR admin_verify <> 'verified') AND status = 'verified'";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $trader_id = $row['user_id'];
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
                                    <td>
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' style="display: inline;">
                                            <input type='hidden'  name='traderid' value="<?php echo $trader_id; ?>" />
                                            <input type='submit' name='formverify' class="btn btn-success" value="Verify" />
                                        </form>
                                    </td>            
                                </tr>
                                
                            <?php  
                            $n++;    
                        }
                        }else{
                            echo "<tr><td>No matching records are found.</td></tr>";  
                        }    
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

             
             ?>
             <?php
                if(isset($_POST['formverify'])){
                    if(isset($_POST['traderid']) && !empty($_POST['traderid'])){
                        $traderid = $_POST['traderid'];
                        $sql= "UPDATE traders SET admin_verify = 'verified' WHERE user_id = '$traderid'";
                        $update = mysqli_query($conn,$sql);
                    }
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