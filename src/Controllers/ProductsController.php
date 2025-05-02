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

    public function show($id)
    {
        $product = (new ProductRepository())->find($id);
        
        render('product-simple', [
            'title' => $product['nome'],
            'product' => $product,
            'allImages' => getImagesFromDirectory(createSlug($product['nome'])),
            'show_breadcrumb' => true,
            'subtitle' => "Linha de produtos / {$product['nome']}"
        ], 'layouts/main');
    }
}