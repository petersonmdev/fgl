<?php $title_page = 'EQUIPE DE MONTAGEM TREINADA EM TODAS AS Nrs DE COMUNICAÇÃO VISUAL';
$subtitle_page = 'NR1, NR6, NR10, NR12, NR18, NR35';

render('partials/breadcrumb', [
    'title' => $title_page,
    'subtitle' => $subtitle_page
]); ?>

<section class="section-fgl section section-exemple">
    <div class="container">
    <?php 
        $dir = './images/fgl/treinamentos/';
        $images = glob($dir . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);
        ?>
        
        <div class="gallery-row">
            <?php foreach ($images as $image) { ?>
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

