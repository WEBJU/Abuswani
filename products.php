<?php
include 'functions.php';
// The amounts of products to show on each page
// if (isset($_GET['id'])) {
$sub_id=$_GET['id'];
$num_products_on_each_page = 4;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM products WHERE subcategory_id=? ORDER BY date_added DESC');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, $sub_id);
// $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
$subcatory_name="Artworks";
switch ($sub_id) {
  case 1:
  $subcatory_name="Artworks";
  break;
  case 2:
  $subcatory_name="Digital Commissioned Art";
  break;
  case 3:
  $subcatory_name="Commissioned Art";
  break;
  case 4:
  $subcatory_name="Drawing";
  break;
  case 5:
  $subcatory_name="Acrylic";
  break;
  case 6:
  $subcatory_name="Oil Painting";
  break;
  case 7:
  $subcatory_name="Oil Pastel";
  break;
  case 8:
  $subcatory_name="Soft Pastel";
  break;
}
// }
?>

<?php //include('./inc/header.php')?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Abuswani</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="css/product.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>

  <header style="background:#fff;">
    <div class="content-wrapper">
      <a href="index.php"> <img src="images/abuswani.png" style="height:80px;" alt=""> </a>
      <nav class="pull-right custom-nav">
        <a href="index.php">Go Home</a>
        <!-- <a href="shop.php?page=products">Products</a> -->
      </nav>

    </div>
  </header>

<div class="container">
  <?php if ($products): ?>
  <h1><?php echo $subcatory_name ?> Products</h1>
  <p><?=$total_products?> Products</p>
  <div class="gallery" id="gallery">
      <?php foreach ($products as $product): ?>
         <div class="gallery-item">
          <div class="content">
            <img src="admin/images/<?=$product['img']?>" id="<?php echo $product['id'] ?>"  alt="<?=$product['name']?>"></div>
          </div>
        <?php endforeach; ?>
    <?php else: ?>
      <div style="margin:20px;">
        <p>There are no <?php echo $subcatory_name ?> products</p>
        <a class="btn btn-primary" href="index.php">Go Back</a>
      </div>
    <?php endif; ?>


    <script type="text/javascript">
    var gallery = document.querySelector('#gallery');
    var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
    var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
    var resizeAll = function () {
      var altura = getVal(gallery, 'grid-auto-rows');
      var gap = getVal(gallery, 'grid-row-gap');
      gallery.querySelectorAll('.gallery-item').forEach(function (item) {
        var el = item;
        el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
      });
    };
    window.addEventListener('resize', resizeAll);
    gallery.querySelectorAll('.gallery-item').forEach(function (item) {
      item.addEventListener('click', function () {
        item.classList.toggle('full');
      });
    });

  </script>
</body>

<?php //include('./inc/footer1.php')?>
