<?php

if (!function_exists('render')) {
    function render(string $view, array $data = [], string $layout = 'layouts/main'): void 
    {
        $viewPath = __DIR__ . '/../views/' . $view . '.php';
        $layoutPath = $layout ? __DIR__ . '/../views/' . $layout . '.php' : null;

        if (!file_exists($viewPath)) {
            http_response_code(404);
            echo "View '{$view}' não encontrada.";
            return;
        }

        extract($data);

        ob_start();
        require $viewPath;
        $content = ob_get_clean();

        if ($layoutPath && file_exists($layoutPath)) {
            require $layoutPath;
        } else {
            echo $content;
        }
    }
}

if (!function_exists('renderBreadcrumb')) {
    function renderBreadcrumb($title = null, $subtitle = null): void
    {
        $title = $title ?? $GLOBALS['site_name'];
        $subtitle = $subtitle ?? '';

        require __DIR__ . '/../views/partials/breadcrumb.php';
    }
}

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

if (!function_exists('getImagesFromDirectory')) {
    function getImagesFromDirectory(string $dir): array
    {
        $imageTypes = ['jpg', 'jpeg', 'png', 'webp'];
        $images = [];
        $directoryPath = __DIR__ . '/../public/assets/images/fgl/' . $dir;

        if (is_dir($directoryPath)) {
            foreach ($imageTypes as $type) {
                $files = glob($directoryPath . "/*.$type");
                foreach ($files as $file) {
                    $filename = basename($file);
                    $images[] = asset_url("images/fgl/{$dir}/{$filename}");
                }
            }
        }

        return $images;
    }
}

if (!function_exists('renderGalleryFromImages')) {
    function renderGalleryFromImages(array $images): void
    {

        $total = count($images);

        if ($total === 0) {
            echo '<p>Nenhuma imagem encontrada.</p>';
            return;
        }

        $distribution = [];
        $remaining = $total;

        while ($remaining > 0) {
            if ($remaining % 4 === 0 || $remaining > 8) {
                $row = 4;
            } elseif ($remaining % 5 === 0 || $remaining === 5 || $remaining === 10) {
                $row = 5;
            } elseif ($remaining === 7) {
                $row = 4; // evitar 3 + 4
            } elseif ($remaining === 6) {
                $row = 3;
            } else {
                $row = min(5, max(3, $remaining));
            }

            $distribution[] = $row;
            $remaining -= $row;
        }

        $index = 0;
        foreach ($distribution as $itemsPerRow) {
            echo '<div class="gallery-row">';
            for ($i = 0; $i < $itemsPerRow; $i++) {
                if (!isset($images[$index])) break;

                $imagePath = $images[$index];
                $imageName = 'Integrante ' . ($index + 1);
                $flexBasis = 'calc(100% / ' . $itemsPerRow . ' - 1rem)';

                echo '<div class="gallery-item" style="flex: 0 0 ' . $flexBasis . ';">';
                echo '<a href="' . $imagePath . '" class="glightbox" data-gallery="team">';
                echo '<img src="' . $imagePath . '" alt="' . $imageName . '">';
                echo '</a></div>';

                $index++;
            }
            echo '</div>';
        }
    }
}
