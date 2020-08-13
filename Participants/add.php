
<?php
require '../condb.php';
$message = '';
if (isset($_POST['P_ID']) && isset($_POST['Dir_Name']) && isset($_POST['P_Name']) 
&& isset($_POST['Tell'])  && isset($_POST['Username']) && isset($_POST['Password'])){
    $P_ID = $_POST['P_ID'];
    $Dir_Name = $_POST['Dir_Name'];
    $P_Name = $_POST['P_Name'];
    $Tell = $_POST['Tell']; 
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];  
    $sql = "INSERT INTO participants(P_ID, Dir_Name, P_Name, Tell, Username, Password )
    VALUES('$P_ID', '$Dir_Name', '$P_Name', '$Tell', '$Username', '$Password')";
    $statement = $conn->prepare($sql);
    if($statement->execute())   {
        $message = 'เพิ่มผู้เข้าอบรมสำเร็จ';
        header("Location: ../Participants/show.php");
    }
}

// $sql1="SELECT * FROM participants ";
// $statement = $conn->prepare($sql1);
// $statement->execute();
// $participants = $statement->fetchAll(PDO::FETCH_OBJ);
// $index = sizeof($participants);
// echo $index;
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
        <h2>รายละเอียดข้อมูลผู้เข้าอบรม</h2>
        </div>
        <div class = "card-body">
        <?php if(!empty($message)): ?>
        <div class = "alert alert-success">
        <?= $message; ?>
        </div>
        <?php endif; ?>

          <form method="post">   
          

          

              <div class="form-group">
              <label for="">รหัสผู้เข้าอบรม</label>
              <input type="text" name="P_ID" id="P_ID" class="form-control" pattern = "P[0-9]{4}" title = "กรุณากรอก P เเละตัวเลข 4 หลัก" placeholder = 'ป้อน P เเละตัวเลข 4 หลัก' required  ></div>
          
           
            <div class="form-group"> 
              <label for="">คำนำหน้า</label>
              <select name="Dir_Name" id="Dir_Name" class="form-control" placeholder = 'คำนำหน้า' required >
                  <option value="นาย">นาย</option>
                  <option value="นางสาว">นางสาว</option>
                  <option value="นาง">นาง</option>
              </select>
            </div>


            <div class="form-group">
              <label for="">ชื่อ-นามสกุล</label>
              <input type="text" name="P_Name" id="P_Name" class="form-control" required ></div>

            <div class="form-group">
              <label for="">หมายเลขโทรศัพท์</label>
              <input type="text" name="Tell" id="Tell" class="form-control" required ></div>

            <div class="form-group">
              <label for="">ชื่อผู้ใช้</label>
              <input type="text" name="Username" id="Username" class="form-control" required ></div>

            <div class="form-group">
              <label for="">รหัสผ่าน</label>
              <input type="password" name="Password" id="Password" class="form-control" required ></div>

          
            <div class="form-group">
              <button type="submit" class="btn btn-info">เพิ่มผู้เข้าอบรม</button></div>
              <a href="show.php" class="btn btn-danger">ยกเลิก</a>



          </form>
        </div>
      </div>
    </div>

  </body>  
</html> 