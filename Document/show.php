<?php
require '../condb.php';
$sql = 'SELECT * FROM document';
$statement = $conn->prepare($sql);
$statement->execute();
$document = $statement->fetchAll(PDO::FETCH_OBJ);
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
    	<table id="document" class="table table-bordered table-striped">
      <h2>ข้อมูลเอกสาร</h2>
      <a href="add.php" class='btn btn-success'>เพิ่มเอกสาร</a>
          </div>
    	<div class="card-body">
      	<table class="table table-bordered">
        
		    <tr> <!-- ชื่อที่จะเเสดงในตาราง -->
        	<th>รหัสเอกสาร</th>
            <th>ชื่อเอกสาร</th>
            <th>เอกสาร</th>
            <th>เพิ่มเติม</th>

        </tr>

        <?php foreach($document as $documents): ?>
          <tr> <!-- สร้างชื่อให้เหมือนในฐานข้อมูล -->
            <td><?= $documents->D_ID; ?></td> 
            <td><?= $documents->D_Name; ?></td> 
            <td><?= $documents->D_Doc; ?></td> 

			
      <td>
              <a href="edit.php?id=<?= $documents->D_ID ?>" class="btn btn-info">แก้ไข</a>
              <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $documents->D_ID ?>" class='btn btn-danger'>ลบ</a>
            </td>
          </tr>
        <?php endforeach; ?>
						
					
  </body>  
</html> 



			

			


		