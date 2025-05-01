<?php 

namespace App\Controllers;

use App\Repositories\ReviewRepository;

class ClientsController {
    public function index() {
        $title = "Marcas que confiam no nosso trabalho";
        $reviews = (new ReviewRepository())->all();
        render('clients', [
            'title' => $title,
            'reviews' => $reviews,
            'show_breadcrumb' => true,
            'subtitle' => 'Conheça alguns dos clientes que já impactaram seus públicos com soluções visuais criativas, funcionais e personalizadas desenvolvidas por nossa equipe.'
        ], 'layouts/main');
    }
}