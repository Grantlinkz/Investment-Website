<?php

    include_once '../includes/dbh.inc.php';

    $suspend = $_GET['suspend'];
    
    $sql = "UPDATE user SET account_status='suspended' WHERE id=$suspend";
    
    mysqli_query($conn, $sql);
    
    header("Location: ../admin/admin_cpanel.php");