<?php 

namespace App\Controllers;

class TermsOfUseController {
    public function index() {
        $title = "Termo de uso";
        $show_breadcrumb = true;
        $subtitle = 'Bem-vindo ao nosso site. Ao acessar ou utilizar este site, você concorda com os termos e condições descritos abaixo. Caso não concorde com qualquer parte destes termos, recomendamos que não utilize nosso site.';
        render('terms-of-use', compact('title', 'show_breadcrumb', 'subtitle'));
    }
}