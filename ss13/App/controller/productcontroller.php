<?php
require_once __DIR__ . '/../model/productModel.php';

class productcontroller {
    public function product() {
        $product = new productModel();
        $productList = $product->getAllProducts();
        include __DIR__ . '/../view/product/index.php';
    }

    public function create() {
        include __DIR__ . '/../view/product/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['Name'];
            $price = $_POST['Price'];
            $imageName = '';

            if (isset($_FILES['ImageFile']) && $_FILES['ImageFile']['error'] === 0) {
                $uploadDir = __DIR__ . '/../../public/upload/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                $filename = uniqid() . '_' . basename($_FILES['ImageFile']['name']);
                move_uploaded_file($_FILES['ImageFile']['tmp_name'], $uploadDir . $filename);
                $imageName = 'upload/' . $filename;
            } elseif (!empty($_POST['ImageURL'])) {
                $imageName = $_POST['ImageURL'];
            }

            $product = new productModel();
            $product->add($name, $price, $imageName);
            header("Location: /ss12/product/product");
            exit;
        }
    }

    public function delete($id) {
        $product = new productModel();
        $product->delete($id);
        header("Location: /ss12/product/product");
        exit;
    }
}
