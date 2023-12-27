<?php

$servername = "localhost";

$username = "root";

$password = "root";



try{

    // servername and database name
    // my port no is 3307 check your's
    $conn = new PDO('mysql:host='.$servername.';dbname=wallace; charset=utf8mb4', $username, $password );


    // set the PDO error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";

}
catch(PDOException $e){

    
    echo "Your Connection failed: ".$e->getMessage();
}


?>
