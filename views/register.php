<?php require('_header.php'); ?>

    <!-- Breadcrumb -->
    <section class="section-fgl section section-breadcrumb">
        <div class="container">
          <div class="section-title text-center mb-0">
            <h3>Faça seu login</h3>                    
          </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <!--Main container -->
    <section class="section section-fgl section-register">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 content-login-fgl">
            <div class="section-title text-center mb-4">
              <h3>já sou cadastrado</h3>
            </div>
            <div class="input-group">
              <label>
                <span>Email</span>
                <input class="form-control inpt-fgl" type="email" name="email-login" placeholder="Digite aqui seu email...">
              </label>
              <label>
                <span>Senha</span>
                <input class="form-control inpt-fgl" type="password" name="password-login" placeholder="Digite aqui sua senha...">
              </label>
              <p class="text-right mb-3">
                <a href="#" title="">Esqueci minha senha</a>
              </p>
              <a href="#" title="submit" class="btn btn-lg btn-fgl btn-fgl-first">Entrar</a>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 content-register-fgl">
            <div class="section-title text-center mb-5">
              <h3>quero me cadastrar</h3>
            </div>
            <a href="#" title="submit" class="btn btn-lg btn-fgl btn-fgl-first">Cadastrar</a>
          </div>
        </div>
      </div>
    </section>

<?php require('_footer.php'); ?>
