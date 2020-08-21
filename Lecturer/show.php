<?php
require '../condb.php';
$sql = 'SELECT * FROM lecturer';
$statement = $conn->prepare($sql);
$statement->execute();
$lecturer = $statement->fetchAll(PDO::FETCH_OBJ);
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
      <h2>ข้อมูลวิทยากร</h2>
      <a href="add.php" class='btn btn-success'>เพิ่มวิทยากร</a>
          </div>
    	<div class="card-body">
      	<table class="table table-bordered">
        
		    <tr> <!-- ชื่อที่จะเเสดงในตาราง -->
        	<th>รหัสวิทยากร</th>
            <th>คำนำหน้า</th>
         	<th>ชื่อ-นามสกุล</th>
            <th>หมายเลขโทรศัพท์</th>
            <th>สถานที่ทำงาน</th>
            <th>แก้ไข/ลบ</th>
        </tr>

        <?php foreach($lecturer as $lecturers): ?>
          <tr> <!-- สร้างชื่อให้เหมือนในฐานข้อมูล -->
            <td><?= $lecturers->L_ID; ?></td> 
            <td><?= $lecturers->Dir_Name; ?></td> 
            <td><?= $lecturers->L_Name; ?></td> 
            <td><?= $lecturers->Tell; ?></td> 
            <td><?= $lecturers->Workplace; ?></td>             
			
            <td>
              <a href="edit.php?id=<?= $lecturers->L_ID ?>" class="btn btn-warning">แก้ไข</a>
              <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $lecturers->L_ID ?>" class='btn btn-danger'>ลบ</a>
            </td>

          </tr>
        <?php endforeach; ?>
						
					



			

  </body>  
</html> 


		