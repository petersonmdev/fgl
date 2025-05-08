<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= $title ?> | <?= $GLOBALS['site_name']; ?></title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
  <link rel="shortcut icon" href="<?= asset_url('images/fgl-favicon.ico') ?>" type="image/x-icon">
  <link rel="icon" href="<?= asset_url('images/fgl-favicon.ico') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= asset_path('css') ?>">
  
</head>


<body>
  <div class="page-wrapper">
    
    <section class="header-uper d-none d-lg-block">
      <div class="container clearfix">
        <div class="row content-header-fgl">
          <div class="logo col-2">
            <figure>
              <a href="<?= route('') ?>">
                <img src="<?= asset_url('images/logo.png') ?>" alt="" width="200">
              </a>
            </figure>
          </div>

          <div class="right-side col-10 d-sm-none d-md-block">
              <ul class="d-flex content-menu action-header">
                  <li class="item item-menu">
                      <a class="link-menu active" href="<?= route('') ?>">Home</a>
                  </li>
                  <li class="item item-menu">
                      <a class="link-menu" href="<?= route('sobre-nos') ?>">Sobre nós</a>
                  </li>
                  <li class="item item-menu">
                      <a class="link-menu" href="<?= route('nossos-servicos') ?>">Nossos serviços</a>
                  </li>
                  <li class="item item-menu">
                      <a class="link-menu" href="<?= route('linha-de-produtos') ?>">Linha de produtos</a>
                  </li>
                  <li class="item item-menu">
                      <a class="link-menu" href="<?= route('clientes') ?>">Clientes</a>
                  </li>
                  <li class="item item-menu">
                      <a class="link-menu" href=".<?= route('contato') ?>">Contato</a>
                  </li>
              </ul>
          </div>
        </div>  
      </div>
    </section>
    
    <nav class="navbar navbar-default navbar-light navbar-fgl d-md-block d-lg-none">
      <div class="container">
        <nav class="navbar navbar-expand-lg w-100">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="flaticon-menu-button-of-three-horizontal-lines"></i>
          </button>
          <div class="logo logo-mobile d-md-block d-lg-none">
            <figure>
              <a href="<?= route('') ?>">
                <img src="<?= asset_url('images/logo.png') ?>" alt="" width="150">
              </a>
            </figure>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav nav-fill w-100">
                <li class="item item-menu">
                    <a class="link-menu active" href="<?= route('') ?>">Home</a>
                </li>
                <li class="item item-menu">
                    <a class="link-menu" href="<?= route('sobre-nos') ?>">Sobre nós</a>
                </li>
                <li class="item item-menu">
                    <a class="link-menu" href="<?= route('nossos-servicos') ?>">Nossos serviços</a>
                </li>
                <li class="item item-menu">
                    <a class="link-menu" href="<?= route('linha-de-produtos') ?>">Linha de produtos</a>
                </li>
                <li class="item item-menu">
                    <a class="link-menu" href="<?= route('clientes') ?>">Clientes</a>
                </li>
                <li class="item item-menu">
                    <a class="link-menu" href=".<?= route('contato') ?>">Contato</a>
                </li>
            </ul>
          </div>
        </nav>
      </div>
    </nav>