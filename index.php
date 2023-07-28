<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/lib/slick/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="assets/lib/slick/css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="assets/lib/aos/css/aos.css" />
  <link rel="stylesheet" type="text/css" href="assets/styles/css/style.css">

  <title>Complexo Galleria</title>
</head>

<body>

  <header>
    <div class="container header">
      <!-- Logo -->
      <a class="logo d-lg-none d-block" href="/" tabindex="0">
        <img src="assets/images/logo.webp" alt="Logo" class="responsive-image">
      </a>
      <!-- End Logo -->

      <!-- Desktop Menu -->
      <nav>
        <a href="#inicio" tabindex="0">Início</a>
        <a href="#quem-somos" tabindex="0">Quem somos</a>
        <a href="#espaco" tabindex="0">Espaço</a>
        <a href="#diferenciais" tabindex="0">Diferenciais</a>
        <a href="#contato" tabindex="0">Contato</a>
      </nav>
      <!-- End Desktop Menu -->

      <!-- Mobile Menu -->
      <div id="menu-trigger" class="mobile-menu-trigger" onclick="openMobileMenu()">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>

      <div id="mobileMenu" class="mobile-menu">
        <div class="nav-links-wrapper">
          <a href="javascript:void(0)" class="close-menu-button" onclick="closeMobileMenu()">&times;</a>
          <a href="#inicio" onclick="closeMobileMenu()">Início</a>
          <a href="#quem-somos" onclick="closeMobileMenu()">Quem somos</a>
          <a href="#espaco" onclick="closeMobileMenu()">Espaço</a>
          <a href="#diferenciais" onclick="closeMobileMenu()">Diferenciais</a>
          <a href="#contato" onclick="closeMobileMenu()">Contato</a>
        </div>
      </div>

      <a class="overlay"></a>
      <!--End Mobile Menu  -->
    </div>
  </header>

  <main id="main">
    <!-- Section - Banner Home -->
    <div id="inicio"></div>
    <section id="banner">
      <div class="container">
        <div class="row justify-content-lg-between text-white align-items-center py-5">
          <div class="col-lg-6">
            <div class="banner-content">
              <img src="assets/images/logo.webp" alt="" class="responsive-image d-lg-block d-none logo">
              <h1 class="home-banner-heading">
                A nova sede da sua empresa está aqui
              </h1>
              <p>
                Salas e Lajes comerciais de alto padrão, completas e no tamanho que você precisa.
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <form class="complexo-form mt-4 mt-lg-0">
              <span class="complexo-form-title">Oportunidades exclusivas para sua empresa</span>
              <input type="text" name="" id="" placeholder="Nome">
              <input type="email" name="" id="" placeholder="E-mail">
              <input type="tel" name="" id="" placeholder="Celular">
              <div>
                <div class="d-flex justify-content-lg-between flex-column flex-lg-row mt-4 gap-3">
                  <p class="text-start">
                    Ao clicar em enviar você concorda com os termos da nossa <a href="politica-de-privacidade.php" class="w-100">Política de privacidade</a>
                  </p>
                  <button type="submit" class="complexo-button">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section - Banner Home -->

    <!-- Section - Hero Image Left-->
    <section class="wrapper" id="quem-somos">
      <div class="container">
        <div class="row hero-wrapper justify-content-lg-between">

          <div class="col-lg-4 hero-image" data-aos="fade-up">
            <img src="assets/images/1.webp" alt="Imagem">
          </div>

          <div class="col-lg-7">
            <div class="hero-content">
              <h2 class="section-heading mb-4" data-aos="fade-up">A expansão de seus negócios tem endereço certo em Campinas</h2>
              <p data-aos="fade-up">
                Se você busca conforto, facilidade de acesso, segurança e flexibilidade, estamos aqui para te ajudar a obter tudo isso na nova sede de sua empresa.
              </p>

              <p data-aos="fade-up">
                Somos o maior complexo de condomínios empresariais de Campinas e região, oferecendo à sua empresa um mix de possibilidades e benefícios que apenas um centro de negócios interligado e com total sinergia poderia reunir.
              </p>

              <p data-aos="fade-up">
                Garanta a produtividade da sua equipe em um ambiente projetado para atender suas necessidades e ampliar seu networking como nunca.
              </p>

              <p data-aos="fade-up">
                Aqui, você estará perto de tudo: de shoppings a aeroportos, tudo a um passo de distância!
              </p>
              <a href="#espaco" role="button" class="complexo-button mt-4" data-aos="fade-up">
                <div class="link-w-icon">
                  <img src="assets/images/icons/arrow.svg" alt="Arrow" class="responsive-image d-none d-lg-block">
                  Encontre o novo endereço da sua empresa
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section - Hero Image Left-->

    <!-- Section - Carousel-->
    <section class="wrapper" id="espaco">
      <div class="container-fluid">
        <div class="row justify-content-lg-between">
          <div class="col-lg-5 offset-lg-1">
            <h2 class="section-heading text-center text-lg-start mb-4" data-aos="fade-up">O lugar perfeito <br> para o seu negócio <br> em Campinas</h2>
            <h3 class="place-title d-none d-lg-block" id="place-title" data-aos="fade-up">
            </h3>
          </div>

          <div class="col-lg-6 p-lg-0" data-aos="fade-up">
            <div class="carousel-places">

              <div>
                <div class="place">
                  <img src="assets/images/carousel1.webp" alt="Imagem Carrosel">

                  <h3 class="place-title d-lg-none d-block">
                    Office Park
                  </h3>

                  <ul class="place-list">
                    <li> 4 torres com salas de 100m² e laje de 450m² </li>
                    <li>Novo sistema de Ar-condicionado VRV (Ano implantação 2023) </li>
                    <li>Flexibilidade de layout</li>
                    <li>Paisagismo exuberante</li>
                  </ul>
                </div>
              </div>

              <div>
                <div class="place">
                  <img src="assets/images/carousel2.webp" alt="Imagem Carrosel">

                  <h3 class="place-title d-lg-none d-block">
                    Galleria Corporate
                  </h3>

                  <ul class="place-list">
                    <li>2 torres com lajes corporativas de 1000m² a 1200m²</li>
                    <li>Heliponto</li>
                    <li>Depósitos privativos</li>
                    <li>Vagas de estacionamento cobertas, com a melhor relação de vagas/m² de escritório de Campinas</li>
                  </ul>
                </div>
              </div>

              <div>
                <div class="place">
                  <img src="assets/images/carousel3.webp" alt="Imagem Carrosel">

                  <h3 class="place-title d-lg-none d-block">
                    Galleria Plaza
                  </h3>

                  <ul class="place-list">
                    <li>Módulos de 100m² a 1.700m² em uma única torre</li>
                    <li>Piso elevado</li>
                    <li>Estacionamento ilimitado para visitantes</li>
                    <li>Flexibilidade de layout interno das salas</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center justify-content-lg-start mt-4 mt-lg-0 offset-lg-1" data-aos="fade-up">
          <a href="#contato" class="complexo-button" id="cta-carousel">Saiba mais</a>
        </div>
      </div>

    </section>
    <!-- End Section - Carousel-->

    <!-- Section - Icon Cards-->
    <section class="section-cards wrapper" id="diferenciais">
      <div class="container">
        <h3 class="text-center section-heading text-lg-white" data-aos="fade-up">Ofereça alto padrão para sua empresa</h3>
        <div class="row wrapper carousel-cards gap-3" data-aos="fade-up">

          <!-- Card -->
          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/1.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Espaços corporativos de 100 m² a 1.700 m²
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/2.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Acesso direto ao Galleria Shopping
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/3.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Restaurante e café
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/4.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Segurança e monitoramento 24h
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/5.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Excelente relação de vagas
                de estacionamento
                por m²
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/6.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Vagas ilimitadas para visitantes
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/7.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Espaços flexíveis
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/8.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Turn Key - projetamos, implantamos, decoramos e entregamos seu espaço pronto para uso
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/9.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Depósitos privativos
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/10.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Salas de reunião Pay-per-use
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/11.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Heliponto
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/12.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Escritórios compartilhados
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/13.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Mercado de conveniência 24h
              </div>
            </div>
          </div>

          <div class="col-lg">
            <div class="icon-card">
              <div class="icon-card-ico">
                <img src="assets/images/icons/section3/14.svg" alt="Icon">
              </div>
              <div class="icon-card-content">
                Gestão compartilhada dos condomínios garantindo custos condominiais atrativos
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
    <!-- End Section - Icon Cards-->

    <!-- Section - Desktop Gallery-->
    <section class="d-none d-lg-block" data-aos="fade-up">
      <div class="container-fluid">
        <div class="row row-cols-5">
          <div class="col p-0">
            <img src="assets/images/gallery/1.webp" alt="Image" class="responsive-image">
          </div>

          <div class="col p-0">
            <img src="assets/images/gallery/2.webp" alt="Image" class="responsive-image">
          </div>

          <div class="col p-0">
            <img src="assets/images/gallery/3.webp" alt="Image" class="responsive-image">
          </div>

          <div class="col p-0">
            <img src="assets/images/gallery/4.webp" alt="Image" class="responsive-image">
          </div>

          <div class="col p-0">
            <img src="assets/images/gallery/5.webp" alt="Image" class="responsive-image">
          </div>
        </div>
      </div>
    </section>
    <!-- End Section - Gallery-->

    <!-- Section - Contact -->
    <section class="wrapper" id="contato">
      <div class="container text-center text-lg-start">
        <div class="row">

          <div class="col-lg d-flex flex-column gap-3 align-items-center align-items-lg-start">
            <div class="logo mx-auto mx-lg-0" data-aos="fade-up">
              <img src="assets/images/logo-dark.webp" alt="" class="responsive-image">
            </div>
            <h4 class="section-heading" data-aos="fade-up">A expansão de seus negócios tem endereço certo em Campinas</h4>
            <div class="contact mb-4 mb-lg-0">
              <ul>
                <li>
                  <a href="tel:+551937061022" class="link-w-icon" data-aos="fade-up">
                    <img src="assets/images/icons/tel.svg" alt="Tel">
                    <span>
                      (19) 3706.1022
                    </span>
                  </a>
                </li>
                <li>
                  <a href="https://api.whatsapp.com/send?phone=5519999667963" target="_blank" class="link-w-icon" data-aos="fade-up">
                    <img src="assets/images/icons/whatsapp.svg" alt="Whatsapp">
                    <span>
                      (19) 9996.67963
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg">
            <form class="complexo-form--dark text-black" data-aos="fade-up">
              <span class="complexo-form-title">Deixe sua mensagem</span>
              <input type="text" name="" id="" placeholder="Nome">
              <input type="email" name="" id="" placeholder="E-mail">
              <input type="tel" name="" id="" placeholder="Celular">
              <div>
                <div class="d-flex justify-content-lg-between flex-column flex-lg-row mt-4 gap-3">
                  <p class="text-start">
                    Ao clicar em enviar você concorda com os termos da nossa <a href="politica-de-privacidade.php" class="w-100">Política de privacidade</a>
                  </p>
                  <button type="submit" class="complexo-button">Enviar</button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section - Contact -->

    <!-- Section - Maps -->
    <section class="wrapper">
      <div class="container">
        <div class="address" data-aos="fade-up">
          <a href="https://goo.gl/maps/AcaVecDELf4n8ctd7" target="_blank" class="link-w-icon">
            <img src="assets/images/icons/map.svg" alt="Map">
            Condomínio Galleria Office Park - Av. Bailarina Selma Parada, 201 - Jardim Madalena, Campinas - SP, 13091-904
          </a>
        </div>
        <div class="maps mt-5" data-aos="fade-up">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14705.176477870353!2d-47.0215749!3d-22.865591!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c59d018918c1%3A0x6acb932ba1e5a40a!2sCondom%C3%ADnio%20Galleria%20Office%20Park!5e0!3m2!1spt-BR!2sbr!4v1690468378512!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
    <!-- End Section - Maps -->

  </main>

  <footer>
    <div class="container">
      <hr>
      <div class="row flex-column align-items-center justify-content-center gap-4 wrapper">
        <div class="logo col-lg">
          <img src="assets/images/logo-dark.webp" alt="Logo" class="responsive-image">
        </div>

        <div class="menu col-lg">
          <nav class="d-none d-lg-flex">
            <a href="#quem-somos">Quem somos</a>
            <a href="#espaco">Espaço</a>
            <a href="#diferenciais">Diferenciais</a>
            <a href="#contato">Contato</a>
            <a href="politica-de-privacidade.php">Política de privacidade</a>
          </nav>

          <nav class="d-flex d-lg-none">
            <a href="politica-de-privacidade.php">Política de privacidade</a>
          </nav>
        </div>

        <div class="address col-lg">
          <a href="https://goo.gl/maps/AcaVecDELf4n8ctd7" target="_blank" class="link-w-icon">
            <img src="assets/images/icons/map.svg" alt="Map">
            Condomínio Galleria Office Park - Av. Bailarina Selma Parada, 201 - Jardim Madalena, Campinas - SP, 13091-904
          </a>
        </div>

        <div class="contact col-lg justify-content-center">
          <ul>
            <li>
              <a href="tel:+551937061022" class="link-w-icon">
                <img src="assets/images/icons/tel.svg" alt="Tel">
                <span>
                  (19) 3706.1022
                </span>
              </a>
            </li>
            <li>
              <a href="https://api.whatsapp.com/send?phone=5519999667963" target="_blank" class="link-w-icon">
                <img src="assets/images/icons/whatsapp.svg" alt="Whatsapp">
                <span>
                  (19) 9996.67963
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </footer>

  <a href="https://api.whatsapp.com/send?phone=5519999667963" target="_blank" role="button" class="whatsapp-fab">
    <img src="assets/images/whatsapp.svg" alt="Whatsapp">
  </a>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>

  <script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="assets/lib/slick/js/slick.min.js"></script>
  <script type="text/javascript" src="assets/scripts/slick.js"></script>
  <script type="text/javascript" src="assets/lib/aos/js/aos.js"></script>
  <script type="text/javascript" src="assets/scripts/main.js"></script>
</body>

</html>