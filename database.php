
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "logindb";

    $conn = new mysqli($servername,$username,$password,$database);

    if(!$conn){
        echo "Db not connected!!!";
    }
    
?>