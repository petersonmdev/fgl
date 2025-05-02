<section class="section-fgl section section-exemple">
    <div class="container">
    <div class="gallery-row">
        <?php foreach ($imagesTreinaments as $image) { ?>
            <div class="gallery-item" style="flex: 0 0 calc(100% / 2 - 1rem);">
                <a href="<?= $image ?>" class="glightbox" data-gallery="team">
                    <img src="<?= $image ?>" alt="Treinamento" style="min-height: 300px">
                </a>
            </div>
        <?php } ?>
    </div>
    <p>As Normas Regulamentadoras (Nrs), também conhecidas como NRs, são diretrizes que definem procedimentos e regras de segurança e saúde do trabalho, essenciais para proteger os trabalhadores de acidentes e doenças ocupacionais. Elas são obrigatórias para empresas e empregadores, estabelecendo requisitos mínimos para garantir um ambiente de trabalho seguro e saudável. </p>
    </div>
</section>

