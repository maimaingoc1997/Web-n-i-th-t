<?php
    // // session_start();
    // unset($_SESSION['dangnhap_home']);
    // header('Location: ./index.php');
    if(isset($_GET['login'])) {
      $dangxuat = $_GET['login'];
    }
    else {
      $dangxuat = '';
    }
    if($dangxuat=='dangxuat') {
      unset($_SESSION['dangnhap_home']);
      unset($_SESSION['cart']);
      echo '<script language="javascript">window.location.href="index.php"</script>';
    }
  
?>

<?php
      // include 'test.php';
?>