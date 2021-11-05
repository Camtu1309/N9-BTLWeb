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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

<input id="uploadImage" type="file" accept="image/*" name="image" />

<input class="btn btn-success" type="submit" value="Upload">
</form>

<div id="err"></div>

</div>
</div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
<?php
include('ajax-submit.php');
?>