<?php require('header.php');?>

<?php
    require 'condb.php';
    $message = '';
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) ){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO admin(username, email, password )
        VALUES('$username', '$email', '$password')";
        $statement = $conn->prepare($sql);
        if($statement->execute())   {
            $message = 'เพิ่มการอบรมสำเร็จ';
            header("Location: login.php");
        }

    }
    


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/pic.jpg" class="img img-responsive" width="100%">
                    <!--size 980 x 200px -->

                </div> 
             </div>
        </div>


        
        <div class="header">
            <h1>Register</h1>
        </div>

        <form method="post" action="register.php" >

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <!-- <div class="input-group">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2">
            </div> -->

            <div class="input-group">
                <button type="submit" name="register_btn" class="btn">ลงทะเบียน</button>
            </div>
            <p>Already a member? <a href="login.php">Sign in</a></p>
            </form>

    </body>  
</html> 