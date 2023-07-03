<?php 


?>

<div class="sidebar-top">
    <a href="index.php?modules=cart&actions=list" class="cart_icon">
        <img src="./assets/images/cart_icon.png" alt="">
        <span><?= $_SESSION['cart_count'] ?? 0 ?></span>
    </a>

    <a href="#" class="cart_icon">
        <img src="./assets/images/search_icon.png" alt="">
    </a>

    <a href="#" class="cart_icon">
        <img src="./assets/images/menu.png" alt="">
    </a>
</div>