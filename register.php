<?php require('condb.php');?>
<?php require('header.php');?>


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
                    <?php require('menu.php');?>
                </div> 
             </div>
        </div>


        
        <div class="header">
            <h1>Register</h1>
        </div>

        <form action="register_db.php" method="post">

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>

            <div class="input-group">
                <label for="password_1">Password</label>
                <input type="password" name="password_1">
            </div>

            <div class="input-group">
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2">
            </div>

            <div class="input-group">
                <button type="submit" name="reg_user" class="btn">ลงทะเบียน</button>
            </div>
            <p>Already a member? <a href="login.php">Sign in</a></p>
            </form>

    </body>  
</html> 