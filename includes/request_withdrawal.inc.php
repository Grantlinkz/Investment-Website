  <?php include_once '../includes/account.inc.php';
  
                if(isset($_POST['request_withdrawal'])) {
                  $name = $row['first_name'] ." " . $row['last_name'];
                  $email = $row['email'];
                  
                    $sql6 = "SELECT wallet_balance FROM user WHERE id='".$_SESSION['id']."'";
                    $result6 = mysqli_query($conn, $sql6);
                    $row6 = mysqli_fetch_array($result6);
                  
                    require_once 'dbh.inc.php';
                    require_once 'functions.inc.php';
                    
                        $withdraw_method = mysqli_real_escape_string($conn, $_POST['withdraw_method']);
                        
                        if($withdraw_method == "bitcoin") {
                   $withdraw_amt_btc = mysqli_real_escape_string($conn, $_POST['withdraw_amt']);
                                $btc_address = mysqli_real_escape_string($conn, $_POST['btc_address']);
                                
                           if($withdraw_amt_btc > $row6['wallet_balance']) {
                                                                             echo "<center>
                                                                                            <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                                                                    <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                                                                    <strong> Insufficient funds! </strong>
                                                                                             </div>
                                                                                    </center>";
                                         }
                            else {
                                 $current_time = strtotime("now");
                             $date = date("jS M, Y h:ia", $current_time);
                             
                              $sql = "INSERT INTO bitcoin_request(name, email, amount, wallet, date) VALUES(?, ?, ?, ?, ?)";
       
       
                              $stmt = mysqli_stmt_init($conn);

                            if(!mysqli_stmt_prepare($stmt, $sql)) {
                                 header("location: ../withdraw-request.php?error=statmentfailed");
                                       exit();
                            }


                            mysqli_stmt_bind_param($stmt, "ssiss", $name, $email, $withdraw_amt_btc, $btc_address, $date);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_close($stmt);
                      
                                
                                        
                                $to = "support@Swiftcotradefx.com";
                                $subject = 'Request for withdrawal via bitcoin';
                                $msg = "$name with the email address $email is requesting to make withdrawal of $withdraw_amt_btc via bitcoin payment through this wallet address provided $btc_address";
                                $headers = "From: $email";
                                                                        
                            // mail($to, $subject, $msg, $headers);
                                                                       
                            
                              require_once '../BB-account/BB-sendEmail2.php';
         
                                //send Email
                                $mailreturn = mailClient($name,$withdraw_amt_btc,$email);



                               if($mailreturn=='success') {
                                   header('location: ../BB-account/withdraw-request.php?result=success');
                            } else {
                                echo "<center>
                                           <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                   <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                   <strong> Sign Up failed! </strong>Please try again
                                            </div>
                                   </center>";
                                   header('location: ../BB-account/withdraw-request.php?result=success');
                            }

                            
                            
                            }
                               }
                        else if($withdraw_method == "bank_withdraw") {
                                $withdraw_amt = mysqli_real_escape_string($conn, $_POST['withdraw_amt']);
              
                           if($withdraw_amt > $row6['wallet_balance']) {
                                            echo "<center>
                                                           <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                                   <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                                   <strong> Insufficient funds! </strong>
                                                            </div>
                                                </center>";
                                         }
                        else {
                          $bank_name = mysqli_real_escape_string($conn, $_POST['bank_name']);
                          $bank_address = mysqli_real_escape_string($conn, $_POST['bank_address']);
                          $country = mysqli_real_escape_string($conn, $_POST['country']);
                          $routing_no = mysqli_real_escape_string($conn, $_POST['routing_no']);
                          $name;
                          $account_name = mysqli_real_escape_string($conn, $_POST['account_name']);
                          $account_no = mysqli_real_escape_string($conn, $_POST['account_no']);
                          //$ibam_no = mysqli_real_escape_string($conn, $_POST['ibam_no']);
                          $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
                          $currency = mysqli_real_escape_string($conn, $_POST['currency']);
                          $account_type = mysqli_real_escape_string($conn, $_POST['account_type']);   
                          $current_time = strtotime("now");
                          $date = date("jS M, Y h:ia", $current_time);
                
                        $sql = "INSERT into bank_request(name, email, bank_name, bank_address, account_name, acc_no, country, routing_no, mobile_no, currency, account_type, amount, date) 
                                           VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);

                        if(!mysqli_stmt_prepare($stmt, $sql)) {
                             header("location: ../withdraw-request.php?error=statmentfailed");
                                   exit();
                        }

                            mysqli_stmt_bind_param($stmt, "sssssssssssss", $name, $email, $bank_name, $bank_address, $account_name, $account_no, $country, $routing_no, $phone_no, $currency, $account_type, $withdraw_amt, $date);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_close($stmt);
                     
                    $to = "support@Swiftcotradefx.com";
                    $subject = 'Request for withdrawal via bank transfer';
                    $msg = "$name with the email address $email is requesting to make withdraw of the amount  $withdraw_amt dollars, with the bank transfer details: Bank Name: $bank_name, Bank Address: $bank_address, Country $country, Routing Number: $routing_no, Client Name:  $name, Account Name:  $account_name, Account Number: $account_no, Client phone number  $phone_no, Type of Currency to recieve withdrawal payment is $currency, and the account type of your client is $account_type";
                    $headers = "From: $email";
                                                            
            // mail($to, $subject, $msg, $headers);
                                                                       
                              require_once '../BB-account/BB-sendEmail.php';
         
                                //send Email
                                $mailreturn = mailClient($name,$bank_name,$bank_address,$withdraw_amt,$country,$routing_no,$account_name,$account_no,$phone_no,$currency,$account_type,$email);

                               if($mailreturn=='success') {
                                     header('location: ../BB-account/withdraw-request.php?result=success');
                            } else {
                                echo "<center>
                                           <div class='alert alert-danger alert-dismissible  fade show col-md-8'>
                                                   <button type='button' class='close' data-dismiss = 'alert' style='padding: 5px;'> &times</button>
                                                   <strong> Sign Up failed! </strong>Please try again
                                            </div>
                                   </center>";
                                  //  sleep(5);
                                   header('location: ../BB-account/withdraw-request.php?result=success');
                            }
                        }
                        
                                    }
                    } 
//                            $withdraw_method = mysqli_real_escape_string($conn, $_POST['withdraw_method']);
//                            $withdraw_amt = mysqli_real_escape_string($conn, $_POST['withdraw_amt']);
//                              if($withdraw_method == "bitcoin") {
//                                   $withdraw_amt;
//                                   $btc_address = mysqli_real_escape_string($conn, $_POST['btc_address']);
//                                   
//                                   echo 'bitcoin things';
//                               }
     