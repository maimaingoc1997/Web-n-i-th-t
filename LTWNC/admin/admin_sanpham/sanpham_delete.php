<?php
    include '../posts_connect.php';
    if(isset($_REQUEST['id_sanpham']) and $_REQUEST['id_sanpham']!=""){
        $id_sanpham=$_GET['id_sanpham'];
        $sql = "DELETE FROM tbl_sanpham WHERE id_sanpham='$id_sanpham'";
        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Xóa sản phẩm thành công!");</script>';
        } else {
        echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    header("Location: sanpham_add.php");
?>