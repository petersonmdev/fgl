<section class="section section-fgl section-product py-5 my-5">
  <div class="container mb-5 pb-5">
    <div class="row">
      <div class="col-2 d-lg-block d-none carousel-vertical">
        <ul class="list-unstyled nav nav-tabs" id="myTab" role="tablist">
          <?php if (!empty($allImages)) :
            foreach ($allImages as $index => $image) : ?>
              <li class="d-block nav-item" data-target="#productSimple" data-slide-to="<?= $index ?>">
                <a class="nav-link <?= ($index==0) ? 'active' : '' ?>" id="home-tab" data-toggle="tab" href="#img00<?=$index?>" role="tab" aria-controls="img00<?=$index?>" aria-selected="true">
                  <img src="<?= $image ?>" alt="images" class="img-responsive img-product">
                </a>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>
      <div class="col-xs-5 col-lg-5 col-md-6 col-sm-12 image-product d-flex mb-5">
        <div id="productSimple" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner tab-content">
            <?php if (!empty($allImages)) :
              foreach ($allImages as $index => $image) : ?>
              <div class="carousel-item tab-pane <?= ($index==0) ? 'active' : '' ?>" id="img00<?=$index?>">
                <div class="box-notice-images position-relative">
                  <small>* Projetos de <b><?=$product['nome']?></b> entregues a empresas de vários setores.</small>
                  <a href="<?= $image ?>" class="glightbox" data-gallery="galeria">
                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                  </a>  
                </div>
                <figure class="zoom d-block w-100" style="background-image: url(<?= $image ?>)">
                  <img src="<?= $image ?>" />                  
                </figure>
                
              </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <a class="carousel-control-prev" href="#productSimple" role="button" data-slide="prev">
            <span class="glyph-icon flaticon-right-arrow" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#productSimple" role="button" data-slide="next">
            <span class="glyph-icon flaticon-right-arrow" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-xs-5 col-lg-5 col-md-6 col-sm-12 content-information-product">
        <div class="content-title-product mb-2">
          <h3 class="title-product text-uppercase poppins-black mb-3"><?=$product['nome']?></h3>
          <h6 class="reference-product mb-2">Categorias: <?= implode(", ", $product['categorias']) ?></h6>
          <small class="reference-product mb-2">SKU-<?= hash('crc32', createSlug($product['nome'])) ?></small>
          <div class="content-rating-product">
            <ul class="list-unstyled">
              <li class="d-inline"><i class="fas fa-star"></i></li>
              <li class="d-inline"><i class="fas fa-star"></i></li>
              <li class="d-inline"><i class="fas fa-star"></i></li>
              <li class="d-inline"><i class="fas fa-star"></i></li>
              <li class="d-inline"><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p class="mb-5"><?=$product['descricao']?></p>
        </div>
        <div class="cta-product">
          <a href="<?=$GLOBALS['link_wpp']."Quero um orçamento para linha de produto - ".$product['nome']?>" target="_black" class="btn btn-lg w-100 btn-fgl btn-fgl-cta">Solicite seu orçamento</a>
        </div>
      </div>
    </div>
  </div>
</section>
