<?php 
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
    session_start();
    if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    
    include_once '../includes/dbh.inc.php';
    
    include_once '../includes/delete_client.php';
    
 
    $sql = 'SELECT * FROM bitcoin_request ORDER BY id DESC';
    $result = mysqli_query($conn, $sql);
    $resultChecker = mysqli_num_rows($result);
?>
<?php header('Content-Type: text/html; charset=utf-8'); ?> <!DOCTYPE html>
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
             <br><br><br>
                <center>
                    <h3> WITHDRAWAL REQUEST VIA BITCOIN </h3>
                </center>
                <div class="table-responsive">
                     <table class="table table-stripped table-bordered table-condensed" style="font-size: 14px;">
                     <thead>
                        <tr>
                            <th>S/N</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>AMOUNT</th>
                            <th>WALLET ADDRESS PROVIDED</th>
                            <th>DATE OF WITHDRAWAL REQUEST</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($resultChecker > 0) {
                                $count=1;
                                while($rows = mysqli_fetch_assoc($result)) {
                                  //$client_id = $rows['id'];
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $rows['name'] ?></td>
                            <td><?php echo $rows['email']; ?></td>
                               <td>
                                <?php
                                    $amount = $rows['amount'];
                                    $show_wallet = number_format($amount, 2);
                                echo $show_wallet;
                                        ?>
                            </td>
                            <td><?php echo $rows['wallet']; ?></td>
                            <td><?php echo $rows['date']; ?></td>
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
    </body>
</html>
