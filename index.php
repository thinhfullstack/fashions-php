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
    <?php ($_GET['modules'] ?? null) != 'cart' ? require_once("./views/partition/header.php") : '' ?>
    <!-- end header -->

    <div class="main">
        <?php require_once("./views/load-layout.php") ?>
    </div>
    
    <!-- footer -->
    <?php ($_GET['modules'] ?? null) != 'cart' ? require_once("./views/partition/footer.php") : '' ?>
    <!-- end footer -->
</body>
</html>
