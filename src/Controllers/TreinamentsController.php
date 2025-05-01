<?php 

namespace App\Controllers;

class TreinamentsController {
    public function index() {
        $title = "Treinamentos";        
        render('treinaments', compact('title'));
    }
}