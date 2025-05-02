<section class="testimonial-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <img src="<?= asset_url('images/clients.jpg') ?>" alt="Clientes" class="w-100">
            </div>
        </div>
    </div>
</section> 

<section class="testimonial-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="mb-5">
                    <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">O que nossos clientes dizem</span>
                    <h2 class="font-weight-bold text-uppercase">Resultados reais que falam por si</h2>
                </div>
                <p class="text-muted fs-5">
                Confira algumas opiniões de quem já transformou sua comunicação visual com a nossa equipe. A satisfação dos nossos clientes é reflexo do nosso compromisso com qualidade, criatividade e pontualidade.
                </p>
            </div>
            <div class="col-md-6">
                <div class="testimonial-slider">
                <?php if (isset($reviews) && is_array($reviews)) : ?>
                        <?php foreach ($reviews as $review) { ?>
                            <div class="testimonial-box p-4 border">
                                <div class="stars mb-2 text-warning">
                                    <?php for ($i = 0; $i < $review['stars']; $i++) { ?>
                                        <i class="fas fa-star"></i>
                                    <?php  } ?>
                                </div>
                                <p class="text-muted mb-3"><?= $review['review'] ?></p>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="testimonial-avatar mr-3"></div>
                                    <div>
                                        <strong class="d-block font-weight-black"><?= $review['nome'] ?></strong>
                                        <span class="text-primary-fgl fw-bold">CLIENTE FGL <a href="<?= $review['link'] ?>" class="ml-2 btn btn-primary-fgl" target="_blank">ver avaliação</a></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php else: ?>
                        <p>Nenhuma avaliação encontrada.</p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="about-section">
    <div class="container px-0">
        <div class="row no-gutters flex-column flex-lg-row">
        
        <!-- Conteúdo -->
        <div class="col-lg-6 d-flex flex-column justify-content-center p-4 p-md-5">
            <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-3">Nossos serviços</span>

            <h2 class="font-weight-bold text-uppercase mb-4">
                PROJETOS QUE TRANSFORMAM NEGOCIOS
            </h2>

            <p class="mb-4">
            Apresentamos com orgulho alguns dos trabalhos que realizamos ao longo dos anos. Cada projeto representa nosso compromisso com o design inteligente, a execução precisa e o resultado que gera valor real para nossos clientes. Veja como ajudamos marcas a se destacarem com fachadas modernas, criativas e funcionais.
            </p>
            <a href="<?= route('nossos-servicos') ?>" class="btn btn-fgl-cta my-3">
            Veja alguns dos nossos trabalhos
            </a>

        </div>

        <div class="col-lg-6">
            <img src="<?= asset_url('images/map.png') ?>" alt="FGL Comunicação Visual - Fachada" class="img-fluid w-100 h-100 object-fit-cover">
        </div>
        </div>
    </div>
</section>

