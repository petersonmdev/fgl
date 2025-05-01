<?php 

namespace App\Controllers;

use App\Repositories\ProductRepository;

class ProductsController {
    public function index() {
        $title = "Linha de Produtos";
        $products = (new ProductRepository())->all();
        
        render('shop', [
            'title' => $title,
            'products' => $products,
            'show_breadcrumb' => true,
            'subtitle' => 'Conheça nossa linha de produtos desenvolvidos para valorizar ambientes e fortalecer sua presença visual com inovação e acabamento de alto padrão.'
        ], 'layouts/main');
    }
}