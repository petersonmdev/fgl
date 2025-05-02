<?php 

namespace App\Controllers;

class PrivacyPolicyController {
    public function index() {
        $title = "Politica de privacidade";
        $show_breadcrumb = true;
        $subtitle = 'Esta Política de Privacidade descreve como coletamos, usamos e protegemos suas informações ao utilizar nosso site.';
        render('privacy-policy', compact('title', 'show_breadcrumb', 'subtitle'));
    }
}