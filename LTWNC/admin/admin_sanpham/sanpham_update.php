<?php
include '../posts_connect.php';
if(isset($_GET["id_sanpham"])){
    $id_sanpham = $_GET["id_sanpham"];   
}
if (isset($_POST['btn_update'])){
    // $id_blog=isset($_GET['id_blog']);
    $ten_danhmuc = $_POST['ten_danhmuc'];
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
    $sql = "UPDATE tbl_sanpham
            SET id_danhmuc='$ten_danhmuc',ten_sanpham='$ten_sanpham',mota_sanpham ='$mota_sanpham' ,tonkho_sanpham ='$tonkho_sanpham',
                             gia_sanpham ='$gia_sanpham',anh_sanpham ='$anh_sanpham', anh_sanpham1 ='$hinhanh1',anh_sanpham2 ='$hinhanh2'
            WHERE id_sanpham='$id_sanpham'";
    
    if(mysqli_query($conn, $sql) && empty($errors) ==true   
    && move_uploaded_file($file_tmp,"../photo/".$file_name) 
    && move_uploaded_file($hinhanh_tmp1,"../photo/".$hinhanh1)
    && move_uploaded_file($hinhanh_tmp2,"../photo/".$hinhanh2) ) {
  
        echo '<script language="javascript">alert("Cập nhật sản phẩm thành công!");
        window.location.href="./sanpham_add.php";
        </script>';
       
    }else{

        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");
        window.location.href="./sanpham_add.php";
        </script>';
       
    }
    
    $conn->close();
    }
}

?>