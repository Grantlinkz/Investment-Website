<?php
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
    session_start();
    ob_start();
    
    if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    
    $client = $_GET['client'];
    
    include_once '../includes/dbh.inc.php';
    
    $sql = "SELECT * FROM user where id='$client'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result);
    
     $first_name = $row['first_name'];
     $email = $row['email'];
    
    
    $sql2="select * from history1 where id='$client' order by trans_id desc";
    $result2 = mysqli_query($conn, $sql2);
    
    
    
    
   // $resultChecker = mysqli_num_rows($result);
?>
<?php header('Content-Type: text/html; charset=utf-8'); ?> <!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Member Profile </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="shortcut icon" type="image/png" href="../images/favico.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
         <style>
             .bg-light {
            background: #091b27 !important;
        }
        
        footer {
            background: #1b1b1b;
        }

        .footer p {
            font-size: 16px;
            letter-spacing: 1px;
            color: #ccc;
        }
        </style>
    </head>
    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed">
          
             <a href="admin_cpanel.php" style="color:white; text-decoration: none;">
                <i class="fas fa-home"></i> 
                <span  style="text-decoration: underline;">ADMIN SECTION</span>
            </a>
        </nav>
    </head>
    <body>
        <div class="container-fluid mt-5">
            <a href="admin_cpanel.php" class="btn btn-primary">
                    <i class="fa fa-angle-left"></i>
                     Go back to Admin Section
                </a>
              <a href="setting.php" class="btn btn-primary" style="float:right !important; margin-left: 10px;">
                    <i class="fas fa-cogs"></i>
                    Setting
                </a>
                <a href="log_out.php" class="btn btn-danger" style="float:right !important;">
                    Log out
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            <br>
            <br>
                 <center style="clear:both;">
                    <h3 class="mt-5 text-danger"> USER'S PROFILE</h3>
                    <h3> <?php echo  $row['first_name'] . " " .  $row['last_name']?> </h3>
                    
                     <h3 class="mt-5 text-danger"> CURRENT BALANCE</h3>
                    <h3>
                        $<?php 
                          $wallet = $row['wallet_balance'];
                                    $show_wallet = number_format($wallet, 2);
                                echo $show_wallet;
                            ?>
                    </h3>
                    
                     <h3 class="mt-5 text-danger"> Account Type</h3>
                    <h3> <?php echo  $row['account_type'] ?></h3>
                    <br>
                      <?php
                        if(isset($_POST['update_account'])) {
                        $account_type = mysqli_real_escape_string($conn, $_POST['account_type']);
                            
                            $sql = "UPDATE user SET account_type='$account_type' WHERE id='$client'";
                            
                            $query = mysqli_query($conn, $sql);
                            
                            if($query) {
                            
    header("Location: admin-profile.php?client=".$client);
                            
                        
                            
                            }
                        }
                    
                    ?>
                    <form method="POST">
                         <div class="form-group" style='width: 200px'>
                            <select name="account_type" id="gender" style="width:100%" class="round" required>
               <option value="" disabled="" selected="">-- Package Plan --</option>
                    <option>MINI</option>
                    <option> SILVER</option>
                    <option>GOLD</option>
                    <option>PLATINUM</option>
                    <option>SUPER</option>
                 
            </select>
                        </div>
                        <br>
                        <button type='submit' class='btn btn-primary' name='update_account'>Update Account Type</button>
                    </form>
                    
                    
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="">
<!--                                <a href="#" class="btn btn-primary">Click to Edit User Info</a>-->
                                <br><br>
                                    <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                                       <thead>
                                           <tr><div style="background-color: #007bff; text-transform: uppercase; color: #fff;">User Info</div></tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                               <td>Name:</td>
                                               <td><?php echo  $row['first_name'] . " " .  $row['last_name']?> </td>
                                           </tr>
                                           <tr>
                                               <td>Email:</td>
                                               <td><?php echo  $row['email']?> </td>
                                           </tr>
                                           <tr>
                                               <td>Phone no:</td>
                                               <td><?php echo $row['phone_no']?></td>
                                           </tr>
                                           <tr>
                                               <td>Country:</td>
                                               <td><?php echo  $row['country']?></td>
                                           </tr>
                                           <tr>
                                               <td>Date Registered:</td>
                                               <td><?php echo  $row['date']?></td>
                                           </tr>
                                            <tr>
                                               <td>Account Type:</td>
                                               <td><?php echo  $row['account_type']?></td>
                                           </tr>
