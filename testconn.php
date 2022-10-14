<?php
    include 'dbconnect.php';
    $conn = OpenCon();
    echo "Connection Successful";
    CloseCon($conn);
?>