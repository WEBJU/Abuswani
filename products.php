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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
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
      <?php 
        $productIdentifier = 1;
        foreach ($products as $product): ?>
        <div class="gallery-item">
          <div class="content">
            <img style="width:100% !important;" src="admin/images/<?=$product['img']?>" id="<?=$productIdentifier?>"  alt="<?=$product['name']?>" onclick="fullscreenImage(<?=$productIdentifier ?>)">
            <div class="" id="productInfo_<?=$productIdentifier?>" style="display:none;">
              <h3 style="text-transformation: capitalize;" id="productName_<?=$productIdentifier?>" ><?=$product['name']?></h3>
              <h4 style="">Price: Ksh. <?=$product['price']?></h4>
              <p>
                <?=$product['description']?>
              </p>
            </div>
            </div>
        </div>
      <?php 
        $productIdentifier++;
        endforeach; ?>
      <?php else: ?>
        <div style="margin:20px;">
          <p>There are no <?php echo $subcatory_name ?> products</p>
          <a class="btn btn-primary" href="index.php">Go Back</a>
        </div>
      <?php endif; ?>
    <div>
      <!-- The Modal -->
      <div id="imageModal" class="modal">

      <!-- The Close Button -->
      <span class="close border border-danger">&times;</span>

      <!-- Modal Content (The Image) -->
      <div class="display: flex; justify-content: between; text-center " style="padding:20px 15%;" id= "navigationButtons">
        <button class="btn btn-sm btn-dark" id="previousBtn" style="float:left;">
          <i class="fa fa-arrow-left"></i>Previous
        </button>
        <button class="btn btn-sm btn-outline-dark" id="nextBtn" style="float:right;">
          <i class="fa fa-arrow-right"></i>Next
        </button>
      </div>
      <div style="position: relative; " onmouseover="changeOpacityInc()" onmouseout="changeOpacityDec()">
        <img class="modal-content"  id="imageModalSrc" style="">
        <!-- Modal Caption (Image Text) -->
        <div id="imageModalCaption" style="background-color:white; transition: .5s ease; opacity: 0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); text-align: center;">
        </div>
      </div>
    </div>
  </div>
  <script>
    //increse opacity
    var content = document.getElementById("imageModalSrc");
    var caption = document.getElementById("imageModalCaption");
    function changeOpacityInc(){
      caption.style.opacity = 1;
      content.style.opacity = 0.9;
      content.style.filter = "blur(5px) grayscale(5%)";
    }
    function changeOpacityDec(){
      content.style.opacity = 1;
      caption.style.opacity = 0;
      content.style.filter = "";
    }
    // Get the modal
    var modal = document.getElementById("imageModal");
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var modalPhoto = document.getElementById("imageModalSrc");
    var photoCaptionText = document.getElementById("imageModalCaption");
    var previousBtn = document.getElementById("previousBtn");
    var nextBtn = document.getElementById("nextBtn");
    var navigationButtons = document.getElementById("navigationButtons")

    
    function fullscreenImage(id){
      //alert(<?=$productIdentifier?>);
      //disable and enable button
      prevDisable="";
      nextDisabled = "";
      if(id == 1 ){
        previousBtn.disabled = true;
        prevDisable="disabled";
      }
      else{
        previousBtn.disabled = false;
      }
      if(id == <?=$productIdentifier-1?> ){
        nextBtn.disabled = true;
        nextDisabled = "disabled";
      }
      else{
        nextBtn.disabled = false;
      }

      var productNameName = document.getElementById("productName_"+id).textContent;
      var htmlButtons = 
          '<button class="navigationButtonsK" id="previousBtn" style="float:left;" '+prevDisable+' onclick="fullscreenImage(('+(id-1)+'))">'+
            '<i class="fa fa-arrow-left"></i>Previous  '+
          '</button>'+
          '<span class="text-center d-sm-block" style="color:white;  text-transform: uppercase; font-size: 110%; padding: 0px 30px;">'+
            productNameName+
          '</span>'+
          '<button class="navigationButtonsK" id="nextBtn" style="float:right;" '+nextDisabled+' onclick="fullscreenImage(('+(id+1)+'))">'+
            'Next  <i class="fa fa-arrow-right"></i>'+
          '</button>';

      //get info on product
      var productInfo = document.getElementById("productInfo_"+id).innerHTML;

      var photoId = document.getElementById(id);
      modal.style.display = "block";
      modalPhoto.src = photoId.getAttribute("src");
      photoCaptionText.innerHTML = productInfo;
      navigationButtons.innerHTML = htmlButtons;

      
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
</body>

<?php //include('./inc/footer1.php')?>