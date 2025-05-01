        
<section class="about-section">
    <div class="container px-0">
        <div class="row no-gutters flex-column flex-lg-row">
            <div class="col-lg-6 position-relative">
                <img src="<?= asset_url('images/fgl/empresa/01.jpg') ?>" alt="FGL Comunicação Visual - Fachada" class="img-fluid w-100 h-100 object-fit-cover">
                <img src="<?= asset_url('images/fundador.jpg') ?>" alt="Fundador FGL" class="position-absolute img-fluid rounded shadow imagem-fundador">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center p-4 p-md-5">
                <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-3">QUEM SOMOS</span>

                <h2 class="font-weight-bold text-uppercase mb-4">
                    MAIS DO QUE FACHADAS,<br>
                    DAMOS EVIDÊNCIA VISUAL E CONCEITO PARA SEU NEGÓCIO
                </h2>

                <p class="mb-4">
                    A FGL Comunicação Visual, também denominada como "Fábrica Goiana de Luminosos", é uma empresa fundada pelo empreendedor Eurípedes Vieira, mais conhecido como “Galego”, que atua há mais de 48 anos no mercado, com grande dedicação e experiência em seus trabalhos.
                </p>

                <div class="row mb-4">
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Projetos personalizados</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Atendimento Ágil</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Alto padrão de qualidade</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Produtos de ponta</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Cliente como prioridade</div>
                    <div class="col-sm-6"><i class="fa fa-check-circle text-primary-fgl" aria-hidden="true"></i> Tecnologia</div>
                </div>

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

<section class="pilares-section py-5">
    <div class="container">
        <div class="mb-5">
            <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">NOSSOS PILARES</span>
            <h2 class="font-weight-bold text-uppercase">NOSSA ESSÊNCIA, NOSSO PROPÓSITO</h2>
        </div>
        <p class="text-muted mb-5">Conheça os pilares que nos guiam e inspiram a criar soluções visuais que geram impacto, conexão e resultados para nossos clientes.</p>

        <div class="row">
        <!-- Missão -->
        <div class="col-md-4 mb-4">
            <div class="pilar-card h-100 border p-4">
            <div class="icon mb-3">
                <i class="fas fa-bullseye fa-2x"></i>
            </div>
            <h5 class="font-weight-bold text-uppercase mb-3">Missão</h5>
            <p class="text-muted mb-0">
                Oferecer aos nossos clientes, de forma segura, com responsabilidade social e ambiental, a mais alta qualidade em produtos e serviços; ser líder em qualidade, custo e satisfação do cliente; trabalhar de forma integrada com nossos colaboradores, para alcançarmos um único objetivo: a excelência no atendimento.
            </p>
            </div>
        </div>

        <!-- Visão -->
        <div class="col-md-4 mb-4">
            <div class="pilar-card h-100 bg-primary-fgl text-white p-4">
            <div class="icon mb-3">
                <i class="fas fa-eye fa-2x"></i>
            </div>
            <h5 class="font-weight-bold text-uppercase mb-3">Visão</h5>
            <p class="mb-0">
                Consolidar-se como uma organização empresarial com liderança no segmento de COMUNICAÇÃO VISUAL, para alcançar reconhecimento pela excelência em produtos e serviços. Satisfazer nossos clientes, atendendo às suas necessidades com ética, honestidade, transparência e competência.
            </p>
            </div>
        </div>

        <!-- Valores -->
        <div class="col-md-4 mb-4">
            <div class="pilar-card h-100 border p-4">
            <div class="icon mb-3">
                <i class="fas fa-hand-holding-heart fa-2x"></i>
            </div>
            <h5 class="font-weight-bold text-uppercase mb-3">Valores</h5>
            <p class="text-muted mb-0">
                Fé, Honestidade, Humildade, Comprometimento, Transparência, União.
            </p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="equipe-section py-5">
    <div class="container">
        <div class="mb-5">
            <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">Nosso Time</span>
            <h2 class="font-weight-bold text-uppercase">Equipe dos Sonhos</h2>
        </div>

        <?php if (!empty($imagesEquipe)) {
            renderGalleryFromImages($imagesEquipe);
        } ?>       
            
    </div>
</section>

<section class="quote-section bg-primary-fgl">
    <div class="quote-container">
        <div class="quote-image">
            <img src="<?= asset_url('images/fgl/empresa/01.jpg') ?>" alt="FGL Fachada">
        </div>
        <div class="quote-info">
            <div class="quote-box">
                <div class="quote-icon"><i class="fa fa-phone text-primary-fgl" aria-hidden="true"></i></div>
                <div>
                    <h3>SOLICITE UM ORÇAMENTO</h3>
                    <p><a href="<?= $GLOBALS['link_contact_wpp'] ?>">(62) 99941-7915 <span class="whatsapp text-secondary-fgl"><i class="flaticon-whatsapp" aria-hidden="true"></i> WHATSAPP</span></a></p>
                    <p><a href="tel:6232940852">(62) 3294-0852</a></p>
                </div>
            </div>
            <div class="quote-text">
                <h3 class="text-white poppins-extrabold text-uppercase">"ALTA QUALIDADE<br>É NOSSA<br>PRIORIDADE"</h3>
            </div>
        </div>
    </div>
</section>

<section class="section hero-section py-5 bg-white">
    <div class="container-fluid">
        <div class="row align-items-center">                
            <div class="col-md-6 position-relative pl-0">
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

<section class="about-section">
    <div class="container px-0">
        <div class="row no-gutters flex-column flex-lg-row">
            <div class="col-lg-6 d-flex flex-column justify-content-center p-4 p-md-5">
                <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-3">onde nos encontrar</span>

                <h2 class="font-weight-bold text-uppercase mb-4">
                    Estamos aqui para atender você
                </h2>

                <p class="mb-4">
                Confira nosso horário de funcionamento e venha nos visitar. Nossa equipe está pronta para te receber e transformar suas ideias em projetos incríveis.
                </p>

                <div class="row mb-4">
                    <div class="col-md-1 quote-icon m-0">
                        <i class="fa fa-calendar-o text-primary-fgl" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11">
                    <div class="business-hours">
                        <h5 class="poppins-black">SEGUNDA À QUINTA:</h5>
                        <p>7:30 às 11:30 e das 13:00 às 18:00 hs</p>
                        
                        <h5 class="poppins-black">SEXTA:</h5>
                        <p>7:30 às 11:30 e das 13:00 às 17:00 hs</p>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-1 quote-icon m-0">
                        <i class="fa fa-map-marker text-primary-fgl" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11">
                    <div class="address">
                        <p><?= $GLOBALS['site_address'] ?></p>
                    </div>  
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-4 p-md-5 position-relative">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2273.157331117224!2d-49.286307208294325!3d-16.627787849171828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef37d9fbb6ff5%3A0x57bf4efa841f6fbc!2sFGL%20Comunica%C3%A7%C3%A3o%20Visual%20-%20Fachadas%20para%20Lojas%20e%20Empresas%2C%20Fachada%20em%20ACM%2C%20Letras%20Caixa%2C%20Luminosos%2C%20Pain%C3%A9is%2C%20T%C3%B3tens%20(Goi%C3%A2nia)!5e0!3m2!1spt-BR!2sbr!4v1745993717254!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

