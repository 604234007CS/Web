<?php
    require_once 'db.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT username, password, admin_name FROM staff WHERE username=? AND password=?";
    $statement=$connection->prepare($sql);
    $statement->execute([$username, $password]);
    $username=$statement->fetch();
    $admin_name=$username['admin_name'];
    
    if(isset($admin_name)){
      session_start();
      $_SESSION['admin_name']=$staff_name;
     
          header("Location:index.php");
      }else{
          header("Location:index.php");
      }
      ?>
