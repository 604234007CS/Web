<?php
require '../condb.php';

$P_ID = $_GET['id'];
$sql = 'SELECT * FROM participants WHERE P_ID=?';
$statement = $conn->prepare($sql);
$statement->execute([$P_ID]);
$participantss = $statement->fetch(PDO::FETCH_OBJ);

$message = '';
if (isset($_POST['P_ID']) && isset($_POST['Dir_Name']) 
&& isset($_POST['P_Name']) && isset($_POST['Tell'])  ){
    $P_ID = $_POST['P_ID'];
    $Dir_Name = $_POST['Dir_Name']; 
    $P_Name = $_POST['P_Name'];  
    $Tell = $_POST['Tell']; 
   
    $sql = "UPDATE participants SET P_ID=?, Dir_Name=?, P_Name=?,  Tell=? WHERE P_ID=?";
    $statement = $conn->prepare($sql);
    if($statement->execute([$P_ID, $Dir_Name, $P_Name, $Tell, $P_ID]))   {
        $message = 'แก้ไขข้อมูลวิทยากรสำเร็จ';
        header("Location: ../participants/show.php");
    }
}
?>

<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>

<div class="container">
  <div class = "card mt-4">
    <div class = "card-header">
    <h2>แก้ไขข้อมูลผู้เข้าอบรม</h2>
    </div>
    <div class = "card-body">
    <?php if(!empty($message)): ?>
    <div class = "alert alert-success">
    <?= $message; ?>
    </div>
    <?php endif; ?>

      <form method="post">        
        <div class="form-group">
            <label for="">รหัสผู้เข้าอรบม</label>
            <input value="<?= $participantss->P_ID; ?>" type="text" name="P_ID" id="P_ID" class="form-control" placeholder = 'รหัสวิทยากร' pattern = "P[0-9]{4}" title = "กรุณากรอกตัวอักษร P และตัวเลข 4 หลัก" readonly ></div>
          

         <div class="form-group"> 
            <label for="">คำนำหน้า</label>
            <select value="<?= $participants->Dir_Name; ?>" name="Dir_Name" id="Dir_Name" class="form-control" placeholder = 'คำนำหน้า' required >
                <option value="นาย">นาย</option>
                <option value="นางสาว">นางสาว</option>
                <option value="นาง">นาง</option>
            </select></div>

        <div class="form-group">
          <label for="">ชื่อ-นามสกุล</label>
          <input value="<?= $participantss->P_Name; ?>" type="text" name="P_Name" id="P_Name" class="form-control" placeholder = 'ชื่อ-นามสกุล' required ></div>
        
          <div class="form-group">
          <label for="">หมายเลขโทรศัพท์</label>
          <input value="<?= $participantss->Tell; ?>" type="text" name="Tell" id="Tell" class="form-control" placeholder = 'หมายเลขโทรศัพท์' required ></div>
        
        
        <div class="form-group">
           <button type="submit" class="btn btn-info">แก้ไขข้อมูลวิทยากร</button></div>
           <a href="show.php" class="btn btn-danger">ยกเลิก</a>

      </form>
    </div>
  </div>
</div>

