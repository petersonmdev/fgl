
    <div class="container-fluid content-page-slider">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex">
                    <div class="content-hero-slide">
                        <h4 class="subtitle-session poppins-semibold text-uppercase color-primary mt-3">Bem vindo a FGL</h4>
                        <h1 class="section-title poppins-black my-3">AQUI SEU PROJETO GANHA FORMA, COR E VISIBILIDADE!</h1>
                        <p class="text-slider">Projetos sob medida em comunicação visual, do conceito à instalação, aliando design, funcionalidade e evidência da marca</p>
                        <div class="cta">
                            <a href="<?= $GLOBALS['link_contact_wpp']; ?>" class="btn btn-lg btn-fgl-cta my-3">Solicite um orçamento</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6">
                    <div class="slider-fgl-wrapper my-4">
                        <div class="hero-slider slider-fgl">
                            <?php if (!empty($imagesBanner)):
                            foreach ($imagesBanner as $index => $image) { ?>
                                <div class="slider-item-wrapper">
                                    <div class="slider-item slide1" style="background-image:url(<?= $image ?>)">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } 
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container-fluid content-page-slider-topo">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 info-box bg-secondary-fgl p-4">
                    <h4 class="poppins-bold pb-2">PROJETOS DE FACHADAS EM ACM</h4>
                    <p>Modernas, duráveis e com acabamento impecável para destacar sua fachada</p>
                    <!-- <a class="btn btn-fgl-transparent" href="/service.php&id=1">SAIBA MAIS <span>&rarr;</span></a> -->
                </div>

                <div class="col-12 col-md-4 info-box bg-primary-fgl p-4">
                    <h4 class="poppins-bold pb-2">PROJETO DE LETRAS CAIXA</h4>
                    <p>Sofisticação e destaque com letras em relevo em diversos materiais, com opções de iluminação para sua marca brilhar</p>
                    <!-- <a class="btn" href="./service.php&id=2">SAIBA MAIS <span>&rarr;</span></a> -->
                </div>

                <div class="col-12 col-md-4 info-box bg-secondary-fgl p-4">
                    <h4 class="poppins-bold pb-2">SINALIZAÇÃO INTERNA E EXTERNA</h4>
                    <p>Projetos de Tótens, Placas, Painéis entre outros serviços funcionais para dar mais visibilidade a sua marca e conhecimento do seu negócio</p>
                    <!-- <a class="btn btn-fgl-transparent" href="./service.php&id=2">SAIBA MAIS <span>&rarr;</span></a> -->
                </div>
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="container px-0">
            <div class="row no-gutters flex-column flex-lg-row">
            
            <!-- Imagem -->
            <div class="col-lg-6">
                <img src="<?= asset_url('images/fgl/empresa/01.jpg') ?>" alt="FGL Comunicação Visual - Fachada" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
            
            <!-- Conteúdo -->
            <div class="col-lg-6 d-flex flex-column justify-content-center p-4 p-md-5">
                <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-3">QUEM SOMOS</span>

                <h2 class="font-weight-bold text-uppercase mb-4">
                MAIS DO QUE FACHADAS,<br>
                DAMOS EVIDÊNCIA VISUAL E CONCEITO PARA SEU NEGÓCIO
                </h2>

                <p class="mb-4">
                A FGL Comunicação Visual, também denominada como "Fábrica Goiana de Luminosos", é uma empresa fundada pelo empreendedor Eurípedes Vieira, mais conhecido como “Galego”, que atua há mais de 48 anos no mercado, com grande dedicação e experiência em seus trabalhos.
                </p>

                <!-- Benefícios -->
                <div class="row mb-4">
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Projetos personalizados</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Atendimento Ágil</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Alto padrão de qualidade</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Produtos de ponta</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Cliente como prioridade</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Tecnologia</div>
                </div>

                <!-- Números -->
                <div class="row text-center text-white">
                <div class="col-4 mb-3 mb-md-0">
                    <h3 class="poppins-black d-block text-primary-fgl">+48</h3>
                    <small class="poppins-bold text-uppercase text-secondary-fgl text-muted">Anos de experiência</small>
                </div>
                <div class="col-4 mb-3 mb-md-0">
                    <h3 class="poppins-black d-block text-primary-fgl">+25</h3>
                    <small class="poppins-bold text-uppercase text-secondary-fgl text-muted">Especialistas</small>
                </div>
                <div class="col-4">
                    <h3 class="poppins-black d-block text-primary-fgl">+500</h3>
                    <small class="poppins-bold text-uppercase text-secondary-fgl text-muted">Clientes</small>
                </div>
                </div>

            </div>
            </div>
        </div>
    </section>

    <section class="work-process-section py-5">
        <div class="container">
            
            <!-- Título -->
            <div class="mb-5">
            <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">COMO TRABALHAMOS</span>
            <h2 class="font-weight-bold text-uppercase">Nossos Processos de Trabalho</h2>
            </div>

            <!-- Cards -->
            <div class="row">
            
                <!-- Card 1 -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="process-card h-100 p-4 border">
                    <i class="fa fa-comments fa-2x text-primary-fgl mb-3"></i>
                    <h5 class="text-uppercase font-weight-bold mb-3">Atendimento e proposta visual</h5>
                    <p>Entendemos as necessidades do seu negócio, criamos um projeto visual estratégico e apresentamos a proposta personalizada.</p>
                    </div>
                </div>
                
                <!-- Card 2 (destaque) -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="process-card h-100 p-4 bg-primary-fgl text-white">
                    <i class="fa fa-wrench fa-2x mb-3"></i>
                    <h5 class="text-uppercase font-weight-bold mb-3">Produção com materiais de alta qualidade</h5>
                    <p>Após aprovação, iniciamos a produção com tecnologia de ponta, garantindo acabamento e durabilidade.</p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="process-card h-100 p-4 border">
                    <i class="fa fa-home fa-2x text-primary-fgl mb-3"></i>
                    <h5 class="text-uppercase font-weight-bold mb-3">Instalação profissional e suporte</h5>
                    <p>Nossa equipe realiza a instalação com precisão e segurança, garantindo um resultado impecável — e suporte pós-entrega.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="carousel-infinite py-5">
        <div class="container-fluid overflow-hidden">
            <div class="carousel-track d-flex">
            <?php if (!empty($imagesProjects)):
                foreach ($imagesProjects as $index => $image) { ?>
                    <div class="carousel-item">
                        <img src="<?= $image ?>" alt=<?="Imagem-{$image}"?> class="img-fluid">
                    </div>
                <?php } ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="portfolio-section py-5">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-6 px-5">
                <div class="mb-5">
                    <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">Nossos serviços</span>
                    <h2 class="font-weight-bold text-uppercase">Projetos que transformam negócios</h2>
                </div>
                <p class="text-muted mb-4">
                Apresentamos com orgulho alguns dos trabalhos que realizamos ao longo dos anos.
                Cada projeto representa nosso compromisso com o design inteligente, a execução precisa
                e o resultado que gera valor real para nossos clientes. Veja como ajudamos marcas a se destacarem
                com fachadas modernas, criativas e funcionais.
                </p>
                <a href="<?= route('nossos-servicos') ?>" class="btn btn-fgl-cta my-3">
                Veja alguns dos nossos trabalhos
                </a>
            </div>
            <div class="col-md-6 position-relative d-none d-md-block" style="min-height: 500px;">
                <img src="<?= asset_url('images/fgl/fachadas/04.jpg') ?>" class="img-fluid shadow position-absolute" style="top: 0; right: 0; width: 65%; z-index: 1;">
                <img src="<?= asset_url('images/fgl/fachadas/jaicar.jpeg') ?>" class="img-fluid shadow position-absolute" style="top: 100px; left: 20px; width: 70%; z-index: 2;">
                <img src="<?= asset_url('images/fgl/fachadas/hospital-sao-francisco.jpg') ?>" class="img-fluid shadow position-absolute" style="bottom: 0; right: 40px; width: 75%; z-index: 3;">
            </div>
            </div>
        </div>
    </section>

    <section class="section hero-section py-5 bg-white">
        <div class="container-fluid">
            <div class="row align-items-center">                
                <div class="col-md-6 position-relative pl-md-0 mb-4">
                    <div class="video-wrapper position-relative">
                    <img src="<?= asset_url('images/capa-video.jpg') ?>" class="img-fluid w-100" id="videoCover" alt="Capa do vídeo">
                    <button class="play-button" id="playBtn">
                        <span>&#9658;</span>
                    </button>                    
                    <video id="promoVideo" class="w-100 d-none" controls>
                        <source src="https://www.instagram.com/reel/DEN__ROST6t/?igsh=MTl0c2N3cjduenFycQ==" type="video/mp4">
                        Seu navegador não suporta o vídeo.
                    </video>
                    </div>
                </div>                
                <div class="col-md-6 px-5">
                    <div class="mb-5">
                        <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">Sua marca em boas mãos</span>
                        <h2 class="font-weight-bold text-uppercase">Comunicação visual estratégica para transformar percepção em valor</h2>
                    </div>
                    <p class="text-muted fs-5">
                        Entregamos soluções visuais completas que conectam sua marca ao público com clareza, criatividade e impacto. Somos especialistas em transformar ideias em presença visual marcante.
                    </p>
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
    </section>

