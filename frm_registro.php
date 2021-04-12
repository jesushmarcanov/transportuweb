<!DOCTYPE html>
<html lang="en">
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
                <a href="/" class="navbar-brand">LogoTipo</a>
              </div>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion" aria-expanded="false" aria-label="Tag Menu">
                  <span class="navbar-toggler-icon"></span>
              </button><!--./button-->

              <div class="collapse navbar-collapse" id="navegacion">
                <ul class="nav navbar-nav navbar-center ml-auto">
                  <li data-scroll="" class="nav-item active"><a class="nav-link" href="#"><i class="fas fa-search"></i> Buscar</a></li>
                    <li data-scroll="" class="nav-item"><a class="nav-link" href="#"><i class="fas fa-plus-circle"></i> Publicar viaje</a></li>
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

		<section id="frmlogin">
			<div class="container frmlogin">
				<div class="row justify-content-center">
					<div class="col-md-6 col-sm-12">
						<h1 class="titulos text-center font-weight-bold">Registro de Usuarios</h1>
						<form>
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" placeholder="Email" name="email" id="email">
							</div>

							<div class="form-group">
								<input type="text" class="form-control form-control-lg" placeholder="Nombre" name="nombre" id="nombre">
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" placeholder="Apellido" name="apellido" id="apellido">
							</div>

							<div class="form-group">
								<input type="date" class="form-control form-control-lg" placeholder="Fecha de Nacimiento" name="fnac" id="fnac">
							</div>
							<div class="form-group">
							<select name="tratamiento" id="tratamiento" 		 class="form-control">
									<option value="1">Sra</option>
									<option value="2">Srta</option>
									<option value="3">Sr</option>
									<option value="4">Prefiero no decirlo</option>
								</select>
							</div>

							<div class="form-group">
								<input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="clave" id="clave">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" placeholder="telefono" name="telefono" id="telefono">
							</div>
							<div id="respuesta" class="alert alert-success">

                    		</div>
							<div class="row justify-content-center">
								<button class="btn btn-primary" id="btnEnviar" type="submit">Enviar</button>
							</div>
							
						</form>
					</div>
				</div>
				
			</div>
		</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> -->
    <script src="./js/main.js"></script>
</body>
</html>