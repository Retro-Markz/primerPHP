<?php
    
$sName = "localhost";
$uName = "root";
$pass = "1234";
$db_name = "todolist";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name;", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DB connected!";
}catch(PDOException $e){
    echo "Connection failed  : " . $e->getMessage();
}

?>