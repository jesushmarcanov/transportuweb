<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Librerias CSS Bootstrap -- Personalizada-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!--Iconos Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--Libreria Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;700&display=swap" rel="stylesheet"> 
    <title>TransportuWeb</title>
</head>
<body>
    <!--Barra de Navegación o Menú del Sitio-->
    <header class="header">
        <nav class="navbar navbar-expand-md fixed-top">
          <div class="container"> 
              <div class="logo">
                <a href="#" class="navbar-brand">LogoTipo</a>
              </div>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion" aria-expanded="false" aria-label="Tag Menu">
                  <span class="navbar-toggler-icon"></span>
              </button><!--./button-->

              <div class="collapse navbar-collapse" id="navegacion">
                <ul class="nav navbar-nav navbar-center ml-auto">
                  <li data-scroll="" class="nav-item active"><a class="nav-link" href="#"><i class="fas fa-search"></i> Buscar</a></li>
                    <li data-scroll="" class="nav-item"><a class="nav-link" href="busca_viajes.php"><i class="fas fa-plus-circle"></i> Publicar viaje</a></li>
                    <!-- <button type="button" class="btn btn-primary">Ingresar</button> -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="perfil" src="imgs/perfil.svg" alt=""> 
                        
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="opc_login.html">Iniciar sesión</a>
                        <a class="dropdown-item" href="#">Registrarse</a>
                    </li>
                </ul>
              </div><!--./collapse-->
          </div><!--./container-fluid-->
      </nav><!--./navbar-->
     </header>

     <!-- Sección Cintillo -->  
     <section id="cintillo">
        <div class="container">
           <div class="row">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
           </div>
        </div>
     </section>

     <!-- Sección Buscador -->
     <section id="principal">
        <div class="container">
          <div class="row">
            <div class="col">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
          </div>
        </div>
      </section>

    <!-- Seccion Viajes -->
    <section id="viajes">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6  mt-3 mb-3 text-center">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 300x300" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">Imagen</text></svg>
                </div>
                <div class="margen col-md-6 align-items-center">
                    <h2 class="titulos font-weight-bold">Titulo de la seccion</h2>
                    <p class="subtitulos">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                    <div class="align-items-center">
                      <button type="button" class="centrado btn btn-primary mb-3">Large button</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Seccion Funciones -->
    <section id="funciones">
        <div class="container mt-3">
            <div class="row">
              <div class="col-md-6 col-sm-12 mt-3">
                  <h2 class="titulos font-weight-bold">Funciones</h2>
              </div>
              <div class="col-md-6 text-right mt-3 d-none d-md-block d-lg-block d-xl-block">
                  <a class="enlaces" href="#">Mas información</a>
              </div>
            </div> 
        </div>
        <div class="container mt-5 justify-content-center">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h5>Heading</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, fugit. Ut fugiat dolores accusamus nemo iste cumque nesciunt suscipit quam.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h5>Heading</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, fugit. Ut fugiat dolores accusamus nemo iste cumque nesciunt suscipit quam.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h5>Heading</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, fugit. Ut fugiat dolores accusamus nemo iste cumque nesciunt suscipit quam.</p>
                </div>
            </div>
        </div>
    </section>

      <!-- Seccion Ventajas -->
    <section id="ventajas">
        <div class="container mt-3">
            <div class="row">
              <div class="col mt-3">
                  <h2 class="titulos font-weight-bold">Ventajas</h2>
              </div>
            </div> 
        </div>
        <div class="container mt-5 justify-content-center">
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="bi bi-emoji-smile-fill" style="font-size: 2rem;"></i>
                    <h5>Heading</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, fugit. Ut fugiat dolores accusamus nemo iste cumque nesciunt suscipit quam.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-emoji-smile-fill" style="font-size: 2rem;"></i>
                    <h5>Heading</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, fugit. Ut fugiat dolores accusamus nemo iste cumque nesciunt suscipit quam.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-emoji-smile-fill" style="font-size: 2rem;"></i>
                    <h5>Heading</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, fugit. Ut fugiat dolores accusamus nemo iste cumque nesciunt suscipit quam.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion ofertas -->
    <section id="ofertas">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mt-3 mb-3 text-center">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 300x300" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">Imagen</text></svg>
                </div>
                <div class="margen col-md-6 align-items-center">
                    <h2 class="titulos font-weight-bold">Titulo de la seccion</h2>
                    <p class="subtitulos">Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                    <div>
                      <button type="button" class="centrado btn btn-primary mb-3">Large button</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion Noticias -->
    <section id="blog" class="d-none d-lg-block d-xl-block">
        <div class="container mt-3">
          <div class="row">
            <div class="col-8 mt-3">
                <h2 class="titulos font-weight-bold">Noticias</h2>
            </div>
            <div class="col-4 mt-3 text-right">
                <a class="enlaces" href="#">Mas información</a>
            </div>
          </div> 
      </div>
      <div class="container mt-3 justify-content-center">
          <div class="row">
              <!-- Columna 1 -->
              <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      
                  <div class="card-body">
                    <h5 class="tit-noti font-weight-bold">Titulo de la Noticia</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <a class="enlaces" href="#">Enlace a Noticia</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Columna 2 -->
              <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      
                  <div class="card-body">
                    <h5 class="tit-noti font-weight-bold">Titulo de la Noticia</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <a class="enlaces" href="#">Enlace a Noticia</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Columna 3 -->
              <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      
                  <div class="card-body">
                    <h5 class="tit-noti font-weight-bold">Titulo de la Noticia</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <a class="enlaces" href="#">Enlace a Noticia</a>
                    </div>
                  </div>
                </div>
              </div>

          </div>
      </div>
    </section>


    <!--Librerias JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  <!--Librerias JQuery -->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>  <!--Bootstrap --> 
    <!-- <script src="js/main.js"></script>  Librerias JS Personalizada -->
</body>
<!-- Footer -->
<footer id="foot" class="page-footer container-fluid font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a class="enlaces" href="#!">Link 1</a>
            </li>
            <li>
              <a class="enlaces" href="#!">Link 2</a>
            </li>
            <li>
              <a class="enlaces" href="#!">Link 3</a>
            </li>
            <li>
              <a class="enlaces" href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a class="enlaces" href="#!">Link 1</a>
            </li>
            <li>
              <a class="enlaces" href="#!">Link 2</a>
            </li>
            <li>
              <a class="enlaces" href="#!">Link 3</a>
            </li>
            <li>
              <a class="enlaces" href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content.</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class=" container footer-copyright text-left py-3">
        <p class="float-right"><a class="enlaces" href="#">Subir</a></p>
        <p>&copy; <script>document.write(new Date().getFullYear())</script> Lorem, ipsum. &middot; Desarrollado por <a class="enlaces" href="#" target="_blank">Lorem ipsum dolor sit amet.</a> </p>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</html>