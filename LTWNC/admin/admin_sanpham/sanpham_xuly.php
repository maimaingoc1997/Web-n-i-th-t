<head>
<link rel="stylesheet" href="../../css/style.css"/>
</head>
<body>

<?php
require '../posts_connect.php';
// Up bài viết
if (isset($_POST['btn_submit'])) {
  $id_sanpham=isset($_GET['id_sanpham']);
  $ten_danhmuc = $_POST['ten_danhmuc'];
  $ten_sanpham = $_POST['ten_sanpham'];
  $mota_sanpham = $_POST['mota_sanpham'];
  $tonkho_sanpham = $_POST['tonkho_sanpham'];
  $gia_sanpham = $_POST['gia_sanpham'];
  
  if(isset($_FILES['anh_sanpham'])){
    $anh_sanpham = $_FILES['anh_sanpham']['name'];
    $errors= array(); //xử lý nếu có lổi xãy ra và thông báo đến người dùng
    $file_name = $_FILES['anh_sanpham']['name'];  //Tên thực sự của file upload.
    $file_size = $_FILES['anh_sanpham']['size']; //Kích thước của file, đo bằng byte.
    $file_tmp = $_FILES['anh_sanpham']['tmp_name']; //file được upload vào thư mục tạm trên server.
    $file_type = $_FILES['anh_sanpham']['type']; //MIME type của file upload.
    //anh2,3
    $hinhanh1 = $_FILES['hinhanh1']['name'];
    $hinhanh_tmp1 = $_FILES['hinhanh1']['tmp_name'];
    $hinhanh2 = $_FILES['hinhanh2']['name'];
    $hinhanh_tmp2 = $_FILES['hinhanh2']['tmp_name'];

    $result1=explode('.',$_FILES['anh_sanpham']['name']); 

    $file_ext=strtolower(end( $result1));
    $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){

        $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";

    }

     if($file_size > 2097152) {

        $errors[]='Kích thước file không được lớn hơn 2MB';

    }
        $sql = "INSERT INTO tbl_sanpham( id_danhmuc,ten_sanpham,mota_sanpham,tonkho_sanpham,gia_sanpham ,anh_sanpham, anh_sanpham1, anh_sanpham2) 
                VALUES ( '$ten_danhmuc','$ten_sanpham','$mota_sanpham','$tonkho_sanpham','$gia_sanpham','$anh_sanpham','$hinhanh1','$hinhanh2')";

  
        if(mysqli_query($conn, $sql) && empty($errors)==true 
         && move_uploaded_file($file_tmp,"../photo/".$file_name) 
         && move_uploaded_file($hinhanh_tmp1,"../photo/".$hinhanh1)
         && move_uploaded_file($hinhanh_tmp2,"../photo/".$hinhanh2)) {
  
            echo '<script language="javascript">alert("Thêm sản phẩm thành công!");</script>';
  
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
      <th scope="col" >ID sản phẩm</th>
      <th scope="col" >ID danh mục</th>
      <th scope="col" >Tên sản phẩm</th>
      <th scope="col" >Đơn giá</th>
      <th scope="col" >Mô tả sản phẩm</th>
      <th scope="col" >Ảnh</th>
      <th scope="col" >Số lượng</th>      
      <th scope="col" >Quản lý</th>
      
    </tr>
  </thead>

  <tbody>
  <?php
        $sql = "SELECT * FROM tbl_sanpham ";
        $qr= mysqli_query($conn,$sql);
        $count = mysqli_num_rows($qr);
        $items = 5;

        $pages = ceil($count/$items); //tong so trang
        $page = isset($_GET["page"]) && $_GET["page"] >= 1 && $_GET["page"] <= $pages ? (int)$_GET["page"] : 1;

        $vitri = ($page*$items) - $items;
        $sqlSP = "SELECT * FROM tbl_sanpham LIMIT $vitri,$items";
        $result = mysqli_query($conn, $sqlSP);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr style='text-align: center;'>";
            echo "<td><h5>".$row['id_sanpham']."</h5></td>";
            echo "<td><h5>".$row['id_danhmuc']."</h5></td>";
            echo "<td><h5 >".$row['ten_sanpham']."</h5></td>";
            echo "<td><h5 >".$row['gia_sanpham']."</h5></td>";
            echo "<td><h5 >".$row['mota_sanpham']."</h5></td>";
            echo "<td><img src='../photo/".$row['anh_sanpham']."' width=120></td>";
            echo "<td><h5 >".$row['tonkho_sanpham']."</h5></td>";
            echo '<td><button class="btnEdit"><a href="./sanpham_edit.php?id_sanpham='.$row['id_sanpham'].'">Edit</a></button>
                  <button class="btnDel"><a href="./sanpham_delete.php?id_sanpham='.$row['id_sanpham'].'">Delete</a></button></td>';
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
        <a href="sanpham_add.php?page=<?php echo 1 ?>" style=" color:#e3e3cd; font-size: 25px;">&lsaquo;&lsaquo;</a>
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
         <a href="sanpham_add.php?page=<?php echo $page - 1 ?>" style=" color:#e3e3cd; font-size: 25px;">&lsaquo;</a> 
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
                <a href="sanpham_add.php?page=<?php echo $i;?>" style=" color:#73101d; font-weight: bold; font-size: 25px;">
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
              <a href="sanpham_add.php?page=<?php echo $i;?>" style=" color:#e3e3cd ;font-size: 25px;" >
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
        <a href="sanpham_add.php?page=<?php echo $page + 1 ?>" style=" color:#e3e3cd;font-size: 25px; ">
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
        <a href="sanpham_add.php?page=<?php echo $pages ?>" style=" color:#e3e3cd;font-size: 25px; "><span>&rsaquo;&rsaquo;</span>
        </a> 
      </li>

  </ul>
</div>
</body>
</html>