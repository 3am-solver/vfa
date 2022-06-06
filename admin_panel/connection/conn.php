<?php
    require('config.php');
    
    // Connecting to MySql Database using MySqli 
    $con = mysqli_connect($servername, $username, $password,$dbname);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        // echo 'Successfully connected with database';
    }
?>
