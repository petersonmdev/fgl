<?php 

namespace App\Controllers;

class TermsOfUseController {
    public function index() {
        $title = "Termo de uso";        
        render('terms-of-use', compact('title'));
    }
}