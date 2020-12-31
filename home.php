<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include('./inc/header1.php')?>

<!-- <div class="featured">
    <h2>Shop Now</h2> -->
    <!--
    <p>The most creative art we all crave for</p> -->
    <!-- <p>Shop the Art you like</p>
</div> -->
<div class="recentlyadded content-wrapper">
    <h2>Recently Added Art Products</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index1.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="./admin/images/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['price'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['price']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?php include('./inc/footer1.php')?>
