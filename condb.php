<?php
$dsn = 'mysql:host = localhost;dbname=project';
$username = 'root';
$password = '';
$options = [];
try{
    $connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e){
    echo 'connection.fail';
}
?>