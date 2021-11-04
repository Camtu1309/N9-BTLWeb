<?php

session_start();
include('config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<script type="text/javascript">
	$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "ajaxupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>
<div class="container">
    <h2 class="text-center mt-2">Thêm bài tập</h2>
    <form action="process-add.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6 mx-auto">

            <div class="form-group">
                <label><b>Bài tập</b></label>
                <input type="file" class="form-control" name="fileToUpload" accept="image/*">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label><b>Yêu cầu</b></label>
                <input type="text" class="form-control" name="yeucau" placeholder="Yêu cầu">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label><b>Hạn nộp</b></label>
                <input type="datetime-local" id="meeting-time" class="form-control" name="date">
                <span class="help-block"></span>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Thêm">

        </div>
    </form>
</div>
<?php include('templates/footer.php'); ?>

</html>