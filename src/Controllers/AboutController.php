<?php 

namespace App\Controllers;

class AboutController {
    public function index() {
        $title = "Sobre Nós";
        $imagesEquipe = getImagesFromDirectory('equipe');

        render('about', [
            'title' => $title,
            'show_breadcrumb' => true,
            'subtitle' => 'A FGL está situada em Goiânia, e conta uma estrutura moderna e com uma equipe altamente experiente e capacitada para desenvolver, projetar e executar qualquer tipo de serviços do ramo de comunicação visual.',
            'imagesEquipe' => $imagesEquipe
        ], 'layouts/main');
    }
}