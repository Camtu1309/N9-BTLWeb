<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'zip' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'C:/Users/Admin/Documents/GitHub/N9-BTLWeb'; // upload directory
if(!empty($_POST['masv']) || !empty($_POST['mabt']) || $_FILES['file'])
{
$file = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_file = rand(100,1000000).$file;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_file); 
if(move_uploaded_file($tmp,$path)) 
{
echo "<file src='$path' />";
$masv = $_POST['masv'];
$mabt = $_POST['mabt'];

//insert form data in the database
$insert = $db->query("INSERT submit (file_sb,id_student,id_hw) VALUES ('".$path."','".$masv."','".$mabt."')");
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>