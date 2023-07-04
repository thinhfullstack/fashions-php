<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productId = $_POST['product_id'] ?? null;
    
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($_SESSION['products'][$productId])) {
            // Sản phẩm đã tồn tại, tăng số lượng lên 1
            $_SESSION['products'][$productId]++;
        } else {
            // Sản phẩm chưa tồn tại trong giỏ hàng, thêm vào với số lượng là 1
            $_SESSION['products'][$productId] = 1;
        }
    
        // Đếm tổng số lượng sản phẩm trong giỏ hàng
        $cartCount = array_sum($_SESSION['products']);
    
        // Lưu số lượng vào session
        $_SESSION['cart_count'] = $cartCount;
    }

?>

<section id="best-seller">
    <div class="container">
        <ul class="product-list">
            <li class="intro">
                <h2>best seller</h2>
                <small>The best productions from us</small>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda repellat vel aspernatur nesciunt</p>
            </li>
            <?php if(isset($_SESSION['products']) ?? null): ?>
                <?php foreach($_SESSION['products'] as $product): ?>
                    <li>
                        <?php if (!empty($product['file'])): ?>
                            <img src="<?= $product['file'] ?>" alt="">
                        <?php endif; ?>
                        <a href=""><?= $product['name'] ?></a>
                        <p><?= number_format($product['price'], 2) ?></p>
                        <div class="buy">
                            <button name="product_id"
                                    class="add-to-cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                            <button class="add-to-fav"><i class="fa-solid fa-heart"></i></button>
                            <button class="compare"><i class="fa-solid fa-retweet"></i></button>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul> 
    </div>
</section>