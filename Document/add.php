<?php
require '../condb.php';
$message = '';
if (isset($_POST['id']) && isset($_POST['name'])  && isset($_POST['file_name'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $file_name = $_FILES['file_name'];
    
    $sql = "INSERT INTO upfile(id, name, file_name )
    VALUES('$id', '$name', '$file_name')";
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

      <form action="addfile.php" method="post" entype="multipart/form-data">   

        <div class="form-group">
          <label for="name">ชื่อเอกสาร</label>
          <input type="text" name="name" id="name" class="form-control" required >
        </div>
                 
        <div class="form-group">
           <label for="file_name">เลือกไฟล์เอกสาร</label>
             <input type="file" name="fileToUpload" id="fileToUpload" accept= ".jpg, .jpeg, .png" required></from> 
        </div>

      
        <div class="form-group">
           <button type="submit" class="btn btn-info">เพิ่มเอกสาร</button></div>
          
        


      </form>
    </div>
  </div>
</div>