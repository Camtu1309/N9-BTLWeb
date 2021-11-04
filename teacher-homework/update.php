<?php
include('templates/header.php')
?>
<?php
// if (!isset($_GET['id_hw'])) echo 'Error';
// $id_hw = $_GET['id_hw'];
// $query = "SELECT * FROM give_hw where id_hw = '$id_hw'";
// $result = mysqli_query($conn, $query);
// $recipient = mysqli_fetch_assoc($result);
// $name_hw = $recipient['name_hw'];
// $require_hw = $recipient['require_hw'];
// $time_ex = $recipient['time_ex'];

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     $name_hw = $_POST['name'];
//     $require_hw = $_POST['require'];
//     $time_ex = $_POST['date'];

//     $sql = "UPDATE give_hw set name_hw='$name_hw', require='$require_hw', time_ex='$time_ex' where id_hw = '$id_hw'";
//     $res = mysqli_query($conn, $sql);
//     if ($res) {
//         header("location: exercise.php");
//     } else {
//         echo 'Not update';
//     }
// }



?>
<?php
// $id_hw=$name_hw = $require_hw = $time_st = $time_ex  = "";
// $name_hw_err = $require_hw_err = $time_st_err = $time_ex_err  = "";
// if (isset($_POST['id_hw']) && empty($_POST["id_hw"])) {
//     $id_hw = $_POST["id_hw"];
//     $input_name = trim($_POST["name"]);
//     if(empty($input_name)){
//         $name_hw_err = "Hãy nhập tên bài tập";
//     }
//     else{
//         $name_hw = $input_file;
//     }
//     $input_require_hw = trim($_POST["require"]);
//     if (empty($input_require_hw)) {
//         $require_err = "Hãy nhập yêu cầu";
//     } else {
//         $require_hw = $input_require_hw;
//     }
//     $input_time_ex = trim($_POST["date"]);
//     if (empty($input_time_ex)) {
//         $time_ex_err = "Hãy nhập hạn nộp";
//     } else {
//         $time_ex = $input_time_ex;
//     }
//     if (empty($name_hw_err) && empty($require_hw_err) && empty($time_ex_err)) {
//         $sql = "UPDATE give_hw set name_hw='$name_hw', require='$require', time_ex='$time_ex' where id_hw = '$id_hw'";
//         if ($stmt = mysqli_prepare($conn, $sql)) {
//             mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_require, $param_time_st, $param_time_ex, $param_id_hw);
//             $param_name = $name_hw;
//             $param_require = $require_hw;
//             $param_time_st = $time_st;
//             $param_time_ex = $time_ex;
//             $param_id_hw = $id_hw;
//             if (mysqli_stmt_execute($stmt)) {
//                 header("location: exercise.php");
//                 exit();
//             } else {
//                 echo "Sửa thất bại";
//             }
//         }
//     }
//     mysqli_close($conn);
// } else {
//     if (isset($_GET["id_hw"]) && !empty(trim($_GET["id_hw"]))) {
//         $id_hw = trim($_GET["id_hw"]);
//         $sql = "SELECT * FROM give_hw WHERE id_hw = ?";
//         if ($stmt = mysqli_prepare($conn, $sql)) {
//             mysqli_stmt_bind_param($stmt, "i", $param_id_hw);
//             $param_id_hw = $id_hw;
//             if (mysqli_stmt_execute($stmt)) {
//                 $result = mysqli_stmt_get_result($stmt);
//                 if (mysqli_num_rows($result) == 1) {
//                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//                     $name_hw = $row["name_hw"];
//                     $require_hw = $row["require_hw"];
//                     $time_st = $row["time_st"];
//                     $time_ex = $row["time_ex"];
//                 }
//             } else {
//                 header("location: exercise.php");
//                 exit();
//             }
//         }
//     }
//     mysqli_close($conn);
// }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<div class="main-content">
    <div class="wrapper">
        <div class="alert alert-success text-center" role="alert">
        <h1 style="text-align: center; font-weight: 500; color:#3c5ca5;margin-top:50px; margin-bottom: 50px">SỬA BÀI TẬP</h1>
        </div>
        <div class="container col-md-12 mx-auto">
            <form action="process-update.php" METHOD="POST" >
                <div class="col-md-6 mx-auto">
                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Bài tập</span>
                        <input type="text" class="form-control" name="name" placeholder="Tên bài tập" id= "input-group-text col-3">
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Yêu cầu</span>
                        <input type="text" class="form-control" name="require"  placeholder="Yêu cầu"  id= "input-group-text col-3">
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Hạn nộp</span>
                        <input type="datetime-local" id="meeting-time" class="form-control" name="date" value = "<?php echo $row['time_ex'];?>" placeholder="Nhập hạn nộp bài"  id= "input-group-text col-3">
                    </div>
                    <button type="submit" class="btn btn-info" name="submit">Sửa</button>

                </div>
            </form>

        </div>
    </div>
</div>
<?php
include('templates/footer.php');
?>