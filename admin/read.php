<?php
include_once('./Model/DashboardModel.php');
$dashboard=new DashboardModel();
if (isset($_POST['id'])) {
  $result=$dashboard->readSingle($_POST["id"]);
  if (!empty($result)) {
    $responseArray["category_name"] = $result[0]["category_name"];
    $responseArray["subcategory_name"] = $result[0]["subcategory_name"];
    $responseArray["name"] = $result[0]["name"];
    $responseArray["description"] = $result[0]["description"];
    $responseArray["price"] = $result[0]["price"];
    $responseArray["quantity"] = $result[0]["quantity"];
    $responseArray["img"] = $result[0]["img"];

    echo json_encode($responseArray);
  }
}

 ?>
