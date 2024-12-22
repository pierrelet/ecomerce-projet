<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Products</h1>
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <h2><?php echo $product['name']; ?></h2>
                <p>Price: <?php echo $product['price']; ?>€</p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
