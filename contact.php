<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

  <div class="site-wrap">

    <?php require_once('partials/header.php'); ?>

    <div class="hero overlay" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white">Contacto</h1>
            <p>Contáctenos para tener el gusto de atenderte</p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombres">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Escribe algo..."></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5" value="Enviar mensaje">
              </div>
            </form>  
          </div>
          <div class="col-lg-4 ml-auto">
            
            <ul class="list-unstyled">
              <li class="mb-2">
                <strong class="text-white d-block">Dirección</strong>
                Villa Olímpica, Pereira, Risaralda
                <br>
                Estadio Hernán Ramírez Villegas
              </li>
              <li class="mb-2">
                <strong class="text-white d-block">Email</strong>
                <a href="#">contacto@eldepor.co</a>
              </li>
              <li class="mb-2">
                <strong class="text-white d-block">
                  Telefono
                </strong>
                <a href="#">+57 345 6789 012</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php require_once('partials/footer.php'); ?>

  </div>

 <?php require_once('partials/scripts.php'); ?>

</body>

</html>