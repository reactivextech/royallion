<!DOCTYPE html>
<html lang="es">

<head>
  <title>Contacto - Royal Lion Investment & Associated</title>

  <?php require_once './pages/head-style.php'; ?>
</head>

<body>
  <!-- preloader start -->
  <?php require_once './pages/preloader.php'; ?>
  <!-- preloader end -->

  <!--  header-section start  -->
  <header class="header-section transparent--header header--fixed">
    <?php require_once './pages/headband.php'; ?>

    <?php require_once './pages/navigation/navigation-pages.php'; ?>
  </header>
  <!--  header-section end  -->

  <!-- inner-page-banner-section start -->
  <section class="inner-page-banner-section gradient-bg">
    <div class="illustration-img"><img src="./assets/images/inner-page-banner-illustrations/contact.png" alt="image-illustration"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="inner-page-content-area">
            <h1 class="page-title">Contacto</h1>
            <nav aria-label="breadcrumb" class="page-header-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Inicio</a></li>
                <li class="breadcrumb-item">Contacto</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-page-banner-section end -->

  <section class="contact-section mt-minus pb-120">
    <div class="container">
      <div class="contact-form-area">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="section-header text-center">
              <span class="section-subtitle">Contacto</span>
              <h1 class="section-title">¡Hablemos de negocios!</h1>
              <p>Describe cuál es tu proyecto a continuación y te contactaremos a la brevedad. Si desea conocer más
                detalles sobre nuestros productos y servicios concerté una cita con nuestros ejecutivos a través de este
                sistema de soporte.</p>
            </div>
          </div>
          <div class="col-lg-12 contact-form-wrapper">
            <form method="POST" class="contact-form" id="contact_form_submit">
              <div class="row">
                <div class="col-lg-12">
                  <textarea name="message" id="message" placeholder="Mensaje*"></textarea>
                </div>
                <div class="col-lg-6">
                  <input type="text" name="name" id="name" placeholder="Nombre*">
                </div>
                <div class="col-lg-6">
                  <input type="email" name="email" id="email" placeholder="Email*">
                </div>
                <div class="col-lg-6">
                  <input type="tel" name="phone" id="phone" placeholder="Teléfono*">
                </div>
                <div class="col-lg-6">
                  <input type="text" name="subject" id="subject" placeholder="Compañia (opcional)">
                </div>
                <div class="col-lg-12 text-center">
                  <button type="submit" class="btn btn-primary" title="Envia tu mensaje!" name="enviar" onclick="javascript:enviar_correo();">Enviar Ahora</button>
                </div>
              </div>
            </form>
            <p class="form-message"></p>
          </div>


          <div class="col-lg-12">
            <div class="contest-details-wrapper">
              <div class="single-item w-2">
                <h3 class="title"><i class="fa fa-envelope fa-3x iconcolor"></i></h3>
                <a href="mailto:info@royallioninvestment.com"><span class="content-name">info@royallioninvestment.com</span></a>
              </div>
              <div class="single-item">
                <h3 class="title">
                  <div class="icon">
                    <i class="fa fa-map-marker fa-3x iconcolor"></i>
                  </div>
                </h3>
                <ul class="prize-list2">
                  <li>
                    <p>CCCT Pirámide Invertida, </p>
                    <p> Torre A.</p>
                    <p> Caracas - Venezuela.</p>
                  </li>
                </ul>
              </div>
              <div class="single-item w-2">
                <h3 class="title"><i class="fa fa-instagram fa-3x iconcolor"></i></h3>
                <a href="https://instagram.com/royallion"><span class="content-name">@royallion</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer-section start -->
  <?php require_once './pages/footer.php'; ?>
  <!-- footer-section end -->

  <?php require_once './pages/fixed-to-top.php'; ?>

  <?php require_once './pages/scripts.php'; ?>
</body>

</html>