<?php
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
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
<?php header('Content-Type: text/html; charset=utf-8'); ?> <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Witdrawal Request</title>
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
                <span  style="text-decoration: underline;">GO BACK</span>
            </a>
        </nav>
        
        <div>
            <br>
            <!-- Contact Message -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                         <center>
                             <a href="bitcoin_request.php" target="_self" class="btn btn-primary m-5">
                    <i class="far fa-share-square"></i>
                    View Withdrawal Request Via Bitcoin
                </a>
                             <a href="bank_request.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                    View Withdrawal Request Via Bank Transfer
                </a>
                <hr>
                <br>
            </center>
                    </div>
                </div>
            </div>
<!--            <center>
                <a href="admin_BB-register.php" target="_self" class="btn btn-primary">
                    <i class="far fa-share-square"></i>
                   REGISTER NEW USER
                </a>
                <hr>
                <br>
            </center>-->
           
        </div>
        
       
    </body>
</html>
