<?php
include '../posts_connect.php';
if(isset($_GET["id_danhmuc"])){
    $id_danhmuc = $_GET["id_danhmuc"];
}
if (isset($_POST['btn_update'])){
    // $id_blog=isset($_GET['id_blog']);
    $ten_danhmuc = $_POST['ten_danhmuc'];
   
 
    
    $sql = "UPDATE tbl_danhmuc 
            SET ten_danhmuc='$ten_danhmuc'
            WHERE id_danhmuc='$id_danhmuc'";
    
    if(mysqli_query($conn, $sql) && empty($errors) ==true ) {
  
        echo '<script language="javascript">alert("Cập nhật danh mục thành công!");
        window.location.href="./danhmuc_add.php";
        </script>';
       
    }else{

        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");
        window.location.href="./danhmuc_add.php";
        </script>';
       
    }
    
    $conn->close();

}

?>