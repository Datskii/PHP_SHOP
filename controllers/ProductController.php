<?php

class ProductController
{
    public function actionView($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);

        require_once(ROOT_DIR . '/views/product/view.php');
        return true;
    }
}