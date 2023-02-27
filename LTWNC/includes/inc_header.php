
<?php 	
	include './admin/posts_connect.php'; //kết nối
	// include './logout.php';
?>
<?php
  if(isset($_POST['dangnhap_home'])) {
    $taikhoan = $_POST['email_login'];
    $matkhau = ($_POST['password_login']);

    if($taikhoan== "" || $matkhau=="") {
      echo '<script>alert("Bạn hãy nhập đủ thông tin")</script>';
    }
    else {
      $sql_select_admin = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE email = '$taikhoan' 
	  AND password = '$matkhau'
	  ");
      $count = mysqli_num_rows($sql_select_admin);
      $row_dangnhap = mysqli_fetch_array($sql_select_admin);
      if($count > 0) {
        $_SESSION['dangnhap_home'] = $row_dangnhap['name'];
        $_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];
				echo '<script>alert("Đăng nhập thành công!")</script>';
      }
      else {
        echo '<script>alert("Tài khoản hoặc mật khẩu sai!")</script>';
      }
    }
  }
?>


	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Giảm giá 10% tổng đơn hàng cho hóa đơn > 1,500,000 VND
					</div>

					<div class="right-top-bar flex-w h-full">
					<?php 
							if(isset($_SESSION['dangnhap_home'])) {
						?>
					
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Hỗ trợ
						</a>

						<a href="?login=dangxuat" class=" flex-c-m trans-04 p-lr-25 ">
								<i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a>
								<li class="text-center border-right text-white">
							<a href="./ThongTin.php?id_khachhang=<?php echo $_SESSION['khachhang_id'] ?>" 
								class="text-white d-flex align-items-center  p-lr-25"							
								>
								<i class="fa fa-shopping-bag" style="margin-right:10px" aria-hidden="true"></i> 
								<?php echo $_SESSION['dangnhap_home']  ?>
							</a>
						</li>
						<?php
							}else{
						?>
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Hỗ trợ
						</a>

						<a href="#" data-toggle="modal" data-target="#dangnhap" class=" flex-c-m trans-04 p-lr-25 ">
								<i class="fa fa-sign-out" aria-hidden="true"></i> Đăng nhập</a>
						<?php
							}
						?>
								
					</div>
				</div>
			</div>
	<!-- log in -->
	<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="false" style="margin-top:100px" >
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="border: none;">
				<div class="modal-header">
					<h5 class="modal-title text-center" style="color: #233969; font-weight: bold;">Đăng nhập Tài khoản</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="" method="POST" class="login__create">
        <div class="form-login">
            <div class="form-group">
                <i class="fa fa-envelope-o icon-form" aria-hidden="true"></i>
                <input type="text" name="email_login" id="" class="form-email" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa fa-lock icon-form" aria-hidden="true"></i>
                <input type="password" name="password_login" id="" class="form-password" placeholder="Password">
                <i class="fa fa-eye eye-pass icon-eye" aria-hidden="true"></i>
            </div>
            <div class="form-group">
                <input type="submit" name="dangnhap_home" class="login__button" value="Đăng nhập">
            </div>
        </div>
				<div class="line-text"><span>Or</span></div>
				<div class="social-share">
          <div class="social-share-item facebook">
		  <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <span class="social-share-text">Đăng nhập qua Facebook</span>
          </div>
          
        </div>
						<p class="text-center dont-do mt-3">Chưa có tài khoản?
							<a href="#" data-toggle="modal" data-target="#dangky" style="color: #781321">
								Đăng ký ngay</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top:100px">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="border: none;">
				<div class="modal-header">
					<h5 class="modal-title" style="color: #233969; font-weight: bold;">Đăng ký tài khoản</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="" class="form" id="form" method="POST">
            <div class="form-control">
                <label for="#">User name</label>
                <input type="text" name="name" id="username" placeholder="Nhập Username">
            </div>
            <div class="form-control">
                <label for="#">Email</label>
                <input type="email" name="email" id="email" placeholder="Nhập Email">
            </div>
			
            <div class="form-control">
                <label for="#">Password</label>
                <input type="password" name="password" id="password" placeholder="Nhập Password">
                <i class="fa fa-eye icon-eye" aria-hidden="true"></i>
                <small class="error-txt">Error message</small>
							</div>
						<input type="hidden" name="giaohang" value="0">
          
                        <input type="submit" style="width: 100%" name="dangky" class="login__button btn btn-primary" value="Đăng ký">

        </form>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
	
				
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li >
								<a href="index.php">Trang chủ</a>
								
							</li>

							<li>
								<a href="product.php">Tất cả sản phẩm</a>
							</li>
<!-- 
							<li class="label1" data-label1="hot">
								<a href="#">Sản phẩm bán chạy</a>
							</li> -->

							<li >
								<a href="blog.php">Bài viết</a>
							</li>

							<li>
								<a href="about.php">Giới thiệu</a>
							</li>

							<li>
								<a href="contact.php">Liên hệ</a>
							</li>
						</ul>
					</div>	

					
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  "  href="./view-cart.php" >
							
							<!-- <button  style="with:50px;height:50px; "> -->
							<a  href="./view-cart.php" style="font-size:18px; color: black">Giỏ hàng</a>
							
							<i class="zmdi zmdi-shopping-cart"  ></i>
							<!-- </button> -->
						</div>
								
						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 " >
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="./images/icons/logo.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>



		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>