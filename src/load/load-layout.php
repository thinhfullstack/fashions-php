<?php 
    $moduleApp = $_GET['modules'] ?? 'index';
    $actionApp = $_GET['actions'] ?? null;

    switch ($moduleApp) {
        case 'cart':
            switch ($actionApp) {
                case 'list':
                    require_once("./src/views/contents/cart/list.php");
                    break;
            }
            break;

        case 'seller':
            switch ($actionApp) {
                case 'list':
                    require_once("./src/views/contents/sellers/list.php");
                    break;
            }
            break;

        default:
            require_once("index.php");
            break;
    }

    // sliders
    ($_GET['modules'] ?? null) != 'cart' ? require_once("./src/views/contents/sliders/index.php") : '';

    // sellers
    ($_GET['modules'] ?? null) != 'cart' ? require_once("./src/views/contents/sellers/list.php") : '';
           
    // shipping
    ($_GET['modules'] ?? null) != 'cart' ? require_once("./src/views/contents/shipping/index.php") : '';
           
    // promotions
    ($_GET['modules'] ?? null) != 'cart' ? require_once("./src/views/contents/promotions/index.php") : '';
         
    // products
    ($_GET['modules'] ?? null) != 'cart' ? require_once("./src/views/contents/products/index.php") : '';
     
    // brands
    ($_GET['modules'] ?? null) != 'cart' ? require_once("./src/views/contents/brands/index.php") : '';
        
?>