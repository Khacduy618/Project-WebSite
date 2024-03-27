<?php
    $db_host = "mysql:host=localhost";
    $db_user = "root";
    $db_pass = '';
    $db_name = "dbname=dbbanhang";

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if(mysqli_connect_error()){
        echo mysqli_connect_error($conn);
        echo "ket noi ket bai! kiem tra xampp va mysql";
        exit;
    }
    echo '<h1 style="text-align: center">Connected successfully</h1>';
?>