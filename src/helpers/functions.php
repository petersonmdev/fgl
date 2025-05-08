<?php

if (!function_exists('asset')) {
    /**
     * Retorna a URL relativa de um arquivo público.
     *
     * @param string $path
     * @return string
     */
    function asset(string $path): string
    {
        return '/' . ltrim($path, '/');
    }
}

if (!function_exists('array_url')) {
    /**
     * Retorna um array de URLs de imagens com base em um caminho.
     *
     * @param string $path Diretório relativo dentro de /public
     * @return array
     */
    function array_url(string $path): array
    {
        $baseDir = __DIR__ . '/../../public/' . $path;
        $images = glob($baseDir . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);

        return array_map(function ($imagePath) use ($path) {
            $filename = basename($imagePath);
            return asset($path . $filename);
        }, $images);
    }
}


// function asset(string $path): string
// {
//     return '/' . ltrim($path, '/');
// }

// function array_url(string $path): array
// {
//     $files = glob(__DIR__ . '/../../public/' . $path . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);
//     return array_map(function ($file) use ($path) {
//         $filename = basename($file);
//         return asset($path . $filename);
//     }, $files);
// }

if (!function_exists('asset_url')) {
    function asset_url($path) {
        return '/assets/' . $path;
    }
}

if (!function_exists('public_path')) {
    function public_path($path = '') {
        return __DIR__ . '/../public/' . $path;
    }
}

function asset_path($type) {
    $manifestPath = __DIR__ . '/../../public/assets/dist/manifest.json';
    if (!file_exists($manifestPath)) return '';

    $manifest = json_decode(file_get_contents($manifestPath), true);
    if (!isset($manifest[$type])) return '';

    return '/../../assets/dist/' . $manifest[$type];
}