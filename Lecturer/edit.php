<?php
require '../condb.php';

$L_ID = $_GET['id'];
$sql = 'SELECT * FROM lecturer WHERE L_ID=?';
$statement = $conn->prepare($sql);
$statement->execute([$L_ID]);
$lecturers = $statement->fetch(PDO::FETCH_OBJ);

$message = '';
if (isset($_POST['L_ID']) && isset($_POST['Dir_Name']) 
&& isset($_POST['L_Name']) && isset($_POST['L_Sname']) 
&& isset($_POST['Tell']) && isset($_POST['Workplace']) 
&& isset($_POST['Username']) && isset($_POST['Password']) ){
    $L_ID = $_POST['L_ID'];
    $Dir_Name = $_POST['Dir_Name']; 
    $L_Name = $_POST['L_Name']; 
    $L_Sname = $_POST['L_Sname']; 
    $Tell = $_POST['Tell']; 
    $Workplace = $_POST['Workplace']; 
    $Username = $_POST['Username']; 
    $Password = $_POST['Password']; 
    $sql = "UPDATE lecturer SET L_ID=?, Dir_Name=?, L_Name=?, L_Sname=?, Tell=?, Workplace=?,  Username=?, Password=? WHERE L_ID=?";
    $statement = $conn->prepare($sql);
    if($statement->execute([$L_ID, $Dir_Name, $L_Name, $L_Sname, $Tell, $Workplace, $Username, $Password, $L_ID]))   {
        $message = 'แก้ไขข้อมูลวิทยากรสำเร็จ';
        header("Location: ../Lecturer/show.php");
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
          <label for="">รหัสวิทยากร</label>
          <input value="<?= $lecturers->L_ID; ?>" type="text" name="L_ID" id="L_ID" class="form-control" placeholder = 'รหัสวิทยากร' pattern = "l[0-9]{3}" title = "กรุณากรอกตัวอักษร l และตัวเลข 3 หลัก" readonly ></div>
        
        <div class="form-group">
          <label for="">คำนำหน้า</label>
          <input value="<?= $lecturers->Dir_Name; ?>" type="text" name="Dir_Name" id="Dir_Name" class="form-control" placeholder = 'คำนำหน้า' required ></div>
        
        
        <div class="form-group">
          <label for="">ชื่อ</label>
          <input value="<?= $lecturers->L_Name; ?>" type="text" name="L_Name" id="L_Name" class="form-control" placeholder = 'ชื่อ' required ></div>
        
        <div class="form-group">
          <label for="">นามสกุล</label>
          <input value="<?= $lecturers->L_Sname; ?>" type="text" name="L_Sname" id="L_Sname" class="form-control" placeholder = 'สกุล' required ></div>
       
        <div class="form-group">
          <label for="">หมายเลขโทรศัพท์</label>
          <input value="<?= $lecturers->Tell; ?>" type="text" name="Tell" id="Tell" class="form-control" placeholder = 'หมายเลขโทรศัพท์' required ></div>
        
        <div class="form-group">
          <label for="">สถานที่ทำงาน</label>
          <input value="<?= $lecturers->Workplace; ?>" type="text" name="Workplace" id="Workplace" class="form-control" placeholder = 'สถานที่' required ></div>   
       
        <div class="form-group">
          <label for="">ชื่อผู้ใช้</label>
          <input value="<?= $lecturers->Username; ?>" type="text" name="Username" id="Username" class="form-control" placeholder = 'ชื่อผู้ใช้' required ></div>   
        
          <div class="form-group">
          <label for="">รหัสผ่าน</label>
          <input value="<?= $lecturers->Password; ?>" type="text" name="Password" id="Password" class="form-control" placeholder = 'รหัสผ่าน' required ></div>   

        <div class="form-group">
           <button type="submit" class="btn btn-info">แก้ไขข้อมูลวิทยากร</button></div>
      </form>
    </div>
  </div>
</div>

<?php require '../footer.php'; ?>