<head>
<link rel="stylesheet" href="../style.css"/>
</head>
<body>

<?php
require '../posts_connect.php';
// Thêm danh mục
if (isset($_POST['btn_submit'])) {
    // $id_danhmuc=isset($_GET['id_danhmuc']);
    $ten_danhmuc = $_POST['ten_danhmuc'];
   
        $sql = "INSERT INTO tbl_danhmuc( ten_danhmuc ) 
            VALUES ( '$ten_danhmuc')";

  
        if(mysqli_query($conn, $sql) && empty($errors)==true ) {
  
            echo '<script language="javascript">alert("Thêm danh mục thành công!");</script>';
  
        }else{
  
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");</script>';
  
        }

}
    
?>
</table>

<table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" >Tên danh mục</th>
      
      <th scope="col" >Quản lý</th>
      
    </tr>
  </thead>

  <tbody>
  <?php
        $sql = "SELECT * FROM tbl_danhmuc ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr style='text-align: center;'>";
            echo "<td><h5>".$row['id_danhmuc']."</h5></td>";
            echo "<td><h5 >".$row['ten_danhmuc']."</h5></td>";
            echo '<td><button class="btnEdit" style="width:20%"><a href="./danhmuc_edit.php?id_danhmuc='.$row['id_danhmuc'].'">Edit</a></button>
                  <button class="btnDel" style="width:20%"><a href="./danhmuc_delete.php?id_danhmuc='.$row['id_danhmuc'].'">Delete</a></button></td>';
            echo "</tr>";
        }
        
  ?>
   
  </tbody>
</table>

</body>
</html>