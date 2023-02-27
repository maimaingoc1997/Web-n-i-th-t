<?php
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Giới thiệu
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Câu chuyện của chúng tôi
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Cửa hàng quần áo nhỏ của chúng tôi được thành lập vào năm 2000 với mục đích bán những thứ thời trang mới nhất cho người dân San Francisco. Được thành lập bởi Jon Doe và lấy cảm hứng từ sự kết hợp giữa thời trang cao cấp và các xu hướng đường phố mới, MYRA BOUTIQUE có nhiều lựa chọn các mặt hàng bán lẻ với mức giá hợp lý. Khách hàng đến với chúng tôi để có những lựa chọn ấn tượng về Giày, Áo sơ mi, v.v.						</p>

					
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/about-01.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Nhiệm vụ của chúng ta
						</h3>

					

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								Sáng tạo chỉ là kết nối mọi thứ. Khi bạn hỏi những người sáng tạo rằng họ đã làm điều gì đó như thế nào, họ cảm thấy hơi có lỗi vì họ đã không thực sự làm điều đó, họ chỉ nhìn thấy một cái gì đó. Nó dường như rõ ràng với họ sau một thời gian.							</p>

						
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="images/about-02.jpg" alt="IMG">
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