<?php
require '../condb.php';

$T_ID = $_GET['id'];
$sql = 'SELECT * FROM training WHERE T_ID=?';
$statement = $conn->prepare($sql);
$statement->execute([$T_ID]);
$trainings = $statement->fetch(PDO::FETCH_OBJ);

$message = '';
if (isset($_POST['T_ID']) && isset($_POST['T_Name']) 
&& isset($_POST['Address']) && isset($_POST['Date']) && isset($_POST['Time'])  ){
    $T_ID = $_POST['T_ID'];
    $T_Name = $_POST['T_Name']; 
    $Address = $_POST['Address']; 
    $Date = $_POST['Date']; 
    $Time = $_POST['Time']; 
     
    $sql = "UPDATE training SET T_ID=?, T_Name=?, Address=?, Date=?, Time=? WHERE T_ID=?";
    $statement = $conn->prepare($sql);
    if($statement->execute([$T_ID, $T_Name, $Address, $Date, $Time, $T_ID]))   {
        $message = 'แก้ไขข้อมูลการอบรมสำเร็จ';
        header("Location: ../Train/show.php");
    }
}
?>

<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>

<div class="container">
  <div class = "card mt-4">
    <div class = "card-header">
    <h2>แก้ไขข้อมูลการอบรม</h2>
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
          <input value="<?= $trainings->T_ID; ?>" type="text" name="T_ID" id="T_ID" class="form-control" placeholder = 'รหัสการอบรม' pattern = "t[0-9]{3}" title = "กรุณากรอกตัวอักษร t และตัวเลข 3 หลัก" readonly ></div>
        
        <div class="form-group">
          <label for="">ชื่อการอบรม</label>
          <input value="<?= $trainings->T_Name; ?>" type="text" name="T_Name" id="T_Name" class="form-control" placeholder = 'ชื่อการอบรม' required ></div>
        
        
        <div class="form-group">
          <label for="">สถานที่</label>
          <input value="<?= $trainings->Address; ?>" type="text" name="Address" id="Address" class="form-control" placeholder = 'สถานที่' required ></div>
        
        <div class="form-group">
          <label for="">วันที่</label>
          <input value="<?= $trainings->Date; ?>" type="Date" name="Date" id="Date" class="form-control" placeholder = 'วันที่' required ></div>
       
        <div class="form-group">
          <label for="">เวลา</label>
          <input value="<?= $trainings->Time; ?>" type="text" name="Time" id="Time" class="form-control" placeholder = 'เวลา' required ></div>
        
       
       
        

        <div class="form-group">
           <button type="submit" class="btn btn-info">แก้ไขข้อมูลการอบรม</button></div>
      </form>
    </div>
  </div>
</div>

