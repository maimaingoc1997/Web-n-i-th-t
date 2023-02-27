<?php
	session_start();
	$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : []; //nếu có thì lấy gtri, k thi cho bằng mảng rỗng

	// echo '<pre>';
	// print_r($cart);
?>

<?php 
	include './includes/inc_head.php';
?>
<body class="animsition">

	<!-- Header -->
	<?php
			include "./includes/inc_header.php";
					// include './logout.php';

	?>
<?php
	// $user=$_SESSION['dangnhap_home'];
	$khachhang =  $_SESSION['khachhang_id'];
	if(isset($_POST['btnSubmit'])){
	$TenKH = $_POST['TenKH'];
	$DiaChi = $_POST['DiaChi'];
	$SDT = $_POST['SDT'];
	$HinhThucTT = $_POST['HinhThucTT'];
	$GhiChu = $_POST['GhiChu'];

	$query= mysqli_query($conn, "INSERT INTO tbl_orders (khachhang_id,TenKH,DiaChi,SDT, HinhThucTT,GhiChu) 
								VALUES('$khachhang','$TenKH','$DiaChi','$SDT', '$HinhThucTT','$GhiChu')");
		if($query){
			// $id_CT = mysqli_insert_id($conn);
			foreach ($cart as  $value) {
					mysqli_query($conn,"INSERT INTO tbl_ctoder (id_sanpham,soluong,gia_sanpham) 
						VALUES('$value[id_sanpham]','$value[soluong]','$value[gia_sanpham]')");
				}
					echo '<script language="javascript">alert("Đặt hàng thành công!");</script>
					<script language="javascript">window.location.href="./index.php";	</script>';
					unset($_SESSION['cart']);
			}
			
						// var_dump($_POST);
						// var_dump($khachhang);
	}
?>
<?php 
	if(isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $giaohang = $_POST['giaohang'];
  
    $sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang(name,  email, giaohang, password) 
							VALUES ('$name','$email', '$giaohang', '$password')");
    $sql_khachhang = mysqli_query($con, "SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
    $row_khachhang = mysqli_fetch_array($sql_khachhang);
    $_SESSION['dangnhap_home'] = $name;
    $_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];
    header("Location: index.php");
  }
?>
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Trang chủ
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Giỏ hàng của bạn

			</span>
		</div>
	</div>


	<!-- Shoping Cart -->
	<!-- <form class="bg0 p-t-75 p-b-85" > -->
		<div class="container">
			<div class="row" style="margin-left: -190px;">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50" >
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart" style="width: 1000px; margin-left:-10px">

							<table class="table-shopping-cart" style="width:100%">
								<thread style="text-align:center">
									<tr class="table_head" style="text-align:center">
										<th class="column-1" style="text-align:center; width:150px">Sản phẩm</th>
										<th class="column-1" style="text-align:center; width:250px"></th>
										<th class="column-1" style="text-align:center; width:150px">Đơn giá</th>
										<th class="column-1" style="text-align:center; width:150px">Số lượng</th>
										<th class="column-1" style="width:250px;text-align:center">Thành tiền</th>
										<th class="column-1" style="text-align:center; width:150px"></th>
									</tr>
								</thread>
								<tbody style="text-align:center">	
								<?php 
									$total_price =0;
									$tong_sl=0;
								?>
								
									<?php foreach ($cart as $key => $value) : 
											$total_price += ($value['gia_sanpham'] * $value['soluong']);
											// $tong_sl += $value['soluong'];
											
										?>
									<tr class="table_row"  style="text-align:center"> 
										<td class="column-1" style="text-align:center; width:150px">
										<input type="hidden" name="id_sanpham" value = "<?php echo $value['id_sanpham']?>">	

											<div class="how-itemcart1">
												<img src="./admin/photo/<?php echo $value['anh_sanpham']?>" alt="IMG" >
											</div>
										</td>
										<td class="column-1" style="text-align:center; width:250px"><?php echo $value['ten_sanpham']?></td>
										<td class="column-31" style="text-align:center; width:150px"><?php echo number_format($value['gia_sanpham']) ?> VND</td>
										<form action="cart.php" >
										<td class="column-1" style="text-align:center; width:150px">
												<input type="hidden" name="action" value = "update">	
												<input type="hidden" name="id_sanpham" value = "<?php echo $value['id_sanpham']?>">	
												
												<div class="wrap-num-product flex-w m-l-auto m-r-0" style="width: 130px; height: 30px; margin-right: 10px">
													<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-minus"></i>
													</div>

													<input class="mtext-104 cl3 txt-center num-product" type="text" name="soluong" value="<?php echo $value['soluong']?>">

													<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-plus"></i>
													</div>
												</div>
												<!-- <a href="cart.php?id_sanpham=<?php //echo //$value['id_sanpham']?>&action=update&soluong=<?php //echo $value['soluong'] ?>" 
												class="btn btn-danger" style="width:70px; height:35px;">Cập nhật</a> -->
												<button  type="submit" style="width:120px; height: 40px; border-radius:20px; margin-top:10px; background-color: rgba(52, 52, 52, 0.2)">
													Cập nhật
												</button>
										</td>
										
										</form>

										<td class="column-1" style="text-align:center; width:150px"> <?php echo number_format(
											$value['gia_sanpham'] * $value['soluong'])?> VND</td>
										<th class="column-1" style="text-align:center; width:150px"><a href="cart.php?id_sanpham=<?php echo $value['id_sanpham']?>&action=delete" class="btn btn-danger" style="width:70px; height:35px;">Xóa</a></th>
									</tr>
									<?php endforeach 
									
									?>
									
								</tbody>	

							</table>
						</div>

						
					</div>
				</div>
				<!-- <input type="hidden" name="tong_sl" value = "<?php echo $tong_sl ?>">						 -->
				
				<form  method="post" >	
					<div style="margin-left:255px; width:1100px; margin-bottom:20px">
							<div style="width:1100px; text-align:center">
								<h1 class="mtext-109 cl2 p-b-30">
									Thanh toán
								</h1>	
							</div>
						<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">					

							<div class="flex-w flex-t bor12 p-b-13">
								<div class="size-208">
									<span class="stext-110 cl2">
										Tổng tiền: 
									</span>
								</div>

								<div class="size-209">
									<span class="mtext-110 cl2">
									<?php echo number_format($total_price) ?> VND
									</span>
								</div>
							</div>
							<?php 
								if($total_price > 1500000){							
							?>
							<div class="flex-w flex-t bor12 p-b-13" style="margin-top:20px;">
								<div class="size-208">
									<span class="stext-110 cl2">
										Giá sale: 
									</span>
								</div>

								<div class="size-209">
									<span class="mtext-110 cl2" style = "color:red;">
									<?php echo number_format($total_price * 0.9) ?> VND
									</span>
								</div>
							</div>
							<?php 		
								}
							?>
							<div class="flex-w flex-t bor12 p-b-13" style="margin-top:20px;">
								<div class="size-208">
									<span class="stext-110 cl2">
										Thành tiền: 
									</span>
								</div>

								<div class="size-209">
									<p class="mtext-110 cl2" name="ThanhTien">
										<?php echo number_format($total_price * 0.9) ?> VND
									</p>
								</div>
							</div>
							<form style="width: 100%;  margin-bottom:50px;" >
								<div class="form-group" style=" max-width: 100%; margin-top:70px;">
									<label for="formGroupExampleInput" style=" width:150px" >Họ tên:</label>
									<input name="TenKH" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên.." style=" width: 600px; height: 50px; margin-left:10px;">
								</div>
								<div class="form-group" style=" max-width: 100%;">
									<label for="formGroupExampleInput" style=" width:150px">Số điện thoại:</label>
									<input  name="SDT" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập số điện thoại.." style=" width: 600px; height: 50px;margin-left:10px;">
								</div>
								<div class="form-group" style=" max-width: 100%;" >
									<label for="formGroupExampleInput" style=" width:150px">Địa chỉ:</label>
									<input name="DiaChi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập địa chỉ.." style=" width: 600px; height: 50px;margin-left:10px;">
								</div>
								<div class="form-group" style=" max-width: 100%;" >
									<label for="formGroupExampleInput" style=" width:150px">Hình thức thanh toán:</label>
									<select name="HinhThucTT" id="inputState" class="form-control" style=" padding: 10px 30px;width: 600px; height: 50px;margin-left:10px; border: 1px solid #ccc;">
										<!-- <option name="HinhThucTT" selected>Chọn hình thức thanh toán</option> -->
										<option >Thanh toán khi nhận hàng</option>
										<option >Thanh toán qua ATM</option>
										<!-- <option>Thanh toán qua thẻ ngân hàng</option> -->
									</select>
								</div>
								<div class="form-group" style=" max-width: 100%;margin-bottom: 40px;">
									<label for="formGroupExampleInput" style=" width:150px">Ghi chú:</label>
									<textarea name="GhiChu" id="the_loai" placeholder="Ghi chú..." style=" padding: 10px 30px;margin-left:10px; border: 1px solid #ccc;" rows="3" cols="72"></textarea>
									<!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập ghi chú.." style=" width: 600px; height: 50px;margin-left:10px;"> -->
								</div>

							</form>

							
							<div class="flex-c-m stext-101 cl0 ">	
								<button name="btnSubmit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style=" width: 200px; ">
									Đặt hàng
								</button>
							</div>
						</div>
					</div>
				</form>			
			</div>
		</div>
	<!-- </form> -->
		
	

<!-- Footer -->
<?php
		include("includes/inc_footer.php");
	?>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<?php include './includes/inc_js.php';?>
</body>
