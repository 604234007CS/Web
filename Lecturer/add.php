<?php
require '../condb.php';
$message = '';
if (isset($_POST['L_ID']) && isset($_POST['Dir_Name']) && isset($_POST['L_Name']) && isset($_POST['L_Sname']) && isset($_POST['Tell']) && isset($_POST['Workplace']) && isset($_POST['Username']) && isset($_POST['Password'])){
    $L_ID = $_POST['L_ID'];
    $Dir_Name = $_POST['Dir_Name'];
    $L_Name = $_POST['L_Name'];
    $L_Sname = $_POST['L_Sname']; 
    $Tell = $_POST['Tell']; 
    $Workplace = $_POST['Workplace']; 
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];  
    $sql = "INSERT INTO lecturer(L_ID, Dir_Name, L_Name, L_Sname, Tell, Workplace, Username, Password )
    VALUES('$L_ID', '$Dir_Name', '$L_Name', '$L_Sname', '$Tell', '$Workplace', '$Username', '$Password')";
    $statement = $conn->prepare($sql);
    if($statement->execute())   {
        $message = 'เพิ่มการอบรมสำเร็จ';
        header("Location: ../Lecturer/show.php");
       

    }
} 
$sql1="SELECT * FROM lecturer ";
$statement = $conn->prepare($sql1);
$statement->execute();
$lecturer = $statement->fetchAll(PDO::FETCH_OBJ);
$index = sizeof($lecturer);
echo $index;
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
    <h2>รายละเอียดข้อมูลวิทยากร</h2>
    </div>
    <div class = "card-body">
    <?php if(!empty($message)): ?>
    <div class = "alert alert-success">
    <?= $message; ?>
    </div>
    <?php endif; ?>

      <form method="post">   
      
      
        <div class="form-group">
          <label for="">รหัสวิทยากร</label>
          <?php if($index == 0){?>
          <input type="text" name="L_ID" id="L_ID" class="form-control"   value="L001" required >
          <?php }else if($index !=0){?>
            <input type="text" name="L_ID" id="L_ID" class="form-control"  
            value="<?php $i = 1+$index; $auto_id = 'L00'.$i; echo $auto_id;?>" readonly >
            <?php }?>
          </div>
          
        <div class="form-group">
          <label for="">คำนำหน้า</label>
          <input type="text" name="Dir_Name" id="Dir_Name" class="form-control"  required ></div>
         
        <div class="form-group">
          <label for="">ชื่อ</label>
          <input type="text" name="L_Name" id="L_Name" class="form-control" required ></div>
       
        <div class="form-group">
          <label for="">นามสกุล</label>
          <input type="text" name="L_Sname" id="L_Sname" class="form-control" required ></div>

        <div class="form-group">
          <label for="">หมายเลขโทรศัพท์</label>
          <input type="text" name="Tell" id="Tell" class="form-control" required ></div>

        <div class="form-group">
          <label for="">สถานที่ทำงาน</label>
          <input type="text" name="Workplace" id="Workplace" class="form-control" required ></div>
        
        <div class="form-group">
          <label for="">ชื่อผู้ใช้</label>
          <input type="text" name="Username" id="Username" class="form-control" required ></div>

        <div class="form-group">
          <label for="">รหัสผ่าน</label>
          <input type="password" name="Password" id="Password" class="form-control" required ></div>
<!-- 
        <div class="form-group">
          <label for="">รหัสการอบรม</label>
          <input type="text" name="lecturer" id="lesturer" class="form-control" required ></div>
         -->
        
      
        <div class="form-group">
        <button type="submit" class="btn btn-success">เพิ่มวิทยากร</button>
        <a href="show.php" class="btn btn-danger">ยกเลิก</a>

      </form>


    </div>
  </div>
</div>

</body>  
</html> 
