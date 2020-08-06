


<?php require('../header.php');?>

<!DOCTYPE html>
<html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Name</title>

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
    	<table id="Name" class="table table-bordered table-striped">
		<h2>รายชื่อผู้เข้าอบรม</h2>
      	<a href="add_name.php" class='btn btn-info'>ลงทะเบียนเข้าอบรม</a>
   		</div>
    	<div class="card-body">
      	<table class="table table-bordered">
        
        
		<tr> <!-- ชื่อที่จะเเสดงในตาราง -->
            <th>คำนำหน้า</th>
            <th>ชื่อผู้เข้าอบรม</th>
            <th>หมายเลขโทรศัพท์</th>
            <th>เพิ่มเติม</th>

         
		
      </tr>

      
             
            <!-- <td>
               <a onclick="return confirm('ต้องการลบหรือไม่?')" 
              href="delete.php?id=<?= $trainings->T_ID ?>" class='btn btn-danger'>ลบ</a>
              <a href="edit.php?id=<?= $trainings->T_ID ?>" class='btn btn-danger'>แก้ไข</a>

          </td> -->
          </tr>
      </table>
		</table>


  </body>  
</html> 


		