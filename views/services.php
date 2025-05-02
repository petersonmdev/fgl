<section class="work-process-section py-5">
    <div class="container">
        
        <div class="mb-5">
        <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">Nossos principais serviços</span>
        <h2 class="font-weight-bold text-uppercase">somos especialistas</h2>
        </div>
        <div class="mb-5">
            <p>Oferecemos soluções completas em comunicação visual, com foco em qualidade, criatividade e execução precisa. Da criação à instalação, entregamos resultados que fortalecem a identidade da sua marca e transformam espaços em experiências visuais marcantes.</p>
        </div>

        <!-- Cards -->
        <div class="row">
        
            <!-- Card 1 -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="process-card h-100 p-4 border">
                <h5 class="text-uppercase font-weight-bold mb-3">PROJETOS DE FACHADAS EM ACM</h5>
                <p>Modernas, duráveis e com acabamento impecável para destacar sua fachada.</p>
                <!-- <a class="btn btn-fgl-transparent" href="#">SAIBA MAIS <span>&rarr;</span></a> -->
                </div>
            </div>
            
            <!-- Card 2 (destaque) -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="process-card h-100 p-4 bg-primary-fgl text-white">
                <h5 class="text-uppercase font-weight-bold mb-3">PROJETO DE LETRAS CAIXA</h5>
                <p>Sofisticação e destaque com letras em relevo em diversos materiais, com opções de iluminação para sua marca brilhar</p>
                <!-- <a class="btn" href="#">SAIBA MAIS <span>&rarr;</span></a> -->
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="process-card h-100 p-4 border">
                <h5 class="text-uppercase font-weight-bold mb-3">SINALIZAÇÃO INTERNA E EXTERNA</h5>
                <p>Projetos de Tótens, Placas, Painéis entre outros serviços funcionais para dar mais visibilidade a sua marca e conhecimento do seu negócio</p>
                <!-- <a class="btn btn-fgl-transparent" href="#">SAIBA MAIS <span>&rarr;</span></a> -->
                </div>
            </div>

        </div>
    </div>
</section>

<section class="services-section py-5">
    <div class="container">
        <div class="mb-5">
            <span class="section-title d-inline-block position-relative text-uppercase font-weight-bold text-primary-fgl mb-2">Inspiração em cada detalhe</span>
            <h2 class="font-weight-bold text-uppercase">Projetos em destaque</h2>
        </div>
        <div class="mb-5">
            <p>Explore uma seleção de fotos dos nossos trabalhos mais recentes. Cada projeto reflete o cuidado, a técnica e o olhar estratégico que aplicamos em cada etapa — da ideia ao resultado final.</p>
        </div>

        <?php if (!empty($imagesServicos)) {
            renderGalleryFromImages($imagesServicos);
        } ?> 
            
    </div>
</section>

<section class="quote-section bg-primary-fgl pb-5 mb-5">
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

