<?php 

namespace App\Controllers;

use App\Repositories\ReviewRepository;

class HomeController {
    public function index() {
        $title = "Página Inicial";
        $reviews = (new ReviewRepository())->all();
        $imagesBanner = getImagesFromDirectory('servicos');
        $imagesProjects = getImagesFromDirectory('projetos');
        
        render('home', [
            'title' => $title,
            'reviews' => $reviews,
            'show_breadcrumb' => false,
            'imagesBanner' => $imagesBanner,
            'imagesProjects' => $imagesProjects
        ], 'layouts/main');
    }
}