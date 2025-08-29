<?php

    include_once '../includes/dbh.inc.php';

    $active = $_GET['active'];
    
    $sql = "UPDATE user SET account_status='active' WHERE id=$active";
    
    mysqli_query($conn, $sql);
    
    header("Location: ../admin/admin_cpanel.php");