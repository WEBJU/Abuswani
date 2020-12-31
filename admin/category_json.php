<?php

// set json headers
header("Access-Control-Allow-Methods: GET");
header('Content-Type: application/json');

// retrieve players from the database
// get team id parameter
$category_id=isset($_GET['category_id']) ? $_GET['category_id'] : die('Category ID not found.');

// include database and object files
include_once './Model/Db.php';
include_once './controller/Dashboard.php';

// instantiate database and product object
$category = new Dashboard();
$Response=[];
$category->id=$category_id;
$Cat = $category->getSubCategory($category_id);
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($Cat);
?>
 ?>
