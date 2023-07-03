<?php 
    

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
                        <img src="<?= $product['file'] ?>" alt="">
                        <a href=""><?= $product['name'] ?></a>
                        <p><?= $product['price'] ?></p>
                        <div class="buy">
                            <button name="product_id" 
                                onclick="addToCart(<?= $product['id'] ?>)" 
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