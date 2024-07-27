<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

  <div class="site-wrap">

    <?php require_once('partials/header.php'); ?>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">Evento Copa Pereira</h1>
            <p>Disfruta del mejor evento de futbol de la ciudad, Aquí encontrarás toda la información para que no te pierdas ni un partido</p>
            <div id="date-countdown"></div>
            <p>
              <a href="#" class="btn btn-primary py-3 px-4 mr-3">Comprar Ticket</a>
              <a href="#" class="more light">Leer Mas</a>
            </p>  
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex team-vs">
            <span class="score">0-0</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_1.png" alt="logo diamante" class="img-fluid">
                <h3>El Diamante</h3>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_2.png" alt="logo boca juniors" class="img-fluid">
                <h3>Boca Juniors</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Ultimas Noticias</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/img_1.jpg" alt="yepes" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Era gol de yepes?</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="images/person_1.jpg" alt="">
                    </div>
                    <div class="text">
                      <h4>David Sanchez</h4>
                      <span>Mayo 09, 2024 &bullet; Deportes</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/img_3.jpg" alt="james" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">James estrella del futbol colombiano</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="images/person_2.webp" alt="">
                    </div>
                    <div class="text">
                      <h4>Sebastian Sanchez</h4>
                      <span>Mayo 09, 2024 &bullet; Deportes</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/img_2.jpg" alt="estrellas del futbol" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Las estrellas del futuro</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="images/person_1.jpg" alt="">
                    </div>
                    <div class="text">
                      <h4>David Sanchez</h4>
                      <span>Mayo 09, 2024 &bullet; Deportes</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>

    <?php require_once('partials/videos.php'); ?>

    <?php require_once('partials/ourblog.php'); ?>

    <?php require_once('partials/footer.php'); ?>

  </div>
  <!-- .site-wrap -->

  <?php require_once('partials/scripts.php'); ?>

</body>

</html>