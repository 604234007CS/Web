<?php
$dsn = 'mysql:host = localhost;dbname=project';
$username = 'root';
$password = '';
$options = [];
try{
    $conn = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e){
    echo 'conn.fail';
}
?>