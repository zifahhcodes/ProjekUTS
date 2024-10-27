<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'layout/navbar.html' ?>
    <div class="container2">
        <div class="shoppingcart">
            <h1>Shopping Cart</h1>
            <a href="" style="color: #007185; text-decoration: none;">Deselect all items</a>
            <p style="text-align: end;">Price</p>
            <hr /><br>
            <div class="product">
                <div class="image">
                    <img src="images/rtx4090.jpg" alt="">
                </div>
                <div class="detail">
                    <p>GIGABYTE GeForce RTX 4090 Gaming OC 24G Graphics Card, <br> 
                        3X WINDFORCE Fans, 24GB 384-bit GDDR6X, GV-N4090GAMING OC-24GD Video Card</p>
                    <input type="number" name="quantity" placeholder="Qty: 1" min="1" max="10">
                </div>
                <div class="pricetag">
                    <p>$2174.99$</p>
                </div>
            </div>
            <hr /><br>
            <p style="text-align: end;">Price: 2174.99$</p>
        </div>
        <div class="subtotal">
            <p>Subtotal (1 Item): 2174.99$</p>
            <button class="checkout">Proceed to Checkout</button>
        </div>
    </div>

    <?php include 'layout/footer.html' ?>
</body>
</html>