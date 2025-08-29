<?php
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
    include_once '../includes/dbh.inc.php';

    session_start();
    ob_start();
    
        if($_SESSION['admin_name']=="" ||$_SESSION['admin_password']=="" ){
        header("Location: admin_login.php");
    }
    $client = $_GET['client'];
    
    $sql = "SELECT * FROM user where id='$client'";
    $result = mysqli_query($conn, $sql);
        
    $row = mysqli_fetch_array($result);
?>
<?php header('Content-Type: text/html; charset=utf-8'); ?> <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Send Mail</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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
         <div class="container-fluid" style="background:#f4f4fd;">
            <br>
            <div class="row">
                <div class="col-md-12">
                <h3 style="font-size: 1.75rem;">
                    Write to User Dashboard
                    <small style="font-weight: normal!important; font-style: italic; font-family: arial; font-size: 15px!important">    -   Confidential section</small>
                </h3>
            </div>
            </div>
            <br>
            
                <div class="row">
                      <div class="col-md-6" style="height:auto">
                    <br>
                    <form method="POST" enctype="multipart/form-data" style="width: 100%;">
                        <div class="col-md-12" style="background: #007bff; border-radius: 10px;">
                            <h3 class="p-3" style="color: #fff">This message displays on the user dashboard</h3>
                            <div class="col-md-12" style="background: white; height: auto; border-radius: 10px;">
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="margin-right: 5px;"></i>
                                            Client's name
                                        </span>
                                        <span style="margin-left: 10px;"><h3><?php echo $row['first_name'] . " " . $row['last_name'];?></h3></span>
                                    </div>
                                    
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Client's mail
                                        </span>
                                    </div>
                                    <span style="margin-left: 10px;"><h3><?php echo $row['email'];?></h3></span>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Client's phone number
                                        </span>
                                    </div>
                                    <span style="margin-left: 10px;" class="bg-muted"><h3><?php echo $row['phone_no'];?></h3></span>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-slack-hash" style="margin-right: 5px;"></i>
                                            Bitcoin Balance
                                        </span>
                                    </div>
                                    <span style="margin-left: 10px;"><h3>$
                                        <?php 
                                            $bal = $row['wallet_balance'];
                                            $newB = number_format($bal, 2);
                                            echo $newB;
                                        ?>
                                        </h3></span>
                                </div>
                                <br>
                       
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope" style="margin-right: 5px;"></i>
                                            Message
                                        </span>
                                    </div>
                                    <textarea name="message" class="form-control text-primary" placeholder="write a new message" required style="margin-top: 0em; padding: 5px; height: 50px;"></textarea>
                                </div>
                                <br>
                            </div>
                            <br>
                        </div>
                           <?php
                if(isset($_POST['submit'])) {
                    
                     //$title = mysqli_real_escape_string($conn, $_POST['title']);
                     $message = mysqli_real_escape_string($conn, $_POST['message']);
                     $status="unread";
                     $t = strtotime('now');
                     $date = date('jS M, Y h:ia', $t);
                     
                   $sql_msg = "UPDATE user SET msg='$message' WHERE id='$client'";
                    $display = mysqli_query($conn, $sql_msg);
                      if ($display) {
                          header("Location: send_message.php?client=".$client);
                           echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Message successfully written to user dashboard! </strong><a href='admin_cpanel.php'> go back to cpanel </a>
                                 </div>
                        </center>";
                      }
                     
                    
                }
            
            ?>
                        <div class="text-center">
                             <button type="submit" class="btn btn-primary" name="submit" style="font-weight: bold; font-size: 24px; margin-top: 20px;">
                                Send Message
                                <i class="fas fa-share-square"></i>
                            </button>
                        </div>
                        <br>
                    </form>
                     </div>
                    <div class="col-md-6" style="height:auto">
                    <br>
                    <form method="POST" enctype="multipart/form-data" style="width: 100%;">
                        <div class="col-md-12" style="background: #007bff; border-radius: 10px;">
                              <h3 class="p-3 text-center" style="color: #fff">Make Changes</h3>
                            <div class="col-md-12" style="background: white; height: auto; border-radius: 10px;">
                                <br>
                                <h3 class="text-center">Preview Message</h3>
                                <h6 style="text-transform: capitalize" class="text-primary text-center"><?php echo $row['msg'] ?></h6>
                                <br>
                                <br>
                                <br>
                            </div>
                            <br>
                        </div>
                            <?php
                if(isset($_POST['update'])) {
                    
                     //$title = mysqli_real_escape_string($conn, $_POST['title']);
                     $message = mysqli_real_escape_string($conn, $_POST['message']);
                     $status="unread";
                     $t = strtotime('now');
                     $date = date('jS M, Y h:ia', $t);
                     
                   $sql_msg = "UPDATE user SET msg='' WHERE id='$client'";
                    $display = mysqli_query($conn, $sql_msg);
                      if ($display) {
                          header("Location: send_message.php?client=".$client);
                           echo "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> Message successfully written to user dashboard! </strong><a href='admin_cpanel.php'> go back to cpanel </a>
                                 </div>
                        </center>";
                      }
                     
                    
                }
            
            ?>
                        <div class="text-center">
                             <button type="update" class="btn btn-primary" name="submit" style="font-weight: bold; font-size: 24px; margin-top: 20px;">
                                Delete Message
                                <i class="fas fa-share-square"></i>
                            </button>
                        </div>
                        <br>
                    </form>
                     </div>
                </div>
         </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
