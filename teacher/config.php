<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','thi');

    // Kết nối SERVER
    $conn = mysqli_connect(HOST,USER,PASS,DB);
    if(!$conn){
        die("Kết nối không thành công");
    }
  




?>