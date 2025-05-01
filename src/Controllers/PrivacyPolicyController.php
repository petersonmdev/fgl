<?php 

namespace App\Controllers;

class PrivacyPolicyController {
    public function index() {
        $title = "Politica de privacidade";        
        render('privacy-policy', compact('title'));
    }
}