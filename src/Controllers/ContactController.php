<?php 

namespace App\Controllers;

use App\Repositories\ReviewRepository;

class ContactController {
    public function index() {
        $title = "Contate-nos";
        render('contact', [
            'title' => $title,
            'show_breadcrumb' => true,
            'subtitle' => 'Fale com a gente! Estamos prontos para tirar suas dúvidas, entender suas ideias e oferecer as melhores soluções em comunicação visual.'
        ], 'layouts/main');
    }
}