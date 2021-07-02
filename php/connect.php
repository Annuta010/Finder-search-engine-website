<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "finder";

    if (!$con = mysqli_connect($host, $user, $pass, $dbname)) 
    {
        die("failed to connect");
    }
?>