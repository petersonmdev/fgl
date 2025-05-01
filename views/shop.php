<section class="section-products-featured section section-fgl">
  <div class="container">
    <div class="row align-items-center">
      <div class="container">
          <div class="row">
              <?php foreach ($produtos as $produto) { ?>
                  <div class="col-md-4 product mb-5">
                      <div class="content-img-product">
                        <img class="img-product" src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                      </div>
                      <div class="content-description-product p-4">
                        <div class="product-name pt-2 mb-2">
                            <h4 class="poppins-extrabold text-uppercase"><?php echo $produto['nome']; ?></h4>
                        </div>
                        <div class="category-name py-2 mb-2">
                            <div class="row">
                                <?php foreach ($produto['categorias'] as $categoria) { ?>
                                    <div class="col-12">
                                        <i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> 
                                        <?php echo $categoria; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <a href="<?php echo $produto['link']; ?>" class="btn btn-lg btn-fgl-cta">Ver detalhes</a>
                      </div>
                  </div>
              <?php } ?>
          </div>
      </div>
    </div>
  </div>
</section>

