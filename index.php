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
    <!-- header -->
    <?php require_once("./views/partition/header.php") ?>
    <!-- end header -->

    <div class="main">
        <!-- slider -->
        <?php require_once("./views/contents/sliders/index.php") ?>
        <!-- end slider -->

        <!-- sellers -->
        <?php require_once("./views/contents/sellers/index.php") ?>
        <!-- end sellers -->

        <!-- shipping -->
        <?php require_once("./views/contents/shipping/index.php") ?>
        <!-- end shipping -->

        <!-- promotion -->
        <?php require_once("./views/contents/promotions/index.php") ?>
        <!-- end promotion -->

        <!-- products -->
        <?php require_once("./views/contents/products/index.php") ?>
        <!-- end products -->

        <!-- brands -->
        <?php require_once("./views/contents/brands/index.php") ?>
        <!-- end brands -->
    </div>
    
    <!-- footer -->
    <?php require_once("./views/partition/footer.php") ?>
    <!-- end footer -->
</body>
</html>
