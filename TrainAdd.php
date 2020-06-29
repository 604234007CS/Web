<?php
 require 'condb.php';
$message = '';
if (isset($_POST['T_ID']) && isset($_POST['T_Name']) && isset($_POST['Address']) && isset($_POST['Date']) && isset($_POST['Time'])){
    $T_ID = $_POST['T_ID'];
    $T_Name = $_POST['T_Name'];
    $Address = $_POST['Address'];
    $Date = $_POST['Date']; 
    $Time = $_POST['Time']; 
    // $product_EXP = $_POST['product_EXP']; 
    $sql = "INSERT INTO training(T_ID, T_Name, address, Date, Time)
    VALUES('$T_ID', '$T_Name', '$Address', '$Date', '$Time')";
    $statement = $connection->prepare($sql);
    if($statement->execute())   {
        $message = 'เพิ่มการอบรมสำเร็จ';
        header("Location: Train.php");
    }
}
?>




<?php require('header.php');?>

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
    <?php require('picture.php');?>
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
    <h2>รายละเอียดการอบรม</h2>
    </div>
    <div class = "card-body">
    <?php if(!empty($message)): ?>
    <div class = "alert alert-success">
    <?= $message; ?>
    </div>
    <?php endif; ?>

      <form method="post">   
      

        <div class="form-group">
          <label for="">รหัสการอบรม</label>
          <input type="text" name="train_id" id="train_id" class="form-control"  pattern = "[0-9]{5}" title = "กรุณากรอกตัวเลข 5 หลัก" placeholder = 'ป้อนตัวเลข 5 หลัก' required ></div>
       
        <div class="form-group">
          <label for="">ชื่อการการอบรม</label>
          <input type="text" name="name" id="name" class="form-control" required ></div>
       
        <div class="form-group">
          <label for="">สถานที่</label>
          <input type="text" name="address" id="address" class="form-control" required ></div>
       
        <div class="form-group">
          <label for="">วันที่</label>
          <input type="date" name="date" id="date" class="form-control" required ></div>

        <div class="form-group">
          <label for="">เวลา</label>
          <input type="text" name="time" id="time" class="form-control" required ></div>

        <!-- <div class="form-group">
          <label for="">วิทยากร</label>
          <input type="text" name="lecturer" id="lesturer" class="form-control" required ></div>
        
        <div class="form-group">
          <label for="">เอกสารประกอบการอบรม</label>
          <from action="" method="post">  
            <input type="file" name="myfile"></from> -->
        
        
        <!-- <div class="form-group">
          <label for="">นามสกุล</label>
          <input type="text" name="staff_sname" id="staff_sname" class="form-control" placeholder = 'นามสกุล' required ></div>
        <div class="form-group"> 
            <label for="">ประเภทพนักงาน</label>
            <select name="staff_type_id" id="staff_type_id" class="form-control" placeholder = 'ประเภทพนักงาน' required >
                <option value="">ประเภทพนักงาน</option>
                <option value="1">ผู้จัดการ</option>
                <option value="2">พนักงานทั่วไป</option>
                <option value="3">แม่บ้าน</option>
            </select></div>
        <div class="form-group">
          <label for="">ที่อยู่</label>
          <input type="text" name="address" id="address" class="form-control" placeholder = 'ที่อยู่' required ></div>   
        <div class="form-group">
          <label for="">หมายเลขโทรศัพท์</label>
          <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" placeholder = 'หมายเลขโทรศัพท์' required ></div>    -->
      
        <div class="form-group">
           <button type="submit" class="btn btn-info">เพิ่มการอบรม</button></div>
          
        


      </form>
    </div>
  </div>
</div>