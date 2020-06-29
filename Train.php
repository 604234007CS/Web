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

	<div class="container contact">	
    	<table id="Train" class="table table-bordered table-striped">
		<h2>ข้อมูลการอบรม</h2>
      	<a href="TrainAdd.php" class='btn btn-info'>เพิ่มการอบรม</a>
   		</div>
    	<div class="card-body">
      	<table class="table table-bordered">
        
		<tr> <!-- ชื่อที่จะเเสดงในตาราง -->
        	<th>รหัสการอบรม</th>
         	<th>ชื่อการการอบรม</th>
         	<th>วิทยากร</th>
			    <th>สถานที่</th>
          <th>วันที่</th>
          <th>เวลา</th>
			<!-- <th>เอกสารประกอบการอบรม</th> -->
      </tr>

        
      <?php foreach($training as $trainings): ?>
          <tr>
             <!-- สร้างใชื่อห้เหมือนในฐานข้อมูล -->
            <td><?= $trainings->T_ID; ?></td>      
            <td><?= $trainings->T_Name; ?></td> 
            <td><?= $trainings->Address; ?></td> 
            <td><?= $trainings->Date; ?></td> 
            <td><?= $trainings->Time; ?></td>
            
			<!-- <td>
              <a href="edit.php?id=<?= $staffs->staff_id ?>" class="btn btn-info">แก้ไข</a>
              <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $staffs->staff_id ?>" class='btn btn-danger'>ลบ</a>
            </td> -->
          </tr>
        <?php endforeach; ?>
						
					



			

			<?php 
			require('footer.php');
			?>


		