<head>
<link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<?php
require '../posts_connect.php';
// Up bài viết
if (isset($_POST['btn_submit'])) {
    $id_blog=isset($_GET['id_blog']);
    $tieu_de = $_POST['tieu_de'];
    $noi_dung = $_POST['noi_dung'];
    $the_loai = $_POST['the_loai'];
    $username = $_POST['username'];
    $ngay = $_POST['ngay'];
// Upload ảnh 
 
    if(isset($_FILES['anh'])){
        $image = $_FILES['anh']['name'];

        $errors= array(); //xử lý nếu có lổi xãy ra và thông báo đến người dùng
  
        $file_name = $_FILES['anh']['name'];  //Tên thực sự của file upload.
  
        $file_size = $_FILES['anh']['size']; //Kích thước của file, đo bằng byte.
  
        $file_tmp = $_FILES['anh']['tmp_name']; //file được upload vào thư mục tạm trên server.
  
        $file_type = $_FILES['anh']['type']; //MIME type của file upload.
  
        $result1=explode('.',$_FILES['anh']['name']);
        $file_ext=strtolower(end( $result1));
  
        $expensions= array("jpeg","jpg","png");
  
         if(in_array($file_ext,$expensions)=== false){
  
            $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
  
        }
  
         if($file_size > 2097152) {
  
            $errors[]='Kích thước file không được lớn hơn 2MB';
  
        }
        $sql = "INSERT INTO blog( tieu_de,noi_dung,anh,the_loai,username,ngay ) VALUES ( '$tieu_de','$noi_dung','$image' , '$the_loai', '$username', '$ngay')";

  
        if(mysqli_query($conn, $sql) && empty($errors) == true && move_uploaded_file($file_tmp,"../photo/".$file_name)) {
  
            echo '<script language="javascript">alert("Đăng bài viết thành công!");</script>';
  
        }else{
  
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");</script>';
  
        }
  
     }
}
    
?>
</table>

<table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" >Tiêu đề</th>
      <th scope="col" >Nội dung</th>
      <th scope="col" >Hình Ảnh</th>
      <th scope="col" >Thể loại</th>
      <th scope="col" >Username</th>
      <th scope="col" >Ngày đăng bài</th>
      <th scope="col" >Quản lý</th>
      <!-- <th scope="col" >Xóa</th> -->
    </tr>
  </thead>

  <tbody>
  <?php
        $sql = "SELECT * FROM blog ";

        $qr= mysqli_query($conn,$sql);
        $count = mysqli_num_rows($qr);
        $items = 3;

        $pages = ceil($count/$items); //tong so trang
        $page = isset($_GET["page"]) && $_GET["page"] >= 1 && $_GET["page"] <= $pages ? (int)$_GET["page"] : 1;

        $vitri = ($page*$items) - $items;
        $sqlPost = "SELECT * FROM blog LIMIT $vitri,$items";

        $result = mysqli_query($conn, $sqlPost);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr style='text-align: center;'>";
            echo "<td><h5>".$row['id_blog']."</h5></td>";
            echo "<td><h5 >".$row['tieu_de']."</h5></td>";
            echo "<td><p >".$row['noi_dung']."</p></td>";
            echo "<td><img src='../photo/".$row['anh']."'  width=120></td>";
            echo "<td><h5 >".$row['the_loai']."</h5></td>";
            echo "<td><h5 >".$row['username']."</h5></td>";
            echo "<td><h5 >".$row['ngay']."</h5></td>";
            echo '<td><button class="btnEdit"><a href="./posts_edit.php?id_blog='.$row['id_blog'].'">Edit</a></button>
                  <button class="btnDel"><a href="./posts_delete.php?id_blog='.$row['id_blog'].'">Delete</a></button></td>';
            echo "</tr>";
        }
        
  ?>
   
  </tbody>
</table>
<div id="menu" style=" display: inline-block; align-items:center;width:100%; padding-left:35%">
  <ul style=" list-style-type: none; ">
     <li style=" display: inline-block;    
              width: 30px;
              height: 100%;
              background-color: #878d92;
              padding-left:10px;" 
    <?php if($page == 1){
       echo " class='disable'";
     } 
     ?>>
        <a href="posts_add.php?page=<?php echo 1 ?>" style=" color:#e3e3cd; font-size: 25px;">&lsaquo;&lsaquo;</a>
     </li>
     <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:10px;"  
     <?php if($page == 1){
       echo " class='disable'";
     } 
     ?>>
         <a href="posts_add.php?page=<?php echo $page - 1 ?>" style=" color:#e3e3cd; font-size: 25px;">&lsaquo;</a> 
    </li>

     <?php
        for($i=1; $i<= $pages; $i++){
          if($page == $i){
          
       ?>
           <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:5px;"  >
                <a href="posts_add.php?page=<?php echo $i;?>" style=" color:#73101d; font-weight: bold; font-size: 25px;">
                  <?php echo $i; ?>
                </a> 
          </li>
       <?php
          }
          else{
       ?>
          <li style=" display: inline-block;  
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:5px;" >
              <a href="posts_add.php?page=<?php echo $i;?>" style=" color:#e3e3cd ;font-size: 25px;" >
                <?php echo $i; ?>
              </a> 
        </li>
      <?php   
          } // end if...else 
        } //end for

     ?>

     <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:10px;" 
     <?php if($page == $pages){
       echo " class='disable'";
     } 
     ?>>
        <a href="posts_add.php?page=<?php echo $page + 1 ?>" style=" color:#e3e3cd;font-size: 25px; ">
          <span>&rsaquo;</span>
        </a> 
    </li>
      <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:5px;" 
      <?php if($page == $pages){
       echo " class='disable'";
     } 
     ?>>
        <a href="posts_add.php?page=<?php echo $pages ?>" style=" color:#e3e3cd;font-size: 25px; "><span>&rsaquo;&rsaquo;</span>
        </a> 
      </li>

  </ul>
</div>
</body>
</html>