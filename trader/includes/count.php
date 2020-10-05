
<?php include "../includes/dbconnection.php";?>
<?php
                
/**
 * file contains functions that count data in DB.
 * it contains countTrades:total trades done includes mature trades and current trades
 * it contains countCurrentTrades: this counts the trades that have not yet matured
 * 
 * */   
       
                function CountTrades(){
                    global $conn;
                    global $id;
                    $trade_number = '';
                    $sql= (" SELECT COUNT(trade_id) AS notrades FROM Trades WHERE user_id ='$id';");
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


                function CountCurrentTrades(){
                    date_default_timezone_set('Africa/Lagos');
                    $date = date('Y/m/d', time());
                    global $conn;
                    global $id;
                    $trade_number = '';
                    $sql= (" SELECT COUNT(trade_id) AS notrades FROM Trades WHERE user_id ='$id' AND DATEDIFF(end_date,'$date')>0;");
                        if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $trade_number = $row['notrades'];
                                return $trade_number;   
                        }
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    }

                }

               

?>