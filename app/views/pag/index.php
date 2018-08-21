
  <body>
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">        
          <a class="navbar-brand" href="index.php"><img src="img/logo1.png"><span></span></a>          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto pl-lg-5 pl-0">

              <li class="nav-item">
                <a class="nav-link active" href="<?php echo ruta_url; ?>/Usuario/registrarse ">REGISTRARSE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form_iniciarSesion.php">INICIAR SECCION</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FORMA DE PAGO</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="registro_pago.php">TRANSACION</a>                  
                </div>
                <li class="nav-item">
                <a class="nav-link" href="ver_entrenador.php">VER ENTRENADORES</a>
              </li>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INFORMACION YOUR COACH</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="registro_pago.php">MISION</a>
                  <a class="dropdown-item" href="registro_pago.php">VISION</a>
                  <a class="dropdown-item" href="contactenos.php">CONTACTENOS</a>                  
                </div>
              <li class="nav-item">
                <a class="nav-link" href="quejas_reclamos.php">QUEJAS Y RECLAMOS</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    
    <section class="home-slider owl-carousel"> 
      <div class="slider-item" style="background-image: url('img/imagen1.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
            <h1>INSTRUCTORES EN CASA</h1>
            </div>
          </div>
        </div>
      </div>         
      <div class="slider-item" style="background-image: url('img/imagen2.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>INSTRUCTORES EN CASA</h1>              
          </div>
        </div>        
      </div>
    </section>

    <section class="section element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>LOS MEJORES ENTRENADORES</h2>
            </div>
          </div>
        </div>
      </div>
        <div class="container">
          <div class="row">
            <div class="major-caousel js-carousel-1 owl-carousel">
              <div>
                <div class="media d-block media-custom text-center">
                  <a href="#"><img src="img/persona1.jpg" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">James Posada</h3>
                    <p class="lead">Tu entrenador </p>
                  </div>
                </div>
              </div>
              <div>
                <div class="media d-block media-custom text-center">
                  <a href="#"><img src="img/persona2.jpg" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Camilo Martinez</h3>
                    <p class="lead">Tu entrenador</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="media d-block media-custom text-center">
                  <a href="#"><img src="img/persona3.jpg" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Carlos Londoño</h3>
                    <p class="lead">Tu entrenador</p>
                  </div>
                </div>
              </div>
          </div>
        </div>  
