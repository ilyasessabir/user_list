<!-- connection with database -->

<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'crud_app';


    $conn = new mysqli($host,$username,$password,$db_name);
    if($conn->connect_error){
        echo 'connection failed' .$conn->connect_error;
    }
?>