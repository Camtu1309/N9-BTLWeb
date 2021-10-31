<?php
include('templates/header.php')
?>
<?php
include('config/constants.php');
?>
      <div class="row nav-menu ">
      <div class="col-md-9">
      <a class="btn btn-primary m-3" href="add.php" role="button">Thêm môn bài tập</a>
</div>
          <div class="row">  
            <div class="col-md-12">
              <table class="table table-success table-striped">
                <thead>
                  <tr>
                    <th scope="col">Số TT</th>
                    <th scope="col">Tên môn</th>
                    <th scope="col">Tên giảng viên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
                <tbody>       
                  <?php
                      $sql="SELECT mamh, tenmh, tengv, email, ngaytao FROM db_monhoc";
                      $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)>0){
                      $i=1;
                      while($row = mysqli_fetch_assoc($result)){
                  ?>      
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row['tenmh']; ?></td>
                      <td><?php echo $row['tengv']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['ngaytao']; ?></td>  
                      <td><a href="http://localhost/btl/edit.php?mamh=<?php echo $row['mamh'];?>"><i class="fas fa-edit "></i></a></td>
                      <td><a href="http://localhost/btl/delete.php?mamh=<?php echo $row['mamh'];?>"><i class="fas fa-trash"></i></i></a></td>                           
                    </tr>
                <?php
                      $i++;
                    }
                  }
                ?>
                </tbody>
              </table>
            </div>                
          </div>
      </div>
<?php
include('templates/footer.php')
?>