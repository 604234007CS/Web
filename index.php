<?php require('header.php');?>

<?php
    include('condb.php');

    if(isset($_POST['login_user'])){
        $username = $_POST ['username'];
        $password = $_POST['password'];
        echo $username;
        echo $password;
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $login = $stm->fetch(PDO::FETCH_ASSOC);
        echo $login['username'];
        if($login == false){
            echo 'Username & Password is invalid';
        }else{
            header('location:home.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>

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
            <h1>Login</h1>
        </div>

        <form method="post">

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>


            <div class="input-group">
                <button type="submit" name="login_user" class="btn">Login</button>
            </div>
            <p>Not yet a member? <a href="register.php">Sign Up</a></p>
            </form>

    </body>  
</html> 