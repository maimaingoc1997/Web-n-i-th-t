<?php
    include '../posts_connect.php';
    if(isset($_REQUEST['id_blog']) and $_REQUEST['id_blog']!=""){
        $id_blog=$_GET['id_blog'];
        $sql = "DELETE FROM blog WHERE id_blog='$id_blog'";
        if ($conn->query($sql) === TRUE) {
        echo "Xoá thành công!";
        } else {
        echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    header("Location: posts_add.php");
?>