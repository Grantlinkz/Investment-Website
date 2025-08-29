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
            <h3 class="text-center">ADD LATEST DEPOSITORS & WITHDRAWALS</h3>
            
            <div class="row">
                <div class="col-md-6">
                    <h5 class="bg-primary py-3 pl-5" style="color: #fff; margin-bottom: 0 !important">LATEST DEPOSITORS</h5>         
                    <form action="" method="POST">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Investor</th>
                          <th>Country</th>
                          <th>Amount</th>
                          <th>Payment Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td><input type="date" name="date" required class="form-control"></td>
                            <td><input type="text" name="name" required class="form-control" placeholder="name"></td>
                            <td><input type="text" name="country" required class="form-control" placeholder="country"></td>
                            <td><input type="text" name="amount" required class="form-control" placeholder="amount"></td>
                          <td>
                              <select class="form-control" name="crypto">
                                  <option>Bitcoin</option>
                                  <option>Cash</option>
                              </select>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                         <div class="row">
                        <div class="col-12">
                            <button type="submit" name="depositor" style="width: 100%;" class="btn btn-primary">Add Latest Depositor</button>
                        </div>
                    </div>
                  </form>
                    <?php 
                        if(isset($_POST['depositor'])) {
                            $date = mysqli_real_escape_string($conn, $_POST['date']);
                            $name = mysqli_real_escape_string($conn,  $_POST['name']);
                            $country = mysqli_real_escape_string($conn,  $_POST['country']);
                            $amount = mysqli_real_escape_string($conn,  $_POST['amount']);
                            $crypto = mysqli_real_escape_string($conn,  $_POST['crypto']);
                            $status = "deposit";
                            
                            $deposit = "INSERT INTO chart(date, name, country, amount, crypto, status) VALUES('$date', '$name', '$country', '$amount', '$crypto', '$status')";
                            $query_deposit = mysqli_query($conn, $deposit);
                            
                            if($query_deposit) {
                               echo  "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong>Latest Depositor Successfully Addded </strong>
                                 </div>
                        </center>";
                            }
                            
                            else {
                            echo     "<center>
                                <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> failed! </strong>Please try again
                                 </div>
                        </center>";
                            }
                        }
                    
                    ?>
                </div>
                <div class="col-md-6">
                    <h5 class="bg-success py-3 pl-5" style="color: #fff; margin-bottom: 0 !important">LATEST WITHDRAWALS</h5>
                       <form action="" method="POST">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Investor</th>
                          <th>Country</th>
                          <th>Amount</th>
                          <th>Payment Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td><input type="date" name="date" required class="form-control"></td>
                            <td><input type="text" name="name" required class="form-control" placeholder="name"></td>
                            <td><input type="text" name="country" required class="form-control" placeholder="country"></td>
                            <td><input type="text" name="amount" required class="form-control" placeholder="amount"></td>
                          <td>
                              <select class="form-control" name="crypto">
                                  <option>Bitcoin</option>
                                  <option>Cash</option>
                              </select>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                         <div class="row">
                        <div class="col-12">
                            <button type="submit" name="withdrawal" style="width: 100%;" class="btn btn-primary">Add Latest Withdrawal</button>
                        </div>
                    </div>
                  </form>
                    <?php 
                        if(isset($_POST['withdrawal'])) {
                            $date = mysqli_real_escape_string($conn, $_POST['date']);
                            $name = mysqli_real_escape_string($conn,  $_POST['name']);
                            $country = mysqli_real_escape_string($conn,  $_POST['country']);
                            $amount = mysqli_real_escape_string($conn,  $_POST['amount']);
                            $crypto = mysqli_real_escape_string($conn,  $_POST['crypto']);
                            $status = "withdraw";
                            
                            $deposit = "INSERT INTO chart(date, name, country, amount, crypto, status) VALUES('$date', '$name', '$country', '$amount', '$crypto', '$status')";
                            $query_deposit = mysqli_query($conn, $deposit);
                            
                            if($query_deposit) {
                               echo  "<center>
                                <div class='alert alert-success alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong>Latest Withdrawal Successfully Addded </strong>
                                 </div>
                        </center>";
                            }
                            
                            else {
                            echo     "<center>
                                <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                        <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                        <strong> failed! </strong>Please try again
                                 </div>
                        </center>";
                            }
                        }
                    
                    ?>
                </div>
            </div>
        </div>
           <div class="container-fluid mt-5">
            <h3 class="text-center">DELETE LATEST DEPOSITORS & WITHDRAWALS</h3>
            
            <div class="row">
                <div class="col-md-6">
                    <h5 class="bg-primary py-3 pl-5" style="color: #fff; margin-bottom: 0 !important">LATEST DEPOSITORS</h5>         
                      <?php
                     $depositor = "SELECT * FROM chart WHERE status='deposit'";
                    $query = mysqli_query($conn, $depositor);
                    $result4 = mysqli_num_rows($query);
                ?>
                    <table class="table table-striped" style="width: 100%">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Investor</th>
                          <th>Country</th>
                          <th>Amount</th>
                          <th>Payment Type</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            if($result4 > 0) {
                                $count=1;
                                while($rows = mysqli_fetch_assoc($query)) {
//                                  $client_id = $rows['id'];
                        ?>
                        <tr>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['date'] ?>"></td>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['name'] ?>"></td>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['country'] ?>"></td>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['amount'] ?>"></td>
                            <td><input type="text" class="form-control" disabled value="<?php echo $rows['crypto'] ?>"></td>
                            <td> <a href='../includes/delete_chart.php?del=<?php echo $rows['ID']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a></td>
                        </tr>
                         <?php
                  
                        $count++;
                        }
                   }
                  ?>
                      </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h5 class="bg-primary py-3 pl-5" style="color: #fff; margin-bottom: 0 !important">LATEST WITHDRAWAL</h5>         
                      <?php
                     $depositor = "SELECT * FROM chart WHERE status='withdraw'";
                    $query = mysqli_query($conn, $depositor);
                    $result4 = mysqli_num_rows($query);
                ?>
                    <table class="table table-striped" style="width: 100%">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Investor</th>
                          <th>Country</th>
                          <th>Amount</th>
                          <th>Payment Type</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            if($result4 > 0) {
                                $count=1;
                                while($rows = mysqli_fetch_assoc($query)) {
//                                  $client_id = $rows['id'];
                        ?>
                        <tr>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['date'] ?>"></td>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['name'] ?>"></td>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['country'] ?>"></td>
                            <td><input type="text" disabled class="form-control" value="<?php echo $rows['amount'] ?>"></td>
                            <td><input type="text" class="form-control" disabled value="<?php echo $rows['crypto'] ?>"></td>
                            <td> <a href='../includes/delete_chart.php?del=<?php echo $rows['ID']; ?>' type='button' class='btn btn-danger' style='margin-right: 5px;'><i class='fas fa-trash-alt'></i></a></td>
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
