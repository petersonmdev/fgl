<?php require('_header.php'); ?>

    <!-- Breadcrumb -->
    <section class="section-fgl section section-breadcrumb">
        <div class="container">
          <div class="section-title text-center mb-0">
            <h3>Meu carrinho</h3>                    
          </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <!--Main container -->
    <section class="section section-fgl section-cart">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 content-cart-product-fgl">
            <div class="section-title text-left">
              <h3>Meus produtos</h3>
            </div>
            <div class="p-3 mb-2 item-product-cart card-fgl card">
              <div class="row no-gutters">
                <div class="col-sm-3 col-xs-12 content-img-card-product">
                  <button type="button" class="close d-sm-none d-xs-block" data-dismiss="card" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <img src="images/gallery/1.jpg" class="card-img" alt="produto carrinho">
                </div>
                <div class="col-sm-9 col-xs-12 content-text-card-product">
                  <button type="button" class="close d-none d-sm-block" data-dismiss="card" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="card-body">
                    <h5 class="card-title title-product">AneI 03 Pontos de Luz</h5>
                    <p class="card-text reference-product"><small class="text-muted">fgl-1234567890</small></p>
                    <ul class="card-text list-unstyled card-product-cart card-variable-cart">
                      <li class="d-inline"><span>Modelo: <b>fgl-123</b></span></li>
                      <li class="d-inline"><span>Tamanho: <b>14</b></span></li>
                    </ul>
                    <div class="card-text card-product-cart card-price-cart">
                      <div class="container">
                        <div class="row align-items-end">
                          <div class="p-0 col-2 text-left">
                              <label>
                                <span>Quantidade:</span>
                                <input class="form-control inpt-fgl-third" type="number" value="1" name="qtdd-product">
                              </label>
                          </div>
                          <div class="p-0 col-10 text-right">
                            <ul class="price-card list-unstyled">
                              <li class="d-inline"><span>Preço: R$79,99</span></li>
                              <li class="d-inline"><span><b>Subtotal: R$79,99</b></span></li>
                            </ul>
                          </div>
                        </div>                        
                      </div>                      
                    </div>
                  </div>
                </div>
              </div>              
            </div>

            <div class="p-3 mb-2 item-product-cart card-fgl card">
              <div class="row no-gutters">
                <div class="col-sm-3 col-xs-12 content-img-card-product">
                  <button type="button" class="close d-sm-none d-xs-block" data-dismiss="card" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <img src="images/gallery/2.jpg" class="card-img" alt="produto carrinho">
                </div>
                <div class="col-sm-9 col-xs-12 content-text-card-product">
                  <button type="button" class="close d-none d-sm-block" data-dismiss="card" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="card-body">
                    <h5 class="card-title title-product">AneI 04 Pontos de Luz</h5>
                    <p class="card-text reference-product"><small class="text-muted">fgl-1234567890</small></p>
                    <ul class="card-text list-unstyled card-product-cart card-variable-cart">
                      <li class="d-inline"><span>Modelo: <b>fgl-123</b></span></li>
                      <li class="d-inline"><span>Tamanho: <b>14</b></span></li>
                    </ul>
                    <div class="card-text card-product-cart card-price-cart">
                      <div class="container">
                        <div class="row align-items-end">
                          <div class="p-0 col-2 text-left">
                              <label>
                                <span>Quantidade:</span>
                                <input class="form-control inpt-fgl-third" type="number" value="1" name="qtdd-product">
                              </label>
                          </div>
                          <div class="p-0 col-10 text-right">
                            <ul class="price-card list-unstyled">
                              <li class="d-inline"><span>Preço: R$79,99</span></li>
                              <li class="d-inline"><span><b>Subtotal: R$79,99</b></span></li>
                            </ul>
                          </div>
                        </div>                        
                      </div>                      
                    </div>
                  </div>
                </div>
              </div>              
            </div>

            <div class="btn-group-fgl justify-content-end text-right">
              <a href="product.php" title="submit" class="d-inline mb-2 btn btn-fgl btn-fgl-second">continuar comprando</a>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 content-details-fgl">
            <div class="section-title text-left">
              <h3>Detalhes da compra</h3>
            </div>

            <div class="p-3 mb-2 cep-product-cart card-fgl card">
              <div class="row no-gutters">
                <div class="col-12 content-cep-card-product">
                  <h5 class="w-100 mb-2">Calcule o frete</h5>
                  <div class="card-body input-group">
                    <input class="form-control inpt-fgl" type="text" name="cep" placeholder="Digite seu CEP..." aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary btn-fgl" type="button" id="button-addon2">Calcular</button>
                    </div>
                  </div>
                  <a class="w-100" href="#" title="">Não sei meu CEP</a>
                </div>
              </div>              
            </div>

            <div class="p-3 mb-2 cep-product-cart card-fgl card">
              <div class="row no-gutters">
                <div class="col-12 content-cep-card-product">
                  <h5 class="w-100 mb-2">Cupom de desconto</h5>
                  <div class="card-body input-group">
                    <input class="form-control inpt-fgl" type="text" name="cupom" placeholder="Digite seu cupom..." aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary btn-fgl" type="button" id="button-addon2">Adicionar</button>
                    </div>
                  </div>
                </div>
              </div>              
            </div>

            <div class="p-3 mb-3 cep-product-cart card-fgl card">
              <div class="row no-gutters">
                <div class="col-12 content-cep-card-product">
                  <h5 class="w-100 mb-2">Resumo do pedido</h5>
                  <ul class="card-body mb-0 list-unstyled list-resume-price">
                    <li class="d-block w-100">
                      <div class="container">
                        <div class="row">
                          <div class="col-6 text-left">
                            <h6>Subtotal</h6>
                          </div>
                          <div class="col-6 text-right">
                            <h6>R$ 79,90</h6>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="d-block w-100">
                      <div class="container">
                        <div class="row">
                          <div class="col-6 text-left">
                            <h6>Desconto</h6>
                          </div>
                          <div class="col-6 text-right">
                            <h6>R$ 0,00</h6>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="d-block w-100">
                      <div class="container">
                        <div class="row">
                          <div class="col-6 text-left">
                            <h6>Frete</h6>
                          </div>
                          <div class="col-6 text-right">
                            <h6>R$ 0,00</h6>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="d-block w-100">
                      <div class="container">
                        <div class="row">
                          <div class="col-6 text-left">
                            <h6><b>TOTAL</b></h6>
                          </div>
                          <div class="col-6 text-right">
                            <h6><b>R$ 79,90</b></h6>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>              
            </div>

            <a href="checkout.php" title="submit" class="d-block mb-4 btn btn-fgl btn-fgl-cta">Finalizar compra</a>
          </div>
        </div>
      </div>
    </section>

<?php require('_footer.php'); ?>