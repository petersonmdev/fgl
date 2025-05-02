<?php 

namespace App\Controllers;

class TreinamentsController {
    public function index() {
        $title = "Equipe de montagem treinada em todas as nrs de comunicação visual";
        $show_breadcrumb = true;
        $subtitle = 'NR1, NR6, NR10, NR12, NR18, NR35';
        $imagesTreinaments = getImagesFromDirectory('treinamentos');
        render('treinaments', compact('title', 'show_breadcrumb', 'subtitle', 'imagesTreinaments'));
    }
}