<?php // Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Abuswani</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="custom.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<style media="screen">
			 .custom-nav a{
				 text-decoration: none;

			 }
		</style>
        <header>
            <div class="content-wrapper">
                 <a href="index.php"> <img src="images/abuswani.png" style="height:80px;" alt=""> </a>
                <nav class="pull-right custom-nav">
                    <a href="index.php">Home</a>
                    <a href="shop.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="shop.php?page=cart">
											<i class="fas fa-shopping-cart"><span><?php echo $num_items_in_cart ?></span></i>
										</a>
                </div>
            </div>
        </header>
        <main>
