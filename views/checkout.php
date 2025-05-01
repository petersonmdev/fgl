<!DOCTYPE html>
<html>

<?php 

// um número no formato internacional (ativo no WhatsApp)
$number = '5562984426692';
$numberprint = '(62) 98442-6692';
// o texto ou algo vindo de um <textarea> ou <input> por exemplo
$msg = 'Olá, vim do Ecommerce GAAF, poderia me ajudar?';

// montar o link (número e texto) (web)
$targetWeb = 'https://api.whatsapp.com/send?phone='.urldecode($number).'&text='.urldecode($msg).'';

// montar o link (número e texto) (app)
$targetApp = 'whatsapp://send?phone='.urldecode($number).'&text='.urldecode($msg).'';

$isMobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4)))

?>

<head>
  <meta charset="utf-8">
  <title>FGL Comunicação Visual | Site Oficial</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <!-- Animate -->
  <link rel="stylesheet" href="plugins/animate.min.css">

  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Stylesheets FGL Comunicação Visual-->
  <link href="css/fgl.css" rel="stylesheet">

  <!-- Fontes -->
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.all.css">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/fgl-favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/fgl-favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">

    <!-- Breadcrumb -->
    <section class="section-fgl section section-header-checkout">
        <div class="container">
          <div class="row">
            <div class="col-6 d-none d-md-block col-lg-6 text-left">
              <div class="section-title-header-checkout mb-0">
                <h3><i class="flaticon-padlock"></i> checkout seguro</h3>                    
              </div>
            </div>

            <div class="col-md-6 col-sm-12 col-lg-6 text-right content-logo-checkout">
              <figure>
                <a href="#">
                  <img src="images/logo.png" alt="" width="130">
                </a>
              </figure>
            </div>            
          </div>
        </div>
    </section>
    <!-- End header checkout -->

    <section class="section section-fgl section-steps-checkout">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul id="checkout-steps" class="li">
              <li>
                <span id="checkout-step1" class="ball active"></span>
                <p class="mb-0">Endereço</p>
              </li>
              <li class="separator"></li>
              <li>
                <span id="checkout-step2" class="ball"></span>
                <p class="mb-0">Frete</p>
              </li>
              <li class="separator"></li>
              <li>
                <span id="checkout-step3" class="ball"></span>
                <p class="mb-0">Pagamento</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!--Main container -->
    <section class="section section-fgl section-checkout">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 content-checkout-form-fgl">
            <div class="section-title text-left">
              <h3>Informações</h3>
            </div>
            <div class="p-3 mb-4 form-checkout card-fgl card">
              <div class="row no-gutters">
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="input-group">
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Nome</span>
                          <input class="form-control inpt-fgl" type="text" name="nome-checkout" placeholder="Digite seu nome...">
                        </label>
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Sobrenome</span>
                          <input class="form-control inpt-fgl" type="text" name="sobrenome-checkout" placeholder="Digite seu sobrenome...">
                        </label>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="input-group">
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>CPF</span>
                          <input class="form-control inpt-fgl" type="text" name="cpf-checkout" placeholder="Digite seu cpf...">
                        </label>
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>CEP</span>
                          <input class="form-control inpt-fgl" type="text" name="cep-checkout" placeholder="Digite seu CEP...">
                        </label>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="input-group">
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Endereço</span>
                          <input class="form-control inpt-fgl" type="text" name="endereco-checkout" placeholder="Digite seu endereço...">
                        </label>
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Número</span>
                          <input class="form-control inpt-fgl" type="text" name="numero-checkout" placeholder="Digite o número...">
                        </label>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="input-group">
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Complemento</span>
                          <input class="form-control inpt-fgl" type="text" name="complemento-checkout" placeholder="Digite o complemento...">
                        </label>
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Bairro</span>
                          <input class="form-control inpt-fgl" type="text" name="bairro-checkout" placeholder="Digite seu bairro...">
                        </label>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="input-group">
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Cidade</span>
                          <input class="form-control inpt-fgl" type="text" name="cidade-checkout" placeholder="Digite sua cidade...">
                        </label>
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Estado</span>
                          <input class="form-control inpt-fgl" type="text" name="estado-checkout" placeholder="Digite seu estado...">
                        </label>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="input-group">
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Telefone</span>
                          <input class="form-control inpt-fgl" type="text" name="telefone-checkout" placeholder="Digite seu telefone...">
                        </label>
                        <label class="col-md-6 col-xs-12 col-sm-12">
                          <span>Email</span>
                          <input class="form-control inpt-fgl" type="email" name="email-checkout" placeholder="Digite seu Email...">
                        </label>
                      </div>                      
                    </div>
                  </div>
                </div>
              </div>              
            </div>

            <div class="btn-group-fgl w-100">
              <a href="cart.php" title="submit" class="d-inline mb-2 btn btn-fgl btn-fgl-second text-left">Voltar ao carrinho</a>
              <a href="#" title="submit" class="d-inline mb-2 btn btn-fgl btn-fgl-cta btn-fgl-cta-simple text-right">Escolher Frete</a>
            </div>
          </div>

          <div class="mt-5 col-12 col-sm-12 col-md-12 col-lg-4 content-details-fgl">

            <div class="p-3 mb-2 item-product-checkout card-fgl card">
              <div class="row no-gutters">
                <div class="col-sm-3 col-xs-12 content-img-card-product">
                  <img src="images/gallery/1.jpg" class="card-img" alt="produto carrinho">
                </div>
                <div class="col-sm-9 col-xs-12 content-text-card-product">
                  <div class="card-body">
                    <h5 class="card-title title-product">Biquini Feminino Avulso Franzido Estampa Topical Marisa</h5>
                    <p class="mb-0 text-right align-items-end"><b>1x</b> R$79,99</p>
                  </div>
                </div>
              </div>              
            </div>

            <div class="p-3 mb-2 item-product-checkout card-fgl card">
              <div class="row no-gutters">
                <div class="col-sm-3 col-xs-12 content-img-card-product">
                  <img src="images/gallery/2.jpg" class="card-img" alt="produto carrinho">
                </div>
                <div class="col-sm-9 col-xs-12 content-text-card-product">
                  <div class="card-body">
                    <h5 class="card-title title-product">Biquini Feminino Avulso Franzido Estampa Topical Marisa</h5>
                    <p class="mb-0 text-right align-items-end"><b>1x</b> R$79,99</p>
                  </div>
                </div>
              </div>              
            </div>

            <div class="p-3 mb-3 cep-product-checkout card-fgl card">
              <div class="row no-gutters">
                <div class="col-12 content-cep-card-product">
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
          </div>
        </div>
      </div>
    </section>

    <!--footer-main-->
    <footer class="footer-main footer-fgl footer-checkout mt-5">      
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 footer-fgl-cards text-center">
              <h6 class="title-footer-top">PAGUE COM</h6>
              <div class="d-md-block d-sm-none d-none">
                <img class="mb-0" src="images/icons/payment-method-desktop.png" alt="checkoutões aceitos">            
              </div>
              <div class="d-md-none d-sm-block">
                <img class="mb-0" src="images/icons/payment-method-mobile.png" alt="checkoutões aceitos">            
              </div>
            </div>            
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container clearfix">
          <div class="copyright-text">
            <p class="text-center"><strong>JS JOIAS - CNPJ: 00.000.000/0001-00</strong> &copy; Todos direitos reservados, 2019</p>
          </div>
        </div>
      </div>
    </footer>
    <!--End footer-main-->

  </div>
  <!--End pagewrapper-->

  <script src="plugins/jquery.js"></script>
  <script src="plugins/bootstrap.min.js"></script>
  <script src="plugins/bootstrap-select.min.js"></script>
  <!-- Slick Slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- FancyBox -->
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <script src="plugins/validate.js"></script>
  <script src="plugins/wow.js"></script>
  <script src="plugins/jquery-ui.js"></script>
  <script src="plugins/timePicker.js"></script>
  <script src="js/script.js"></script>

</body>
</html>

