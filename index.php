<?php require('header.php');?>

<?php
    
    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>

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
            <h2>Home Page</h2>
        </div>

        <div class="content">
            
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION ['success']);
                    ?>
                    </h3>
                </div>
            <?php endif ?>

        

            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p><a href="index.php?logout='1'" style="color: red">ออกจากระบบ</a></p>
            <?php endif ?>

        </div>
    </body>  
</html> 