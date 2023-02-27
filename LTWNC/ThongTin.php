<?php
	session_start();
	// $cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : []; //nếu có thì lấy gtri, k thi cho bằng mảng rỗng

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


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Trang chủ
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Thông tin cá nhân

			</span>
		</div>
	</div>

<?php
		$khachhang =  $_SESSION['khachhang_id'];	
		if(isset($_POST['btnUpdateInfor'])){
			$username = $_POST['TenKH'];
			$SDT = $_POST['SDT'];
			$DiaChi = $_POST['DiaChi'];
			
			$qr = "UPDATE tbl_khachhang 
			SET name = '$username', phone ='$SDT', address = '$DiaChi'
			WHERE khachhang_id='$khachhang'";
			if(mysqli_query($conn,$qr)){
				echo '<script language="javascript">alert("Cập nhật thông tin thành công!");</script>
				<script language="javascript">window.location.href="./index.php";	</script>';
			}
			else{
				echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý!");</script>
				';
			}
		}
?>
<?php
	$khachhang =  $_SESSION['khachhang_id'];
	$query = "SELECT * FROM tbl_khachhang WHERE khachhang_id = '$khachhang'";
	$result = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_array($result))
		{
?>

				<form  method="post" >	
					<div style="margin-left:255px; width:1500px; margin-bottom:20px">
							<div style="width:1100px; text-align:center">
								<h1 class="mtext-109 cl2 p-b-30">
								Cập nhật thông tin cá nhân
								</h1>	
							</div>
						
							<form style="width: 100%;  margin-bottom:50px;" >
								<div class="form-group" style=" max-width: 100%; margin-top:70px;">
									<label for="formGroupExampleInput" style=" width:150px" >Họ tên:</label>
									<input name="TenKH" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['name'] ?>" style=" width: 800px; height: 50px; margin-left:10px;">
								</div>
								<div class="form-group" style=" max-width: 100%;">
									<label for="formGroupExampleInput" style=" width:150px">Số điện thoại:</label>
									<input  name="SDT" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['phone'] ?>" style=" width: 800px; height: 50px;margin-left:10px;">
								</div>
								<div class="form-group" style=" max-width: 100%;" >
									<label for="formGroupExampleInput" style=" width:150px">Địa chỉ:</label>
									<input name="DiaChi" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['address'] ?>" style=" width: 800px; height: 50px;margin-left:10px;">
								</div>							

							</form>

<?php
		}
?>						
							<div class=" stext-101 cl0 " >	
								<button name="btnUpdateInfor" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style=" width: 10%; margin-left:30%;">
									Cập nhật
								</button>
							</div>
						</div>
					</div>
				</form>	
	

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
