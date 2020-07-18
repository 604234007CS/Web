<?php
require '../condb.php';

$P_ID = $_GET['id'];
$sql = 'SELECT * FROM participants WHERE P_ID=?';
$statement = $connection->prepare($sql);
$statement->execute([$P_ID]);
$participantss = $statement ->fetch(PDO::FETCH_OBJ);

$message = '';
if (isset($_POST['P_ID']) && isset($_POST['Dir_Name']) 
&& isset($_POST['P_Name']) && isset($_POST['P_Sname']) 
&& isset($_POST['Tell'])  && isset($_POST['Username']) && isset($_POST['Password']) ){
    $P_ID = $_POST['P_ID'];
    $Dir_Name = $_POST['Dir_Name'];
    $P_Name = $_POST['P_Name'];
    $P_Sname = $_POST['P_Sname']; 
    $Tell = $_POST['Tell']; 
    $Username = $_POST['Username'];
    $Password = $_POST['Password']; 
    $sql = "UPDATE participants SET P_ID=?, Dir_Name=?, P_Name=?, P_Sname=?, Tell=?, Username=?, Password=? WHERE P_ID=?";
    $statement = $connection->prepare($sql);
    if($statement->execute([$P_ID, $Dir_Name, $P_Name, $P_Sname, $Tell, $Username, $Password, $P_ID]))   {
        $message = 'แก้ไขข้อมูลผู้เข้าอบรมสำเร็จ';
        header("Location: ../participants/show.php");
    }
}
?>

<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>

<div class="container">
  <div class = "card mt-4">
    <div class = "card-header">
    <h2>แก้ไขข้อมูลวิทยากร</h2>
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
          <input value="<?= $participantss->P_ID; ?>" type="text" name="P_ID" id="P_ID" class="form-control" placeholder = 'รหัสวิทยากร' pattern = "l[0-9]{3}" title = "กรุณากรอกตัวอักษร l และตัวเลข 3 หลัก" readonly ></div>
        
        <div class="form-group">
          <label for="">คำนำหน้า</label>
          <input value="<?= $participantss->Dir_Name; ?>" type="text" name="Dir_Name" id="Dir_Name" class="form-control" placeholder = 'คำนำหน้า' required ></div>
        
        
        <div class="form-group">
          <label for="">ชื่อ</label>
          <input value="<?= $participantss->P_Name; ?>" type="text" name="P_Name" id="P_Name" class="form-control" placeholder = 'ชื่อ' required ></div>
        
        <div class="form-group">
          <label for="">นามสกุล</label>
          <input value="<?= $participantss->P_Sname; ?>" type="text" name="P_Sname" id="P_Sname" class="form-control" placeholder = 'สกุล' required ></div>
       
        <div class="form-group">
          <label for="">หมายเลขโทรศัพท์</label>
          <input value="<?= $participantss->Tell; ?>" type="text" name="Tell" id="Tell" class="form-control" placeholder = 'หมายเลขโทรศัพท์' required ></div>
       
        <div class="form-group">
          <label for="">ชื่อผู้ใช้</label>
          <input value="<?= $participantss->Username; ?>" type="text" name="Username" id="Username" class="form-control" placeholder = 'ชื่อผู้ใช้' required ></div>   
        
        <div class="form-group">
          <label for="">รหัสผ่าน</label>
          <input value="<?= $participantss->Password; ?>" type="text" name="Password" id="Password" class="form-control" placeholder = 'รหัสผ่าน' required ></div>   

        <div class="form-group">
           <button type="submit" class="btn btn-info">แก้ไขข้อมูลวิทยากร</button></div>
      </form>
    </div>
  </div>
</div>

