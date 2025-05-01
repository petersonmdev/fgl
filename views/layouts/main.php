<?php require __DIR__ . '/../partials/header.php'; ?>

<?php if (isset($show_breadcrumb) && $show_breadcrumb): ?>
    <?php renderBreadcrumb($title ?? $GLOBALS['site_name'], $subtitle ?? ''); ?>
<?php endif; ?>

<?= isset($content) ? $content : '' ?>

<?php require __DIR__ . '/../partials/footer.php'; ?>
