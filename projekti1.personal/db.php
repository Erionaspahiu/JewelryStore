<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // default for XAMPP
$dbname = 'jewlery';

try{

    $conn = new mysqli($host, $user, $pass, $dbname);
}

catch(mysqli_sql_exception){
    echo"could not connect!";
}

?>