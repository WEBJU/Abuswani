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
        <header>
            <div class="content-wrapper">
                 <a href="index.php"><h1 class="navbar navbar-brand" style="font-size:36px; font-weight:bold;">Abuswani</h1></a>
                <nav class="pull-right">
                    <a href="index.php">Home</a>
                    <a href="index1.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="index1.php?page=cart">
						<i class="fas fa-shopping-cart"><span><?php echo $num_items_in_cart ?></span></i>
					</a>
                </div>
            </div>
        </header>
        <main>
