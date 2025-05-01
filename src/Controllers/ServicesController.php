<?php 

namespace App\Controllers;

class ServicesController {
    public function index() {
        $title = "Nossos serviços";
        $imagesServicos = getImagesFromDirectory('servicos');

        render('services', [
            'title' => $title,
            'show_breadcrumb' => true,
            'subtitle' => 'Cada trabalho é prova do nosso compromisso com qualidade e criatividade',
            'imagesServicos' => $imagesServicos
        ], 'layouts/main');
    }

    public function show($id)
    {
        $title = "Nossos serviços";
        echo "Serviço ID: " . $id;
    }
}