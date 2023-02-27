<?php
include '../posts_connect.php';
// include '../incLogin.php';

if(isset($_GET["id_blog"])){
    $id_blog = $_GET["id_blog"];
}
if (isset($_POST['btn_update'])){
    // $id_blog=isset($_GET['id_blog']);
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

    $sql = "UPDATE blog 
            SET tieu_de='$tieu_de', noi_dung='$noi_dung',anh='$image', the_loai='$the_loai', username='$username', ngay='$ngay' 
            WHERE id_blog='$id_blog'";
    
    if(mysqli_query($conn, $sql) && empty($errors)==true && move_uploaded_file($file_tmp,"../photo/".$file_name)) {
  
        echo '<script language="javascript">alert("Cập nhật bài viết thành công!");
        window.location.href="./posts_add.php";
        </script>';
       
    }else{

        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");
        window.location.href="./posts_add.php";
        </script>';
       
    }
    
    $conn->close();
}
}

?>