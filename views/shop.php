<section class="section-products-featured section section-fgl">
  <div class="container">
    <div class="row align-items-center">
      <div class="container">
          <div class="row">
              <?php foreach ($products as $produt) { ?>
                  <div class="col-md-4 product mb-5">
                      <div class="content-img-product">
                        <img class="img-product" src="<?php echo $produt['imagem']; ?>" alt="<?php echo $produt['nome']; ?>">
                      </div>
                      <div class="content-description-product p-4">
                        <div class="product-name pt-2 mb-2">
                            <h4 class="poppins-extrabold text-uppercase"><?php echo $produt['nome']; ?></h4>
                        </div>
                        <div class="category-name py-2 mb-2">
                            <div class="row">
                                <?php foreach ($produt['categorias'] as $category) { ?>
                                    <div class="col-12">
                                        <i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> 
                                        <?php echo $category; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <a href="<?php echo $produt['link']; ?>" class="btn btn-lg btn-fgl-cta w-100">Ver detalhes</a>
                      </div>
                  </div>
              <?php } ?>
          </div>
      </div>
    </div>
  </div>
</section>

