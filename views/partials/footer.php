    <!--footer-main-->
    <section class="section-footer-cta pt-5 mt-5 bg-primary-fgl text-left">
      <div class="container">
        <div class="row">
          <div class="col-12 logo-slider bg-white py-4">
            <?php $clients = getImagesFromDirectory('clients'); 
            if (!empty($clients)){
              foreach ($clients as $index => $image) { ?>
              <div><img src="<?=$image?>" alt="<?=$index?>"></div>
            <?php }
            } ?>
          </div>
          <div class="col-12 footer-cta">
            <h1 class="poppins-black title py-4">ELEVE SEU PROJETO A OUTRO NÍVEL</h1>
            <a href="<?= $GLOBALS['link_contact_wpp'] ?>" class="btn btn-lg btn-secondary-fgl">FAÇA SEU ORÇAMENTO</a>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer-main footer-fgl">      
      <div class="container-fluid bg-secondary-fgl p-0">
        <div class="container p-0">
          <div class="footer-top">            
              <div class="row">
                <div class="col-md-4 col-12 mb-4">
                    <h6 class="title-footer-top">Facilidades</h6>
                    <p>Projetos Exclusivos.</p>
                    <p>Pague em até 48x no cartão BNDS.</p>
                    <p>Atendimento em todo Brasil.</p>
                    <img src="<?= asset_url('images/selo.png') ?>" alt="8 Anos" class="py-2">
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <h6 class="title-footer-top">Navegação</h6>
                    <ul class="menu-link menu-footer-navegation">
                      <li><a href="<?= route('') ?>">Home</a></li>
                      <li><a href="<?= route('sobre-nos') ?>">Sobre nós</a></li>
                      <li><a href="<?= route('nossos-servicos') ?>">Nossos serviços</a></li>
                      <li><a href="<?= route('linha-de-produtos') ?>">Linha de produtos</a></li>
                      <li><a href="<?= route('clientes') ?>">Clientes</a></li>
                      <li><a href="<?= route('contato') ?>">Contato</a></li>
                      <li><a href="<?= route('politica-de-privacidade') ?>">Politica de privacidade</a></li>
                      <li><a href="<?= route('termo-de-uso') ?>">Termo de uso</a></li>
                      <li><a href="<?= route('treinamentos') ?>">Treinamentos</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <h3 class="title-footer-top">Contato</h3>
                    <div class="col-12 mb-4 p-0 content-newsletter-fgl-bottom">
                        <div class="localization-footer pt-3">
                            <p><span class="d-block"><i class="fa fa-map-marker text-primary-fgl" aria-hidden="true"></i> <?= $GLOBALS['site_address'] ?></span></p>
                        </div>
                        <div class="contact-footer pt-3">
                            <p><a href="maito:<?= $GLOBALS['site_email'] ?>" class="btn-white-fgl"><span class="d-block"><i class="fa fa-map-marker text-primary-fgl" aria-hidden="true"></i> <?= $GLOBALS['site_email'] ?></span></a></p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container clearfix">
              <div class="row">
                <div class="copyright-text col-12 col-md-9">
                  <p><strong><?= $GLOBALS['site_name'] ?> - CNPJ: <?= $GLOBALS['site_cnpj'] ?></strong> &copy; Todos direitos reservados, <?php echo Date('Y'); ?>
                </div>

                <div class="footer-bottom-link col-12 col-md-3 text-right">
                  <h6 class="mb-2 text-uppercase">
                    Desenvolvido por:
                  </h6>
                  <a href="http://petersonmacedo.com.br" target="_blank" class="logo-peterson">
                    <img src="<?= asset_url('/images/logo-peterson.png') ?>" alt="" class="img-responsive">
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </footer>
    <!--End footer-main-->

  </div>
  <!--End pagewrapper-->

  <script src="<?= asset_url('plugins/jquery.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="<?= asset_url('plugins/bootstrap.min.js') ?>"></script>
  <script src="<?= asset_url('plugins/bootstrap-select.min.js') ?>"></script>
  <!-- Slick Slider -->
  <script src="<?= asset_url('plugins/slick/slick.min.js') ?>"></script>
  <!-- FancyBox -->
  <script src="<?= asset_url('plugins/fancybox/jquery.fancybox.min.js') ?>"></script>
  <!-- Zoom -->
  <script src="<?= asset_url('plugins/jquery.zoom.min.js') ?>"></script>

  <script src="<?= asset_url('plugins/jquery.lettering.js') ?>"></script>
  <script src="<?= asset_url('plugins/validate.js') ?>"></script>
  <script src="<?= asset_url('plugins/wow.js') ?>"></script>
  <script src="<?= asset_url('plugins/jquery-ui.js') ?>"></script>
  <script src="<?= asset_url('plugins/timePicker.js') ?>"></script>
  <script src="<?= asset_url('js/script.js') ?>"></script>

  <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
  const lightbox = GLightbox({
    selector: '.glightbox'
  });
</script>

</body>
</html>