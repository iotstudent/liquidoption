
<?php include "../includes/dbconnection.php";?>
<?php
                
     function CountTraders(){
        global $conn;
        $trader_number = '';
        $sql= (" SELECT COUNT(user_id) AS notraders FROM traders ;");
        if($result = mysqli_query($conn,$sql)){ 
                if (mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $trader_number = $row['notraders'];
                        echo $trader_number;   
                }
            }else { 
                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
            }
    
        }

               
        function CountUnverified(){
            global $conn;
            $trader_number = '';
            $sql= (" SELECT COUNT(user_id) AS notraders FROM traders WHERE (admin_verify IS NULL  OR admin_verify <> 'verified') AND status = 'verified' ;");
            if($result = mysqli_query($conn,$sql)){ 
                    if (mysqli_num_rows($result)>0){
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            $trader_number = $row['notraders'];
                            echo $trader_number;   
                    }
                }else { 
                    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                }
        
            }
            function CountEmailverified(){
                global $conn;
                $trader_number = '';
                $sql= (" SELECT COUNT(user_id) AS notraders FROM traders WHERE  status = 'verified' ;");
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $trader_number = $row['notraders'];
                                echo $trader_number;   
                        }
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    }
            
                }
                function CountTrades(){
                    global $conn;
                    $trade_number = '';
                    $sql= (" SELECT COUNT(trade_id) AS notrades FROM Trades;");
                        if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $trade_number = $row['notrades'];
                                echo $trade_number;   
                        }
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    }

                }

                function CountSoonToEnd(){
                    global $conn;
                    $trade_number = '';
                    date_default_timezone_set('Nigeria/Lagos');
                    $date = date('Y/m/d', time());
                    $sql= (" SELECT COUNT(trade_id) AS notrades FROM Trades  WHERE DATEDIFF(end_date,'$date')<=2 AND (notify IS NULL);");
                        if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $trade_number = $row['notrades'];
                                echo $trade_number;   
                        }
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    }

                }


?>