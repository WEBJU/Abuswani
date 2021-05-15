<?php
  if (isset($_POST['id'])) {
    include_once('./Model/DashboardModel.php');
    $Dashboard=new DashboardModel();
    $result=$Dashboard->delete($_POST['id']);
    print_r(json_encode("Product deleted successfully!!"));
  }
 ?>
