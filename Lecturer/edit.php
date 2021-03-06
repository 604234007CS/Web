<?php
require '../condb.php';

$L_ID = $_GET['id'];
$sql = 'SELECT * FROM lecturer WHERE L_ID=?';
$statement = $conn->prepare($sql);
$statement->execute([$L_ID]);
$lecturers = $statement->fetch(PDO::FETCH_OBJ);

$message = '';
if (isset($_POST['L_ID']) && isset($_POST['Dir_Name']) 
&& isset($_POST['L_Name']) 
&& isset($_POST['Tell']) && isset($_POST['Workplace'])  ){
    $L_ID = $_POST['L_ID'];
    $Dir_Name = $_POST['Dir_Name']; 
    $L_Name = $_POST['L_Name'];  
    $Tell = $_POST['Tell']; 
    $Workplace = $_POST['Workplace']; 
  
    $sql = "UPDATE lecturer SET L_ID=?, Dir_Name=?, L_Name=?,  Tell=?, Workplace=? WHERE L_ID=?";
    $statement = $conn->prepare($sql);
    if($statement->execute([$L_ID, $Dir_Name, $L_Name, $Tell, $Workplace, $L_ID]))   {
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
          <input value="<?= $lecturers->L_ID; ?>" type="text" name="L_ID" id="L_ID" class="form-control" placeholder = 'รหัสวิทยากร' pattern = "L[0-9]{4}" title = "กรุณากรอกตัวอักษร L และตัวเลข 4 หลัก" readonly ></div>    

         <div class="form-group"> 
            <label for="">คำนำหน้า</label>
            <select value="<?= $lecturers->Dir_Name; ?>" name="Dir_Name" id="Dir_Name" class="form-control" placeholder = 'คำนำหน้า' required >
                <option value="นาย">นาย</option>
                <option value="นางสาว">นางสาว</option>
                <option value="นาง">นาง</option>
            </select></div>

        <div class="form-group">
          <label for="">ชื่อ-นามสกุล</label>
          <input value="<?= $lecturers->L_Name; ?>" type="text" name="L_Name" id="L_Name" class="form-control" placeholder = 'ชื่อ' required ></div>
        
        <div class="form-group">
          <label for="">หมายเลขโทรศัพท์</label>
          <input value="<?= $lecturers->Tell; ?>" type="text" name="Tell" id="Tell" class="form-control" placeholder = 'หมายเลขโทรศัพท์' required ></div>
        
        <div class="form-group">
          <label for="">สถานที่ทำงาน</label>
          <input value="<?= $lecturers->Workplace; ?>" type="text" name="Workplace" id="Workplace" class="form-control" placeholder = 'สถานที่' required ></div>   
       
       
        <div class="form-group">
           <button type="submit" class="btn btn-info">แก้ไขข้อมูลวิทยากร</button></div>
           <a href="show.php" class="btn btn-danger">ยกเลิก</a>

      </form>
    </div>
  </div>
</div>

