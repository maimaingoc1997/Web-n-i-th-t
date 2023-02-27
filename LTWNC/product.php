<?php
		session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
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
	
		<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Sản phẩm
				</h3>
			</div>
	
<?php
	include './admin/posts_connect.php';
?>

		<div class="flex-w flex-sb-m p-b-52">

<?php
	 $id_sanpham=isset($_GET['id_sanpham']);
	//  $ten_danhmuc = $_POST['ten_danhmuc'];
	//  $ten_sanpham = $_POST['ten_sanpham'];
	//  $mota_sanpham = $_POST['mota_sanpham'];
	//  $tonkho_sanpham = $_POST['tonkho_sanpham'];
	//  $gia_sanpham = $_POST['gia_sanpham'];

	 $sql = "SELECT * from tbl_danhmuc";
// Thực hiện câu truy vấn
$query = mysqli_query($conn, $sql) or die ('Lỗi câu truy vấn');	  
// Duyệt kết quả rồi đưa vào mảng result
$result = array();
while ($row = mysqli_fetch_array($query))
{
    // Thêm vào result
    array_push($result, $row);
}
 
// Nếu là request ajax thì trả kết quả JSON
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    // Mình sleep 1 giây để các bạn check nhé, khi sử dụng thì bỏ đoạn sleep này đi
    sleep(1);
     
    // Trả kết quả về cho ajax
    die (json_encode($result));
}
else // Ngược lại thì hiển thị bình thường. Trường hợp này dùng load trong file list.php
{
    $total = count($result);
    // Bỏ đi kết quả cuối cùng vì kết quả này dùng để check phân trang thôi
    for ($i = 0; $i < $total ; $i++)
    {
		
?>
		
		<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" <?php
				if($i== 1){
					echo ' data-filter=".women"';
				}
				else if($i== 2){
					echo ' data-filter=".men"';
				}
				else if($i== 3){
					echo ' data-filter=".balo"';
				}
				else if($i== 4){
					echo ' data-filter=".giay"';
				}
				else if($i== 5){
					echo ' data-filter=".dongho"';
				}
				else if($i== 6){
					echo ' data-filter=".mu"';
				}
				else{
					echo ' data-filter="*"';
				}
        ?>

 >
<?php	echo'			'.$result[$i]["ten_danhmuc"].'
				</button>
			</div>';	
	}
}	
?>
			
				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Tìm kiếm
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

			
			</div>

			<div class="row isotope-grid">

<?php
		$sql = "SELECT * from tbl_sanpham ";
		// Thực hiện câu truy vấn
		$query = mysqli_query($conn, $sql);// or die ('Lỗi câu truy vấn');	  
		// Duyệt kết quả rồi đưa vào mảng result
		// $result = array();
		$count = mysqli_num_rows($query);
			$items = 12;

			$pages = ceil($count/$items); //tong so trang
			$page = isset($_GET["page"]) && $_GET["page"] >= 1 && $_GET["page"] <= $pages ? (int)$_GET["page"] : 1;

			$vitri = ($page*$items) - $items;
			$sqlSP = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC LIMIT $vitri,$items ";
			$result1 = mysqli_query($conn, $sqlSP);
			// $total = count($result1);
		while ($row = mysqli_fetch_array($result1))
		{
		
				echo'<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ';
?>
	<?php
			if($row["id_danhmuc"] == '2' ){
				echo	'women';
			}
			else if($row["id_danhmuc"] == 3 ){
				echo	'men';
			} 
			else if($row["id_danhmuc"] == 4 ){
				echo	'balo';
			} 
			else if($row["id_danhmuc"] == 5 ){
				echo	'giay';
			} 
			else if($row["id_danhmuc"] == 7 ){
				echo	'dongho';
			} 	
			else if($row["id_danhmuc"] == 8 ){
				echo	'mu';
			} 
	echo '">';					
?>

<?php
			echo'	<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0" style="height: 300px; margin-top:50px">
							<img src="./admin/photo/'.$row["anh_sanpham"].'"  alt="IMG-PRODUCT">'; ?>

              <?php
              if(isset($_SESSION['dangnhap_home'])  ){
                echo '<a href="./cart.php?id_sanpham='.$row["id_sanpham"].'" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" name="xemngay">
                Thêm vào giỏ 
              </a>';
              ?>
              <?php	
              }
              else{
                echo '<p>Hãy đăng nhập để mua hàng!!</p>';
              }?>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
	<a href="product-detail.php?id_sanpham=<?php echo $row["id_sanpham"]; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
	<?php echo ' '.$row["ten_sanpham"].'

								</a>
								<span class="stext-105 cl3">
									 '.number_format($row["gia_sanpham"]).' VND
								</span>
							</div>
							
							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>';
			}
		
?>	
			
		
</div>

			<!-- Phân trang -->
			<div id="menu" style=" display: inline-block; align-items:center;width:100%; padding-left:35%">
  <ul style=" list-style-type: none; ">
     <li style=" display: inline-block;    
              width: 30px;
              height: 100%;
              background-color: #878d92;
              padding-left:10px;" 
    <?php if($page == 1){
       echo " class='disable'";
     } 
     ?>>
        <a href="index.php?page=<?php echo 1 ?>" style=" color:#e3e3cd; font-size: 25px;">&lsaquo;&lsaquo;</a>
     </li>
     <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:10px;"  
     <?php if($page == 1){
       echo " class='disable'";
     } 
     ?>>
         <a href="index.php?page=<?php echo $page - 1 ?>" style=" color:#e3e3cd; font-size: 25px;">&lsaquo;</a> 
    </li>

     <?php
        for($i=1; $i<= $pages; $i++){
          if($page == $i){
          
       ?>
           <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:5px;"  >
                <a href="index.php?page=<?php echo $i;?>" style=" color:#73101d; font-weight: bold; font-size: 25px;">
                  <?php echo $i; ?>
                </a> 
          </li>
       <?php
          }
          else{
       ?>
          <li style=" display: inline-block;  
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:5px;" >
              <a href="index.php?page=<?php echo $i;?>" style=" color:#e3e3cd ;font-size: 25px;" >
                <?php echo $i; ?>
              </a> 
        </li>
      <?php   
          } // end if...else 
        } //end for

     ?>

     <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:10px;" 
     <?php if($page == $pages){
       echo " class='disable'";
     } 
     ?>>
        <a href="index.php?page=<?php echo $page + 1 ?>" style=" color:#e3e3cd;font-size: 25px; ">
          <span>&rsaquo;</span>
        </a> 
    </li>
      <li style=" display: inline-block;
              width: 25px;
              height: 100%;
              background-color: #878d92;
              align-items: center;
              padding-left:5px;" 
      <?php if($page == $pages){
       echo " class='disable'";
     } 
     ?>>
        <a href="index.php?page=<?php echo $pages ?>" style=" color:#e3e3cd;font-size: 25px; "><span>&rsaquo;&rsaquo;</span>
        </a> 
      </li>

  </ul>
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
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
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