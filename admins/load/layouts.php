<?php
    $module = $_GET['module'] ?? null;
    $action = $_GET['action'] ?? null;

    /* Thực hiện cho việc khi đã login vào hệ thống thì 
        sẽ ngăn chặn việc ra khỏi màn Home để quay lại login
        -> Trừ khi ta phải logout
    */
    if($action === 'login' && !empty($_SESSION['user'])) {
        header('location:index.php?module=product');
    }

    /* Thực hiện cho việc khi đã logout thoát khỏi hệ thống thì 
        sẽ không điều hướng quay trở lại vào hệ thống được.
        -> Muốn vào được ta phải login
    */
    if($module != 'auth' && empty($_SESSION['user'])) {
        header('location:index.php?module=auth&action=login');
    }
    
    switch ($module) {
        case 'product':
            switch ($action) {
                case 'list':
                    require_once("./views/products/list.php");
                    break;
                case 'create':
                    require_once("./views/products/pr_process.php");
                    require_once("./views/products/create.php");
                    break;
                case 'edit':
                    require_once("./views/products/pr_process.php");
                    require_once("./views/products/edit.php");
                    break;
                case 'delete':
                    require_once("./views/products/delete.php");
                    break;

                default:
                    require_once("./views/products/list.php");
                    break;
            }
            break;
            
        case 'category':
            if(!$action) {
                require_once("./views/categories/list.php");
            } else {
                require_once("./views/categories/{$action}.php");
            }
            break;

        case 'user':
            switch ($action) {
                case 'list':
                    require_once("./views/users/list.php");
                    break;
                case 'create':
                    require_once("./views/users/user_process.php");
                    require_once("./views/users/create.php");
                    break;
                case 'edit':
                    require_once("./views/users/user_process.php");
                    require_once("./views/users/edit.php");
                    break;
                case 'delete':
                    require_once("./views/users/delete.php");
                    break;
                
                default:
                    require_once("./views/users/list.php");
                    break;
            }
            break;

        case 'auth':
            if($action == 'login') {
                require_once("./views/auth/process_login.php");
                require_once("./views/auth/login.php");
            }
            if($action == 'logout') {
                require_once("./views/auth/logout.php");
            }

            break;
        case 'upload': 
            if(!$action) {
                require_once("./views/upload/process_upload.php");
                require_once("./views/upload/form.php");
            } else {
                require_once("./views/upload/{$action}.php");
            }
            break;

        default:
            require_once("./admins/index.php");
        break;  
    }
?>