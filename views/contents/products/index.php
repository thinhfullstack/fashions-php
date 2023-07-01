<section id="feature-product">
    <h2>feature product</h2>
    <i>Newest trends from top brand</i>
        <div class="container">
            <ul class="product-list">
                <?php if(isset($_SESSION['products']) ?? null): ?>
                    <?php foreach($_SESSION['products'] as $product): ?>
                        <li>
                            <img src="<?= $product['file'] ?>" alt="">
                            <a href=""><?= $product['name'] ?></a>
                            <p><?= $product['price'] ?></p>
                            <div class="buy">
                                <a href="" class="add-to-cart"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="" class="add-to-fav"><i class="fa-solid fa-heart"></i></a>
                                <a href="" class="compare"><i class="fa-solid fa-retweet"></i></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
</section>