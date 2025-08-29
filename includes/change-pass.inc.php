	<?php
                    if(isset($_POST['submit'])) {
                        require_once "dbh.inc.php";
                        require_once "functions.inc.php";
                        
                        $current_psw = mysqli_real_escape_string($conn, $_POST['oldpass']);
                        session_start();
                        $id=$_SESSION['id'];
                        // $psw=$_SESSION['psw'];
                        // echo $psw;
                        $sel = "SELECT * FROM user WHERE psw='$current_psw' AND id='$id'";
                        $result = mysqli_query($conn, $sel);
                        $resultChecker = mysqli_num_rows($result);
                        if($resultChecker < 1) {
                                header("Location: ../BB-account/changepass.php?error=wrongpassword");
                        }  else {
                            header("Location: ../BB-account/update_password.php");
                        }


                    }                              
                                       
                                               