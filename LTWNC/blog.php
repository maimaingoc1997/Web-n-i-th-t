<?php
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		include("includes/inc_head.php");
	?>
	<style>
		.main-top-w3l, button.w3view-cart , .snipcart-details input.button , .copy-right  {
 background: #9CECFB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
} 

.snipcart-details input.button  {
	border-radius: 10px;
}
.btn-buy {
		display: flex;
    position: relative;
}


/*---*/

.btn-search {
  border-radius: 0 6px 6px 0 !important;
  background: #1fa2ff !important;
}
.logo_agile h1 a {
    color: #1FA2FF;
}

	body::-webkit-scrollbar {
  width: 8px;
}

body::-webkit-scrollbar-thumb {
	border-radius: 10px;
  background: #36D1DC;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to bottom, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to bottom, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

  /* Admin Login */
  form.login__create {
    max-width: 500px;
    width: 100%;
    background-color: #fff;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-radius: 10px;
    padding: 20px 25px;
  }

  form h3 {
    text-align: center;
    font-size: 25px;
  }

  .form-login {
    width: 100%;
    margin-top: 20px;
  }

  .form-group {
    padding-bottom: 15px;
    position: relative;
    text-align: center;
    max-width: 300px;
    margin: 0 auto;
    display: flex;
    align-items: center;
  }

  .form-group input {
    width: 300px;
    padding: 10px 30px;
    border: 1px solid #ccc;
    border-radius: 5px;
    position: relative;
  }

  .form-group input::placeholder {
    font-size: 14px;
  }

  .form-group input:focus {
    transition: all 0.5 linear;
    border-color: #3d6ef7;
  }

  .form-group i.icon-form {
    position: absolute;
    z-index: 10;
    padding: 0 10px;
  }

  .form-group i.eye-pass {
    position: absolute;
    right: 10px;
  }

  .form-group .login__button {
    padding: 15px 30px;
    background-color: #1f1f1f;
    color: #fff;
    border-radius: 10px;
    text-align: center;
    margin: 0 auto;
  }

	.form {
    padding: 30px 40px;
}

.form-control {
    padding-bottom: 20px;
    position: relative;
		border: 0;
}

.form-control label {
    display: inline-block;
    margin-bottom: 5px;
}

.form-control input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    font-size: 14px;
    padding: 10px;
}

.form-control.success input {
    border-color: #2ecc71;
}

.form-control.error input {
    border-color: #e74c3d;
}

.form-control i {
  	position: absolute;
    top: 56%;
    right: 25px;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    font-size: 14px;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.2s ease;
    color: #fff;
    border-radius: 50%;
}

.form-control.success i.icon-check {
    opacity: 1;
    visibility: visible;
    background-color: #2ecc71;
}

.form-control.error i.icon-ex {
    opacity: 1;
    visibility: visible;
    background-color: #e74c3d;
}

.form-control i.icon-eye {
    opacity: 1;
    visibility: visible;
    color: #333;
    cursor: pointer;
}

.form-control small {
    position: absolute;
    bottom: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    transition: all 0.2s ease;
}

.form-control.error small {
    color: #e74c3d;
    opacity: 1;
    visibility: visible;
}

.form button {
    background-color: #8e44ad;
    color: #fff;
    border: 2px solid #8e44ad;
    border-radius: 4px;
    display: block;
    padding: 10px;
    width: 100%;
}

.product-cart {
  background-color: #fff;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  border-radius: 10px;
	padding: 20px 15px;
}

/*step ctietsq*/
.stepper-input {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 180px;
  height: 80px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 40px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  overflow: hidden;
}

.stepper-input input {
  display: none;
}

.stepper-input .input {
  width: 100%;
  height: 100%;
  display: flex;
}

.stepper-input .input button {
  width: 50px;
  height: 100%;
  background-color: #fff;
  color: #222;
  font-size: 30px;
  cursor: pointer;
  transition: all 0.25s linear;
}

.stepper-input .input button:active {
  background-color: #555;
}

.stepper-input .input .range {
  flex: 1;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
}

.stepper-input .input .range .list span {
  display: block;
  width: 100%;
  height: 80px;
  color: #222;
  font-size: 30px;
  line-height: 80px;
}

.checkout-left {
  margin-top: 30px;
  background-color: #fff;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  padding: 20px 30px;
  border-radius: 10px;
}

