<?php
require '../condb.php';
$sql = 'SELECT * FROM training';
$statement = $conn->prepare($sql);
$statement->execute();
$training = $statement->fetchAll(PDO::FETCH_OBJ);
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

	<div class="container contact">	
    	<table id="Train" class="table table-bordered table-striped">
		<h2>ข้อมูลการอบรม</h2>
      	<a href="add.php" class='btn btn-info'>เพิ่มการอบรม</a>
   		</div>
    	<div class="card-body">
      	<table class="table table-bordered">
        
        
		<tr> <!-- ชื่อที่จะเเสดงในตาราง -->
        	<th>รหัสการอบรม</th>
         	<th>ชื่อการอบรม</th>
         	<th>สถานที่</th>
          <th>วันที่</th>
          <th>เวลา</th>
          <!-- <th>วิทยากร</th> -->
          <th>เอกสารประกอบ</th>
          <th>เพิ่มเติม</th>

		
      </tr>

      <?php foreach($training as $trainings): ?>
          <tr>
            
             <!-- สร้างใชื่อห้เหมือนในฐานข้อมูล -->
            <td><?= $trainings->T_ID; ?></td> 
            <td><?= $trainings->T_Name; ?></td> 
            <td><?= $trainings->Address; ?></td> 
            <td><?= $trainings->Date; ?></td> 
            <td><?= $trainings->Time; ?></td>    
            <!-- <td><?= $trainings->Document; ?></td> -->
            <td>
              <a href="show_name.php?id=<?= $trainings->T_ID ?>" class="btn btn-info">รายชื่อผู้เข้าอบรม</a>
               <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $trainings->T_ID ?>" class='btn btn-danger'>ลบ</a>
              <a href="edit.php?id=<?= $trainings->T_ID ?>" class='btn btn-danger'>แก้ไข</a>

          </td>
          </tr>
        <?php endforeach; ?>
      </table>
		</table>


  </body>  
</html> 


		