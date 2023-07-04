<?php 
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [];
    }

    $name = $price = $feature_image = '';
    $errName = $errPrice = $errFile = '';
    $isValid = true;

    if(isset($_POST['btn-product'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $file = isset($_FILES['file']);

        if(!$name) {
            $errName = 'Vui lòng nhập tên sản phẩm';
            $isValid = false;
        }

        if(!$price) {
            $errPrice = 'Vui lòng nhập giá sản phẩm';
            $isValid = false;
        } else if(!is_numeric($price)) {
            $errPrice = 'Giá sản phẩm phải là số là số';
            $isValid = false;
        }

        if(!$file) {
            $errFile = 'Vui lòng chọn ảnh sản phẩm';
            $isValid = false;
        }

        if (!empty($_FILES['file']['name'])) {
            $fileName = time() . "_" . $_FILES['file']['name'];
            $targetPath = "../assets/image-admin/" . $fileName;
            move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
            
            $file = $targetPath;
        }

        if (!empty($_GET['id'])) { // Sửa
            $product = [];
            // Tìm id trong array
            $keyOfProduct = null;
            foreach ($_SESSION['products'] as $key => $item) {
                if ($item['id'] == $_GET['id']) {
                    $keyOfProduct = $key;
                    break;
                }
            }

            $product = [
                'id'       => $_GET['id'],
                'name'     => $name,
                'price'    => $price,
                'file'     => $file,
            ];

            // Nếu không chọn ảnh mới thì giữ nguyên ảnh hiện tại
            if (empty($file)) {
                $product['file'] = $_SESSION['products'][$keyOfProduct]['file'];
            }

            $_SESSION['products'][$keyOfProduct] = $product;
        }

        if(empty($_GET['id'])) {
            if($name && $price) {
                $products = [
                    'id'    => count($_SESSION['products']) + 1,
                    'name'  => $name,
                    'price' => $price,
                    'file'  => $file
                ];

                $_SESSION['products'][] = $products;

            }
        }

        if($isValid) {
            header('location:index.php?module=product&action=list');
            exit;
        }
    }

?>