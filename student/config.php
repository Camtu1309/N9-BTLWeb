<?php
#Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                        #B1 kết nối với CSDL
                        $conn=mysqli_connect('localhost','root','','thi');            
                        mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                        if(!$conn){
                            die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                        }

?>