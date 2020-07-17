<!DOCTYPE html>
<html>
<head>
    <mete charset="utf-8"/>
    <title>Upload file</title>
</head>

<body>
    <?php
    $dbh = new PDO("mysql:host=localhost;dbname=project", "root", "");
    if(isset($_POST['btn'])){
        $name = $_FILES['myfile']['name'];
        $type = $_FILES['myfile']['type'];
        $data = file_get_contents($_FILES ['myfile']['tmp_name'] );
        $stmt = $dbh->prepare("insert into document values('',?,?,? )");
        $stmt = bindParam(1,$name);
        $stmt = bindParam(2,$type);
        $stmt = bindParam(1,$data);
        $stmt = execute();

    }
    
    ?>
    <form method="post" enctype="multipart/form-data">
        <input type= "file" name = "mefile"/>
        <button name="btn">Upload</button> 
    </form>
</body>
</html>