<?php require('_header.php'); ?>

    <!-- Breadcrumb -->
    <section class="section-fgl section section-breadcrumb">
        <div class="container">
          <div class="items-breadcrumb d-block">
            <ul class="list-unstyled d-block text-center">
              <li class='d-inline'><a href="#" title="">Home</a></li>
              <li class='d-inline'><i class="flaticon-right-arrow"></i></li>
              <li class='d-inline'><a href="#" title="">Mais vendidos</a></li>
              <li class='d-inline'><i class="flaticon-right-arrow"></i></li>
              <li class='d-inline'><a href="#" title="">Alianças</a></li>
            </ul>
          </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <!--Main container -->
    <section class="section section-fgl section-product">
      <div class="container">
        <div class="row">
          <div class="col-2 d-lg-block d-none carousel-vertical">
            <ul class="list-unstyled nav nav-tabs" id="myTab" role="tablist">
              <li class="d-block nav-item" data-target="#productSimple" data-slide-to="0">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#img001" role="tab" aria-controls="img001" aria-selected="true">
                  <img src="images/products/1.jpeg" alt="images" class="img-responsive img-product">
                </a>
              </li>
              <li class="d-block nav-item" data-target="#productSimple" data-slide-to="1">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#img002" role="tab" aria-controls="img002" aria-selected="true">
                  <img src="images/products/4.jpeg" alt="images" class="img-responsive img-product">
                </a>
              </li>
              <li class="d-block nav-item" data-target="#productSimple" data-slide-to="2">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#img003" role="tab" aria-controls="img003" aria-selected="true">
                  <img src="images/products/5.jpeg" alt="images" class="img-responsive img-product">
                </a>
              </li>
            </ul>
          </div>
          <div class="col-xs-5 col-lg-5 col-md-6 col-sm-12 image-product d-flex mb-5">
            <div id="productSimple" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#productSimple" data-slide-to="0" class="active"></li>
                <li data-target="#productSimple" data-slide-to="1"></li>
                <li data-target="#productSimple" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner tab-content">
                <div class="carousel-item tab-pane active" id="img001">
                  <figure class="zoom d-block w-100" style="background-image: url(images/products/1.jpeg)">
                    <img src="images/products/1.jpeg" />
                  </figure>
                </div>
                <div class="carousel-item tab-pane" id="img002">
                  <figure class="zoom d-block w-100" style="background-image: url(images/products/2.jpeg)">
                    <img src="images/products/2.jpeg" />
                  </figure>
                </div>
                <div class="carousel-item tab-pane" id="img003">
                  <figure class="zoom d-block w-100" style="background-image: url(images/products/3.jpeg)">
                    <img src="images/products/3.jpeg" />
                  </figure>
                </div>
              </div>
              <a class="carousel-control-prev" href="#productSimple" role="button" data-slide="prev">
                <span class="flaticon-arrow-point-to-right" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#productSimple" role="button" data-slide="next">
                <span class="flaticon-arrow-point-to-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-xs-5 col-lg-5 col-md-6 col-sm-12 content-information-product">
            <div class="content-title-product mb-2">
              <h3 class="title-product mb-3">AneI 03 Pontos de Luz</h3>
              <h6 class="reference-product"><strong>Referência</strong> fgl-1234567890</h6>
              <h6 class="reference-product"><strong>Modelo</strong> fgl123456</h6>
            </div>
            <div class="content-rating-product">
              <ul class="list-unstyled">
                <li class="d-inline"><i class="fas fa-star"></i></li>
                <li class="d-inline"><i class="fas fa-star"></i></li>
                <li class="d-inline"><i class="fas fa-star"></i></li>
                <li class="d-inline"><i class="fas fa-star"></i></li>
                <li class="d-inline"><i class="fas fa-star"></i></li>
              </ul>
            </div>
            <div class="content-price-product mb-4">
              <div class="text-price-product mb-4">
                <h3 class="last-price"><s>R$59,99</s></h3>
                <h1 class="price">R$39,99</h1>
                <h4 class="installment-price">ou <b>6x</b> de <b>R$6,70</b> sem juros</h4>
              </div>
            </div>
            <div class="content-select-size mb-4">
                <h6 class="mb-2">Escolha o tamanho:</h6>
                  <ul class="list-unstyled mb-1 justify-content-start nav nav-tabs" id="selectSize" role="tablist">
                    <li class="d-inline mr-2 mb-2 nav-item" data-target="" data-slide-to="0">
                      <a href="#" class="btn btn-lg p-4 nav-link active" id="tabSize001" data-toggle="tab" role="tab" aria-controls="" aria-selected="true">14</a>
                    </li>
                    <li class="d-inline mr-2 mb-2 nav-item" data-target="" data-slide-to="1">
                      <a href="#" class="btn btn-lg p-4 nav-link" id="tabSize002" data-toggle="tab" role="tab" aria-controls="" aria-selected="false">15</a>
                    </li>
                    <li class="d-inline mr-2 mb-2 nav-item" data-target="" data-slide-to="2">
                      <a href="#" class="btn btn-lg p-4 nav-link" id="tabSize003" data-toggle="tab" role="tab" aria-controls="" aria-selected="false">16</a>
                    </li>
                    <li class="d-inline mr-2 mb-2 nav-item" data-target="" data-slide-to="3">
                      <a href="#" class="btn btn-lg p-4 nav-link" id="tabSize004" data-toggle="tab" role="tab" aria-controls="" aria-selected="false">18</a>
                    </li>
                    <li class="d-inline mr-2 mb-2 nav-item" data-target="" data-slide-to="4">
                      <a href="#" class="btn btn-lg p-4 nav-link" id="tabSize005" data-toggle="tab" role="tab" aria-controls="" aria-selected="false">19</a>
                    </li>
                    <li class="d-inline mr-2 mb-2 nav-item" data-target="" data-slide-to="5">
                      <a href="#" class="btn btn-lg p-4 nav-link" id="tabSize006" data-toggle="tab" role="tab" aria-controls="" aria-selected="false">20</a>
                    </li>
                    <li class="d-inline mr-2 mb-2 nav-item" data-target="" data-slide-to="6">
                      <a href="#" class="btn btn-lg p-4 nav-link" id="tabSize006" data-toggle="tab" role="tab" aria-controls="" aria-selected="false">21</a>
                    </li>
                  </ul>
            </div>
            <div class="cta-product">
              <button type="button" class="btn btn-fgl btn-fgl-cta">comprar</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 description-product mt-4">
            <div class="product-post collapse" id="descriptionProduct">
              <!-- <div class="card card-body"> -->
                <h2 class="product-post-title">Descrição do produto</h2>

                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                <hr>
                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <h2>Heading</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <pre><code>Example code block</code></pre>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                <ol>
                    <li>Vestibulum id ligula porta felis euismod semper.</li>
                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                    <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                </ol>
                <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
              <!-- </div> -->
              
            </div>
            <a class="btn btn-fgl btn-fgl-first btn-fgl-see-more collapsed" data-toggle="collapse" href="#descriptionProduct" role="button" aria-expanded="false" aria-controls="descriptionProduct"></a>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-fgl section-product-sugestion mb-5 mt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title text-center mb-3">
              <h3>Talvez você se interesse</h3>                    
            </div>
          </div>
            <div id="sugestions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#sugestions" data-slide-to="0" class="active"></li>
                <li data-target="#sugestions" data-slide-to="1"></li>
              </ol>

              <div class="carousel-inner row w-100 mx-auto">              
                <div class="carousel-item col-12 active">
                  <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/1.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/2.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/3.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/4.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/5.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/6.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item col-12">
                  <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/6.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/1.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/2.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/3.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/4.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                      <div class="inner-box">
                          <div class="img_holder">
                              <a href="#">
                                  <img src="images/products/5.jpeg" alt="images" class="img-responsive img-product">
                              </a>
                          </div>
                          <div class="image-content text-center">
                              <a href="#">
                                <span class="product-name">Nome do produto</span>
                                <h5 class="price">R$39,99</h5>
                              </a>
                              <a href="#" class="btn btn-lg btn-fgl-first">Comprar</a>
                              <a href="#" class="btn btn-lg btn-fgl-second">Add carrinho</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#sugestions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#sugestions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
                </div>
            
          </div>
        </div>
      </div>
    </section>

<?php require('_footer.php'); ?>

