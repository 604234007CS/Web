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
       
         <div class="form-group">
            <button type="submit" class="btn btn-info">เพิ่มการอบรม</button></div>
           
         
 
 
       </form>
     </div>
   </div>
 </div>