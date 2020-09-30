
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
            $sql= (" SELECT COUNT(user_id) AS notraders FROM traders WHERE status IS NULL  OR status <> 'verified' ;");
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

?>