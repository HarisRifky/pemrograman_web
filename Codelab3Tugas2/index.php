<?php

include "Controllers/ProductController.php";

use Controller\ProductController;

$productController = new ProductController();

// Memanggil method getAllProduct() dengan tanda panah
echo $productController->getAllProduct();
