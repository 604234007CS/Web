<?php
require '../condb.php';
$message = '';
if (isset($_POST['T_ID']) && isset($_POST['T_Name']) && isset($_POST['Address']) && isset($_POST['Date']) && isset($_POST['L_ID'])){
    $T_ID = $_POST['T_ID'];
    $T_Name = $_POST['T_Name'];
    $Address = $_POST['Address'];
    $Date = $_POST['Date']; 
    $Time = $_POST['Time'];
    $L_ID = $_POST['L_ID'];
    // $Document = $_POST['Document'];

    
    $sql = "INSERT INTO training(T_ID, T_Name, Address, Date, Time, L_ID)
    VALUES('$T_ID', '$T_Name', '$Address', '$Date', '$Time' , '$L_ID')";
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
        <title>Train</title>

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
        <h2>รายละเอียดการอบรม</h2>
        </div>
        <div class = "card-body">
        <?php if(!empty($message)): ?>
        <div class = "alert alert-success">
        <?= $message; ?>
        </div>
        <?php endif; ?>
    
          <form action="" method="post" entype="multipart/form-data"> 

          <div class="form-group">
              <label for="">รหัสการอบรม</label>
              <input type="text" name="T_ID" id="T_ID" class="form-control" pattern = "T[0-9]{4}" title = "กรุณากรอก T เเละตัวเลข 4 หลัก" placeholder = 'ป้อน T เเละตัวเลข 4 หลัก' required ></div>
          
            <div class="form-group">
              <label for="">ชื่อการอบรม</label>
              <input type="text" name="T_Name" id="T_Name" class="form-control" required ></div>
            
            <div class="form-group">
              <label for="">สถานที่</label>
              <input type="text" name="Address" id="Address" class="form-control" required ></div>
            
            <div class="form-group">
              <label for="">วันที่</label>
              <input type="date" name="Date" id="Date" class="form-control" required ></div>
    
            <div class="form-group">
              <label for="">เวลา</label>
              <input type="text" name="Time" id="Time" class="form-control" required ></div>

              <div class="form-group">
              <label for="">วิทยากร</label>
              <input type="text" name="L_ID" id="L_ID" class="form-control" required ></div>


<!-- 
            <div class="form-group">
              <label for="">เอกสารประกอบการอบรม</label>
              <input type="file" name="Document" id="Document"></div> -->
             
             
            <div class="form-group">
            <button type="submit" class="btn btn-success">เพิ่มการอบรม</button>
            <a href="show.php" class="btn btn-danger">ยกเลิก</a>


          </form>
        </div>
      </div>
    </div>

    


  </body>  
</html> 
