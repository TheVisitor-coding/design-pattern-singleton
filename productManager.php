<?php
class ProductManager {
    private static $instance;
    private $productList;

    private function __construct() {
        // Initialisation de la liste des produits (par exemple, à partir de la base de données)
        $this->productList = [];
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getProductList() {
        return $this->productList;
    }

    public function addProduct($product) {
        $this->productList[] = $product;
    }
}
?>
