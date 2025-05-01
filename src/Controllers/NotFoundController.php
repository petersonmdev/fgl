<?php 

namespace App\Controllers;

class NotFoundController {
    public function index() {
        $title = "Resultado não encontrado";
        
        render('404', compact('title'));
    }
}