<?php
require '../condb.php';
$sql = 'SELECT * FROM participants';
$statement = $conn->prepare($sql);
$statement->execute();
$participants = $statement->fetchAll(PDO::FETCH_OBJ);
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


        <div class="container contact">	
    	<table id="Train" class="table table-bordered table-striped">   
      <h2>ข้อมูลผู้เข้าอบรม</h2>
      <a href="add.php" class='btn btn-success'>เพิ่มผู้เข้าอบรม</a>
          </div>
    	<div class="card-body">
      	<table class="table table-bordered">
        
		    <tr> <!-- ชื่อที่จะเเสดงในตาราง -->
        	<th>รหัสผู้เข้าอบรม</th>
          <th>คำนำหน้า</th>
         	<th>ชื่อ-นามสกุล</th>
          <th>หมายเลขโทรศัพท์</th>
          <th>แก้ไข/ลบ</th>
        </tr>

        <?php foreach($participants as $participantss): ?>
          <tr> <!-- สร้างชื่อให้เหมือนในฐานข้อมูล -->
            <td><?= $participantss->P_ID; ?></td> 
            <td><?= $participantss->Dir_Name; ?></td> 
            <td><?= $participantss->P_Name; ?></td> 
            <td><?= $participantss->Tell; ?></td> 
			
      <td>
              <a href="edit.php?id=<?= $participantss->P_ID ?>" class="btn btn-warning">แก้ไข</a>
              <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $participantss->P_ID ?>" class='btn btn-danger'>ลบ</a>
            </td>
          </tr>
          
        <?php endforeach; ?>
						
					



			
  </body>  
</html> 