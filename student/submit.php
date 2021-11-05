<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'manage_support';
//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_error){
   die("Unable to connect database: " . $db->connect_error);
}
?>
<!doctype html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>Nộp bài tập</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">

<div class="col-md-8">

<h1 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px">NỘP BÀI TẬP</h1>

<hr> 
<form id="form" action="ajax-submit.php" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="masv">Mã sinh viên</label>
<input type="text" class="form-control" id="masv" name="masv" placeholder="Enter masv" required />
</div>

<div class="form-group">
<label for="mabt">Mã bài tập</label>
<input type="text" class="form-control" id="mabt" name="mabt" placeholder="Enter mabt" required />
</div>

<input style="margin-top:50px" id="uploadfile" type="file" accept="file/*" name="file" />

<input class="btn btn-success" type="submit" value="NỘP BÀI">
</form>

<div id="err"></div>

</div>
</div>
</div>

<div class="footer" style="height:300px;background-color:  #3c5ca5; margin-top:50px">
                <div class="container">
                    <h4 style="padding-top:50px; color:#fff">AZOTA.VN - THẬT ĐƠN GIẢN ĐỂ GIAO BÀI TẬP, THI ONLINE</h4>
                    <p style="padding-top:30px; color:#fff">
                        <i class="fas fa-home"></i>
                        Tầng 9, Tòa nhà Zodiac Số 1 Ngõ 19 Duy Tân, quận Cầu Giấy, Hà Nội.
                    </p>
                    <p style=" color:#fff">
                        <i class="fas fa-envelope"></i>
                        Email: lienhe.azota@gmail.com
                    </p>
                    <p style=" color:#fff">
                        <i class="fas fa-globe"></i>
                        <a href=""style="color: #fff;">Website: https://azota.vn</a>
                    </p>
                </div>
            </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
<?php
include('ajax-submit.php');
?>