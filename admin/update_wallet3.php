<?php
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
    session_start();
    if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    
    include_once '../includes/dbh.inc.php';
    
    include_once '../includes/delete_client.php';
    
 
    $sql = 'SELECT * FROM bcash_address';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
?>
<?php header('Content-Type: text/html; charset=utf-8'); ?> <!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Create Withdrawal and Depositors</title>
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
         <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h5 class="bg-primary py-3 pl-5 text-center" style="color: #fff; margin-bottom: 0 !important">UPDATE USDT WALLET</h5>         
                    <form action="" method="POST">
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" id="btc_address" name="btc_address" value="<?php echo $row['wallet'] ?>">
                      </div>
                         <div class="row">
                            <div class="col-12">
                                <button type="submit" name="update_btc" style="width: 100%;" class="btn btn-primary"><h5>UPDATE<h5></button>
                            </div>
                        </div>
                  </form>
                    <br><br><br>
                    <h3 class="text-center text-primary">Current LTC Wallet Address</h3>
                    <input type="text" disabled class="form-control" id="btc_address" name="btc_address" value="<?php echo $row['wallet'] ?>">
                    <?php
                        if(isset($_POST['update_btc'])) {
                            $btc_address = mysqli_real_escape_string($conn, $_POST['btc_address']);
                          
                            $update_btc = "UPDATE bcash_address SET wallet='$btc_address' WHERE id=1";
                            $show = mysqli_query($conn, $update_btc);
                            if($show) {
                                
                                header("Location: update_wallet3.php");
                                echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> LTC Wallet Successfully updated</strong><a href ='admin_cpanel.php'> Click here to return to Cpanel</a>
                                 </div>
                            </center>";

                            }
                            else {
                                echo "There is an error somewhere";
                            }
                        }

                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
