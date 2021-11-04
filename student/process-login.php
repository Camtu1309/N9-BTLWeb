<?php
    session_start();
    $email      = $_POST['email'];
    $pass       = $_POST['pass'];

    // QUY TRÌNH 4 bước:
    // Bước 01:
    include('config.php');

    // Bước 02: Xử lý truy vấn
    $sql = "SELECT * FROM users_student WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        // Lấy mật khẩu ra
        $row=mysqli_fetch_assoc($result);
        $pass_hash = $row['password'];
        
        if(password_verify($pass,$pass_hash)){
            $_SESSION['login_ok'] = $email;
            header("Location:trangchu2.php");
        }else{
            
           
            header("Location:login.php");
            
        }
    }else{
        
        echo "Đăng nhập không thành công ";
        header("Location:login.php");
        
    }

?>