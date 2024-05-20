<?php if(isset($_SESSION['role'] )){

  if ($_SESSION['role']=='user') {
    include 'header_user.php';
  }


 if ($_SESSION['role']=='admin') {
    include 'header_admin.php';
  }

  
}else {
  include 'header_user.php';
}

?>