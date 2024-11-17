<?php

class ProductView {

    public function showAllCategories($categories) {
        require_once './templates/products.phtml';
    }

    public function showDescriptionProduct($product){
        require_once 'templates/description_product.phtml';
    }
}
