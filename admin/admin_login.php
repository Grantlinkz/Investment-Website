<?php
setcookie("user", "user-login", time() + 3600, "/", "Swiftcotradefx.com", true, true);
header('Content-Type: text/html; charset=utf-8'); 
    ob_start();
    
?>
<?php header('Content-Type: text/html; charset=utf-8'); ?> <!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <title> Admin Log in</title>
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
        
        .container {
            padding: 16px;
            width: 70%;
            height: auto;
            margin: 0px auto;
        }
        
        h2 {
            text-transform: uppercase;
            margin-top: 0;
            font-size: 2rem;
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }
        
        .imgContainer {
           text-align: center;
           margin: 10px auto;
           width: 20%;
           height: 30%
        }
        
        form {
            border: 3px solid #f1f1f1;
        }
        
        label {
            margin: 0;
            display: inline-block;
            margin-bottom: .5rem;
        }
        img {
            min-width: 100%;
            max-height: 100%;
        }
        
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }       
        
        button {
       
            margin: 8px 0;
          
            width: 100%;
      
        }
        </style>
    </head>
    
    <body>
    
       
      
           
        <section class="container">
                <h2 class="text-center">Admin Log in</h2>
          
                <form method="POST" action="../includes/admin_login.inc.php">
                    <div class="imgContainer">
                        <img class="img-responsive img-fluid" src="../images/login_key.png" alt="admin login" class="avatar">
                    </div>
                          
            <?php 
            if(isset($_GET["error"])) {if($_GET['error'] == "invalidlogins") {
                
                echo "<center>
                                <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong>Wrong Login Details</strong>
                                 </div>
                            </center>";
                
            } 
                
            }
                ?>
                    <div class="container">
                        <div class="form-group">
                          <label for="user_name"><b>Username:</b></label>
                          <input id="user_name" name="admin_name" type="text" placeholder="Enter Username" required>
                        </div>
                         <div class="form-group">
                          <label for="psw"><b>Password:</b></label>
                          <input id="psw" type="password" name="admin_password" placeholder="Enter Password" required>
                        </div>
                    
                       
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </form>
              
        </section>
        
        
      
    </body>
</html>
