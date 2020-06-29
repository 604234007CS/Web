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
      <h2>ข้อมูลวิทยากร</h2>
      <a href="LecturerAdd.php" class='btn btn-info'>เพิ่มวิทยากร</a>
          </div>
    	<div class="card-body">
      	<table class="table table-bordered">
        
		    <tr> <!-- ชื่อที่จะเเสดงในตาราง -->
        	<th>รหัสวิทยากร</th>
          <th>คำนำหน้า</th>
         	<th>ชื่อ</th>
         	<th>นามสกุล</th>
          <th>สถานที่ทำงาน</th>
          <th>หมายเลขโทรศัพท์</th>
          <!-- <th>อีเมล</th> -->
        </tr>

        <!-- <?php foreach($staff as $staffs): ?>
          <tr> <!-- สร้างชื่อให้เหมือนในฐานข้อมูล -->
            <td><?= $staffs->staff_id; ?></td> 
            <td><?= $staffs->staff_name; ?></td> 
            <td><?= $staffs->staff_sname; ?></td> 
            <td><?= $staffs->staff_type_name; ?></td> 
            <td><?= $staffs->address; ?></td> 
            <td><?= $staffs->phoneNumber; ?></td>    -->
            
			<td>
              <a href="edit.php?id=<?= $staffs->staff_id ?>" class="btn btn-info">แก้ไข</a>
              <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $staffs->staff_id ?>" class='btn btn-danger'>ลบ</a>
            </td>
          </tr>
        <?php endforeach; ?>
						
					



			

			<?php 
			require('footer.php');
			?>


		