.information-wrapper input,
.information-wrapper  textarea 
.information-wrapper select {
  border-bottom: 1px solid #fff !important;
  border-radius: 10px;
}

.information-wrapper  textarea {
  border: 1px solid #ccc;
  margin-bottom: 20px;
  height: 200px;
}
/*MOON*/
.register {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}

.register-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left input {
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-right {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}

.register-left img {
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;
}

@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-20px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-20px);
    }
}

.register-left p {
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.register .register-form {
    padding: 10%;
    margin-top: 10%;
}

.btnRegister {
    float: right;
    margin-top: 2%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}

.register .nav-tabs {
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}

.register .nav-tabs .nav-link {
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}

.register .nav-tabs .nav-link:hover {
    border: none;
}

.register .nav-tabs .nav-link.active {
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.register-heading {
    
    margin-bottom: -15%;
    color: #495057;
}
	.line-text {
		text-align: center;
		position: relative;
	}
	.line-text:before {
		content: "";
		width: 100%;
		height: 1px;
		position: absolute;
		top: 50%;
		left: 0;
		transform: translateY(-50%);
		background-color: #333;
	}
	.line-text span {
		display: inline-block;
		background-color: white;
		position: relative;
		z-index: 2;
		padding: 1rem;
		font-weight: 600;
	}
	.social-share {
		width: 100%;
		max-width: 300px;
		margin: 0 auto;
	}
	.social-share-icon {
		width: 40px;
		height: 40px;
		background-color: white;
		border-radius: inherit;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 18px;
	}
	.social-share-text {
		color: white;
		margin-left: 20px;
		font-size: 16px;
	}

	.social-share-item {
		width: 100%;
		padding: 10px;
		border-radius: 8px;
		display: flex;
		align-items: center;
		cursor: pointer;
	}
	.social-share-item.facebook {
		background-color: #3b5999;
	}
	.social-share-item.facebook .social-share-icon {
		color: #3b5999;
	}
	.social-share-item.instagram {
		background-color: #e4405f;
	}
	.social-share-item.instagram .social-share-icon {
		color: #e4405f;
	}
	.social-share-item.twitter {
		background-color: #55acee;
	}
	.social-share-item.twitter .social-share-icon {
		color: #55acee;
	}
	.social-share-item + .social-share-item {
		margin-top: 20px;
	}
	.fa-facebook-square{
		color: #fff;
	}
</style>
</head>
<body class="animsition">
	
	<!-- Header -->
	<?php
			include "./includes/inc_header.php";
			include './logout.php';

	?>




	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Bài viết
		</h2>
	</section>	
	

	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->

					
					<div id="content">
						<?php
							require('./ajax/loadmore1.php');
					   ?>
					</div>
						<!-- Pagination -->
					<div id ="load"  >
						<a href="#" class="button" id="load_more" style="font-size:22;padding:10px; background-color : black; padding-left:15px;paing-top:10px; border-radius:25px;">XEM THÊM</a>
					
					</div>
					 	 
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Nhập thứ bạn muốn tìm kiếm">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Thể loại
							</h4>

							<ul>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Thời trang
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
									Sắc đẹp 
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Phong cách đường phố
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Cách sống
									</a>
								</li>

								
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Sản phẩm nổi bật
							</h4>

							<ul>
								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="images/item-cart-01.jpg" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
											Áo sơ mi trắng xếp ly
										</a>

										<span class="stext-116 cl6 p-t-20">
											190.000 VND
										</span>
									</div>
								</li>

								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="images/product-min-02.jpg" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
											Áo khoác gió
										</a>

										<span class="stext-116 cl6 p-t-20">
											1.500.000 VND
										</span>
									</div>
								</li>

								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="images/product-min-03.jpg" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
											Áo phao
										</a>

										<span class="stext-116 cl6 p-t-20">
											800.000 VND
										</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Lưu trữ
							</h4>

							<ul>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											July 2020
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											June 2020
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											May 2020
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											April  2020
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											March 2020
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											February 2020
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											January 2020
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								
							</ul>
						</div>

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Thẻ
							</h4>

							<div class="flex-w m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Thời trang
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Cách sống
								</a>

								

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Phong cách đường phố
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Đồ thủ công
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	

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
	<!-- LoadMore -->
	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script language="javascript" src="ajax/ajax.js" ></script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})

		
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>