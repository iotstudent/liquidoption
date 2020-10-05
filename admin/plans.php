<?php session_start();?>
<?php include"includes/head.php";?>
<?php include "includes/dbconnection.php";?>
<?php
if(!isset($_SESSION['logged'])){
    header("Location:login.php");
}
if(isset($_GET['plan'])){
    $plan = $_GET['plan'];
    

}


?>
<title>Dashboard | Plan Trades </title>
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
                <li>view Trades /</li>
                <li class="active"><a href="plans.php?plan=<?php echo $plan;?>"><?php echo $plan;?></a></li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-10 offset-md-1">

                    <div class="card ">
                        <div class="card-header main-color-bg">
                            <h4><?php echo $plan;?> Plan</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive mr-2 ml-2">
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <th>S/n</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                            <th>Duration</th>
                                            <th>Principal</th>
                                            <th>profit</th>
                                            
                                        </tr>
                <?php


                    $sql= " SELECT traders.fname,traders.lname,traders.email,Trades.plan,Trades.start_date,Trades.end_date,Trades.duration,Trades.principal,Trades.expected_earning FROM traders JOIN Trades ON  Trades.user_id = traders.user_id WHERE Trades.plan = '$plan'  ORDER BY Trades.start_date DESC";
                    if($result = mysqli_query($conn,$sql)){ 
                            if (mysqli_num_rows($result)>0){
                                $n=1;
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                
                                    $trader_fname = $row['fname'];
                                    $trader_lname = $row['lname'];
                                    $trader_email = $row['email'];
                                    $start_date = $row['start_date'];
                                    $end_date = $row['end_date'];
                                    $duration = $row['duration'];
                                    $principal = $row['principal'];
                                    $expected = $row['expected_earning'];
                                    
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $n;?></td>
                                        <td><?php echo $trader_fname;?></td>
                                        <td><?php echo $trader_lname;?></td>
                                        <td><?php echo $trader_email;?></td>
                                        <td><?php echo $start_date;?></td>
                                        <td><?php echo $end_date;?></td> 
                                        <td><?php echo $duration;?></td>
                                        <td><?php echo $principal;?></td>  
                                        <td><?php echo $expected;?></td>          
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