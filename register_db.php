<?php
    session_start();
    include('condb.php');
    $errors = array();

    if (isset($POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);


        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }

        if ($password_1 != $password_2) {
            array_push($errors, "รหัสผ่านไม่ตรงกัน");
        }

        $admin_check_query = "SELECT * FROM admin  WHERE username = '$username ";
        $query = mysqli_query($conn, $admin_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { //เช็คถ้ามีUserอยู่ในระบบอยู่เเล้ว
            if ($result['username'] === $username){
                array_push($errors, "username already exists");
            }
        }

        if (count($errors) ==0){
            $password = md5($password_1);

            $sql = "INSERT INTO admin (username, password) VALUES ('$username' , '$password') ";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }


?>