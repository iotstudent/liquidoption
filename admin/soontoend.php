<?php session_start();?>
<?php include"includes/alerts.php";?>
<?php include"includes/head.php";?>
<?php include "includes/dbconnection.php";?>
<?php
if(!isset($_SESSION['logged'])){
    header("Location:login.php");
}


?>
<title> Admin | Soon to end</title>
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
                                            <th>principal</th>
                                            <th>profit</th>
                                            <th></th>
                                        </tr>
                                        
                                <?php


date_default_timezone_set('Nigeria/Lagos');
$date = date('Y/m/d', time());


$sql= " SELECT traders.user_id,traders.fname,traders.lname,traders.email,Trades.plan,Trades.start_date,Trades.end_date,Trades.duration,Trades.principal,Trades.expected_earning FROM traders JOIN Trades ON  Trades.user_id = traders.user_id   WHERE DATEDIFF('$date',Trades.end_date)=2";
if($result = mysqli_query($conn,$sql)){ 
        if (mysqli_num_rows($result)>0){
            $n=1;
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $trader_id = $row['user_id'];
                $trader_fname = $row['fname'];
                $trader_lname = $row['lname'];
                $trader_email = $row['email'];
                $trade_plan = $row['plan'];
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
                    <td><?php echo $trade_plan;?></td>
                    <td><?php echo $start_date;?></td>
                    <td><?php echo  $end_date;?></td> 
                    <td><?php echo $principal;?></td>  
                    <td><?php echo $expected;?></td>  
                    <td><a class="btn btn-success" href="#">Sendmail</a></td>        
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