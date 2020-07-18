<?php
require '../condb.php';
$message = '';
if (isset($_POST['D_ID']) && isset($_POST['D_Name'])){
    $D_ID = $_POST['D_ID'];
    $D_Name = $_POST['D_Name'];
    
    $sql = "INSERT INTO document(D_ID, D_Name )
    VALUES('$D_ID', '$D_Name')";
    $statement = $conn->prepare($sql);
    if($statement->execute())   {
        $message = 'เพิ่มการอบรมสำเร็จ';
        header("Location: ../Document/show.php");
    }
}
?>


<?php require('../header.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <div class="container">
  	<div class="row">
  
    <div class="col-md-12">
        	<img src="../img/pic.jpg" class="img img-responsive" width="100%">
            <!--size 980 x 200px -->
    </div> 

   </div>
  	<div class="row">
    	<div class="col-md-12">
      <?php require('menu.php');?>
        </div>
    </div>
        </div>


        <div class="container">
  <div class = "card mt-4">
    <div class = "card-header">
    <h2>รายละเอียดข้อมูลเอกสาร</h2>
    </div>
    <div class = "card-body">
    <?php if(!empty($message)): ?>
    <div class = "alert alert-success">
    <?= $message; ?>
    </div>
    <?php endif; ?>

      <form method="post">   
      

        <div class="form-group">
          <label for="">รหัสเอกสาร</label>
          <input type="text" name="D_ID" id="D_ID" class="form-control"  pattern = "d[0-9]{3}" title = "กรุณากรอกตัวอักษร d และตัวเลข 3 หลัก" placeholder = 'กรุณากรอกตัวอักษร d และตัวเลข 3 หลัก' required ></div>
       
        <div class="form-group">
          <label for="">ชื่อเอกสาร</label>
          <input type="text" name="D_Name" id="D_Name" class="form-control" required ></div>
                 
        <div class="form-group">
           <label for="">เอกสารประกอบการอบรม</label>
           <from action="" method="post">  
             <input type="file" name="myfile"></from> 
        
      
        <div class="form-group">
           <button type="submit" class="btn btn-info">เพิ่มเอกสาร</button></div>
          
        


      </form>
    </div>
  </div>
</div>