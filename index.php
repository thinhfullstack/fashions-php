<?php
  session_start();
  ob_start();

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashions</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="icon/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <?php require_once("./views/partition/header.php") ?>

    <?php require_once("./views/sliders/index.php") ?>

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
                                <a href="#" onclick="addToCart(<?= $product['id'] ?>)" class="add-to-cart"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="#" class="add-to-fav"><i class="fa-solid fa-heart"></i></a>
                                <a href="#" class="compare"><i class="fa-solid fa-retweet"></i></a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul> 
        </div>
    </section>

    <?php require_once("./views/shipping/index.php") ?>

    <section id="promotion">
        <div class="container">
            <ul>
                <li><img src="./assets/images/prom1.png" alt=""></li>
                <li><img src="./assets/images/prom2.png" alt=""></li>
                <li><img src="./assets/images/prom3.png" alt=""></li> 
            </ul>
        </div>
    </section>

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

    <section id="brands">
        <div class="discount">
            <div class="text">
                <h2>Get Out Special Discount</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. ipsum dolor sit amet consectetur adipisicing elit
                    ipsum dolor sit amet consectetur adipisicing elit
                </p>
            </div>
            <form action="">
                <input type="text" name="" id="" placeholder="E-mail address ...">
                <button>Get Coupon Now</button>
            </form>
        </div>

        <div class="brands">
            <ul>
                <li class="brand-1"><a href="#"></a></li>
                <li class="brand-2"><a href="#"></a></li>
                <li class="brand-3"><a href="#"></a></li>
                <li class="brand-4"><a href="#"></a></li>
            </ul>
        </div>
    </section>

    <?php require_once("./views/partition/footer.php") ?>
</body>
</html>
