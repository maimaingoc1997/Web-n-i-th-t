<?php
    include '../posts_connect.php';
    if(isset($_REQUEST['id_danhmuc']) and $_REQUEST['id_danhmuc']!=""){
        $id_danhmuc=$_GET['id_danhmuc'];
        $sql = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='$id_danhmuc'";
        if ($conn->query($sql) === TRUE) {
        echo "Xoá thành công!";
        } else {
        echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    header("Location: danhmuc_add.php");
?>