<!--                                             <tr>
                                               <td>Wallet Address:</td>
                                               <td><?php echo  $row['btc_address']?></td>
                                           </tr>-->
                                           <tr>
                                               <td>Last Login:</td>
                                               <td><?php echo  $row['last_login']?></td>
                                           </tr>
                                           <tr>
                                               <td>Wallet Balance</td>
                                               <td>
                                                   <?php
                                                    $seperate = $row['wallet_balance'];
                                                    $new_seperate = number_format($seperate,2); 
                                                    echo "$".$new_seperate;
                                                       ?>
                                               </td>
                                           </tr>
                                       </tbody>
                                    </table>
                            </div>
                            <h3 class="mt-5" style="text-transform: uppercase; font-weight: 300;">Make A Transaction</h3>
                            <form method="post">
                                <div class="form-group">
                                    <span> Payment Date</span>
                                    <input type="date" name="date" class="form-control" required>
                                    <br>
                                    <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
                                    <div class="form-group">
                                        <span> Payment Type</span>
                                      <select class="form-control" name="payment" id="account_type" required>
                                          <option value="" disabled selected>--Select an option--</option>
                                          <option>Profit </option>
                                          <option>Deposit</option>
                                          <option>Trade Commission</option>
                                          <option>Bonus</option>
                                          <option>Stock Market</option>
                                          <option>Withdrawal</option>
                                      </select>  
                                  </div>
                                    <button type="submit" class="btn btn-primary mt-3" name="plus" style="margin-left: 10px; margin-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                        Add to Wallet Balance
                                    </button>
                                    <button type="submit" href="" class="btn btn-danger mt-3" name="minus" style="margin-bottom: 10px;">
                                         <i class="fa fa-minus"></i>
                                        Subtract from Wallet Balance
                                    </button>
                              </div>
                            </form>
                            
                            <?php
                                //random id values
                                $trans_id = strtotime('now');
                            
                                if(isset($_POST['plus'])){
                                    $first_name = $row['first_name'];
                                    $email = $row['email'];
                                    $date = mysqli_real_escape_string($conn, $_POST['date']);
                                    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
                                    $payment = mysqli_real_escape_string($conn, $_POST['payment']);
                                    $total = $amount + $row['wallet_balance'];
                                    $sqlplus = "UPDATE user SET wallet_balance='$total' WHERE id='$client'";
                                    $current_time = strtotime("now");                                   
                                    mysqli_query($conn, $sqlplus);
                                    
                                    
                                    
                                    $q1="INSERT INTO history1(history_id, trans_id, id, date, amount, type, status) VALUES ('NULL', '$trans_id', '$client','$date','$amount','$payment', 'complete')";
                                    $deposit_result = mysqli_query($conn, $q1);
                                   
                                    if($deposit_result) {
                                        
                                        require_once 'admin-alert2.php';
                                        
                                        //send Email
                                      $mailreturn = mailClient($first_name,$amount,$payment,$email); 
                                        
                                                if($mailreturn=='success') {
                                                    header("Location: admin-profile.php?client=".$client);
                                             } else {
                                                 echo "<center>
                                                            <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                                    <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                                    <strong> An Error Occured! </strong>Please try again
                                                             </div>
                                                    </center>";
                                             }
                                    }
                                }
                                
                                if(isset($_POST['minus'])){
                                    $amount = $_POST['amount'];
                                    $payment = $_POST['payment'];
                                    $total = $row['wallet_balance'] - $amount;
                                    $sqlplus = "UPDATE user SET wallet_balance='$total' WHERE id='$client'";
                                    $current_time = strtotime("now");
                                    $date = date("jS M, Y h:ia", $current_time);                                      
                                    mysqli_query($conn, $sqlplus);
                                    $q2="INSERT INTO history1 (history_id, trans_id, id, date, amount, type, status) VALUES ('NULL', '$trans_id', '$client','$date','$amount','$payment', 'complete')";
                                    // $q2="insert history1 values('NULL', '$trans_id', '$client','$date','$amount','$payment', 'complete')";
                                    mysqli_query($conn, $q2);      
                                
                                    header("Location: admin-profile.php?client=".$client);
                                }
                            
                            ?>
                            
                        </div>
                        <div class="col-md-6">
<!--                             <a href="#" class="btn btn-danger">Click to Edit User Wallet History</a>-->
                                <br><br>
                                     <div class="">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr><div style="background-color: #dc3545; text-transform: uppercase; color: #fff;">Wallet History</div></tr>
                     </thead>
                      <thead>
                        <tr>
                            <th>DATE</th>
                            <th>TRANSACTION ID</th>
                            <th>TYPE</th>
                            <th>AMOUNT</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        <?php
                            while($row2 = mysqli_fetch_array($result2)){
                        ?>
                        <tr>
                            <td><?php echo $row2['date'];  ?></td>
                            <td><?php echo $row2['trans_id'];  ?></td>
                            <td><?php echo $row2['type'];  ?></td>
                            <td>
                                <?php $num = $row2['amount'];
                                      $newNum = number_format($num, 2);
                                echo  $newNum; 
                                ?>
                            </td>
                            <td><?php echo $row2['status'];  ?></td>
                            
                        
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                        </div>
                    </div>
                </center>
        </div>
    </body>
</html>
