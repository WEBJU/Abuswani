<?php
if (isset($_POST["id"])) {
  include_once('./Model/DashboardModel.php');
  $dashboard=new DashboardModel();
  $result=$dashboard->edit($_POST);
  print_r(json_encode("Product edited successfully!!"));
}

 ?>
