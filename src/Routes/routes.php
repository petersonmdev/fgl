<?php

if (!function_exists('route')) {
    function route($name) {
        return '/' . $name;
    }
}

return [
    '' => [App\Controllers\HomeController::class, 'index'],
    'sobre-nos' => [App\Controllers\AboutController::class, 'index'],
    'nossos-servicos' => [App\Controllers\ServicesController::class, 'index'],
    'nossos-servicos/(\d+)' => [App\Controllers\ServicesController::class, 'show'],
    'linha-de-produtos' => [App\Controllers\ProductsController::class, 'index'],
    'linha-de-produtos/(\d+)' => [App\Controllers\ProductsController::class, 'show'], // Novo
    'clientes' => [App\Controllers\ClientsController::class, 'index'],
    'contato' => [App\Controllers\ContactController::class, 'index'],
    'politica-de-privacidade' => [App\Controllers\PrivacyPolicyController::class, 'index'],
    'termo-de-uso' => [App\Controllers\TermsOfUseController::class, 'index'],
    'treinamentos' => [App\Controllers\TreinamentsController::class, 'index']
];