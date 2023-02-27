<?php
		// session_start();
?>
<?php
    include './admin/posts_connect.php';

    session_start();
    if(isset($_GET['id_sanpham'])){
        $id_sanpham = $_GET['id_sanpham'];
    }

    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
    $soluong = (isset($_GET['soluong'])) ? $_GET['soluong'] : 1;
    if($soluong == 0){
        $soluong =1;
    }
    // var_dump($action);
    // var_dump($soluong);
    // die();
    $query = mysqli_query($conn,"SELECT * 
    FROM tbl_sanpham 
    WHERE id_sanpham = $id_sanpham");
    if( $query){
        $product = mysqli_fetch_assoc($query);

    }
    //mảng chưa các phần tử muốn lấy ra
    $item = [
        'id_sanpham' => $product['id_sanpham'],
        'ten_sanpham' => $product['ten_sanpham'],
        'gia_sanpham' => $product['gia_sanpham'],
        'anh_sanpham' => $product['anh_sanpham'],
        'soluong' => $soluong,
    ];
  //thêm mới giỏ hàng
    if($action == 'add'){
        if(isset( $_SESSION['cart'][$id_sanpham])){
            $_SESSION['cart'][$id_sanpham]['soluong'] += $soluong;
        }
        else{
        //lưu tt vào session
        $_SESSION['cart'][$id_sanpham] = $item;
        }
    }
    //cập nhật giỏ hàng
    if($action == 'update'){
        $_SESSION['cart'][$id_sanpham]['soluong'] = $soluong;
        
    }
//    Xóa
  if($action == 'delete'){
        
        unset($_SESSION['cart'][$id_sanpham]);
    }

    header('location: ./view-cart.php');
    echo "<pre>";
    print_r($_SESSION['cart']);
  
?>