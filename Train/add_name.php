<?php
require '../condb.php';
$message = '';
if (isset($_POST['T_ID']) && isset($_POST['T_Name']) && isset($_POST['Address']) && isset($_POST['Date']) && isset($_POST['Time']) ){
    $T_ID = $_POST['T_ID'];
    $T_Name = $_POST['T_Name'];
    $Address = $_POST['Address'];
    $Date = $_POST['Date']; 
    $Time = $_POST['Time'];
    
    $sql = "INSERT INTO training(T_ID, T_Name, Address, Date, Time)
    VALUES('$T_ID', '$T_Name', '$Address', '$Date', '$Time')";
    $statement = $conn->prepare($sql);
    if($statement->execute())   {
        $message = 'เพิ่มการอบรมสำเร็จ';
        header("Location: ../Train/show.php");
    }
  }
// $sql1="SELECT * FROM training order by T_ID DESC Limit 1";
// $statement = $conn->prepare($sql1);
// $statement->execute();
// $check_Id = $statement->fetch();


?>


<?php require('../header.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RegisTrain</title>

        <link rel="stylesheet" href="style.css">
    </head>
  
  <body>
        <div class="container">
            <div class="row">
        
                <div class="col-md-12">
                    <img src="../img/pic.jpg" class="img img-responsive" width="100%">
                    <!--size 980 x 200px -->
                    <?php require('menu.php');?>
                </div> 
             </div>
        </div>


    <div class="container">
      <div class = "card mt-4">
        <div class = "card-header">
        <!-- <h2>รายละเอียดการอบรม</h2> -->
        </div>
        <div class = "card-body">
        <?php if(!empty($message)): ?>
        <div class = "alert alert-success">
        <?= $message; ?>
        </div>
        <?php endif; ?>
    
          <form method="post"> 

            <div class="form-group">
              <label for="">คำนำหน้า</label>
              <input type="text" name="T_Name" id="T_Name" class="form-control" required ></div>
            
            <div class="form-group">
              <label for="">ชื่อ-นามสกุล</label>
              <input type="text" name="Address" id="Address" class="form-control" required ></div>
            
            <div class="form-group">
              <label for="">เบอร์โทรศัพท์</label>
              <input type="text" name="Address" id="Address" class="form-control" required ></div>
            
          
            <div class="form-group">
                <button type="submit" class="btn btn-info">ลงทะเบียนอบรม</button></div>
                <a href="show_name.php" class="btn btn-danger">ยกเลิก</a>

          </form>
        </div>
      </div>
    </div>

    


  </body>  
</html> 
