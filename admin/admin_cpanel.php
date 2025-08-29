<?php
    session_start();
    if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    
    include_once '../includes/dbh.inc.php';
    
    include_once '../includes/delete_client.php';
    
 
    $sql = 'SELECT * FROM user';
    $result = mysqli_query($conn, $sql);
    $resultChecker = mysqli_num_rows($result);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin C Panel</title>
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
            <a href="../index.php" class="navbar-brand"><img src="../BB/assets/images/logoIcon/logo.png" style="width: 200px; height: 64px;" alt="logo"> </a>
             <a href="admin_cpanel.php" style="color:white; text-decoration: none;">
                <i class="fas fa-home"></i> 
                <span  style="text-decoration: underline;">ADMIN SECTION</span>
            </a>
        </nav>
        
        <div>
            <br>
            <!-- Contact Message -->
            <center>
                 <a href="update_wallet.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                    UPDATE BTC WALLET ADDRESS
                </a>
               <a href="update_wallet2.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                    UPDATE ETHEREUM WALLET ADDRESS
                </a>
                           <a href="update_wallet3.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                    UPDATE LTC WALLET ADDRESS
                </a>
                <div class="mt-5">
                    <a href="withdrawal_request.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                        VIEW ALL WITHDRAWAL REQUEST
                    </a>
                </div>
                <hr>
                <br>
            </center>
<!--            <center>
                <a href="admin_BB-register.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                   REGISTER NEW USER
                </a>
                <hr>
                <br>
            </center>-->
            <div class="container-fluid">
                <a href="" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                     STATS: <?php  echo $resultChecker   ?>
                </a>
                <a href="setting.php" class="btn btn-primary" style="float:right !important; margin-left: 10px;">
                    <i class="fas fa-cogs"></i>
                    Setting
                </a>
                <a href="log_out.php" class="btn btn-danger" style="float:right !important;">
                    Log out
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <center>
                    <h3> LIST OF REGISTERED MEMBERS </h3>
                </center>
                <div class="table-responsive">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr>
                            <th>S/N</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th>EMAIL VERIFIED</th>
                            <th>REFERRED BY</th>
                            <th>BALANCE</th>
                            <th>ACCOUNT TYPE</th>
                            <th>REGISTERED</th>
                            <th>LAST LOGIN</th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACTION
                            </center>
                            </th>
                            <th style="background: red!important; color: white!important">
                            <center>
                                ACCOUNT ACTIVATION
                            </center>
                            </th>
                            <th>ACCOUNT ACTIVATION STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker > 0) {
                                $count=1;
                                while($rows = mysqli_fetch_assoc($result)) {
                                  $client_id = $rows['id'];
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $rows['last_name']. " " . $rows['first_name']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['psw']; ?></td>
                            <td><?php echo $rows['email_verified']; ?></td>
                            <td><?php echo $rows['referral']; ?></td>
                            <td>
                                <?php
                                    $wallet = $rows['wallet_balance'];
                                    $show_wallet = number_format($wallet, 2);
                                echo $show_wallet;
                                        ?>
                            </td>
                            <td><?php echo $rows['account_type']; ?> </td>
                            <td><?php echo $rows['date']?></td>
                            <td><?php echo $rows['last_login']?></td>
                            <td>  
                            <center>  
                                <a href='../includes/delete_client.php?del=<?php echo $rows['id']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a>
                                <br><br>
                                <a href='<?php echo "send_message.php?client=".$rows['id']?>' target='_self' type='button' class='btn btn-warning' style='margin-right: 5px;'><i class='fas fa-envelope'></i></a>
                                <br><br>
                                <a id="" href='<?php echo "admin-profile.php?client=".$rows['id']?>' target='_self' type='button' class='btn btn-info' style='margin-right: 5px'><i class='fas fa-pen'></i></a>
                            </center>
                            </td>   
                            <td>
                                 <center>  
                                <a href='../includes/suspend.php?suspend=<?php echo $rows['id']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'>Suspend</a>
                                <br><br>
                                <a href='../includes/active.php?active=<?php echo $rows['id']; ?>' type='button' class='btn btn-success' style='margin-right: 5px;'>Active</a>
                                </center>
                            </td>
                            <td><?php echo $rows['account_status'] ?></td>
                        </tr>
                  <?php
                  
                        $count++;
                        }
                   }
                  ?>
                    </tbody>
                </table>
                </div>
               
            </div>
        </div>
        
       
    </body>
</html>
