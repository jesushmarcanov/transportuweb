<?php 
    include('partials/header.html');
?>

<section id="frmlogin">
    <div class="container frmlogin">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <h1 class="titulos text-center font-weight-bold">¿Cuál es tu email y tu contraseña?</h1>
                <form action="">
					<div class="form-group">
						<input type="text" class="inputs form-control form-control-lg" placeholder="Nombre" name="nombre" id="nombre">
					</div>

					<div class="form-group">
						<input type="password" class="inputs form-control form-control-lg" placeholder="Contraseña" name="pass" id="pass">
					</div>
					
                    <div class="form-check">
						<label class="form-check-label">
						<input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2"> 
						<p class="h4 remember mt-1 font-weight-bold">Recordarme</p>
						</label>
						
					</div>
					<a href="#"><p class="h4 forget mt-3 font-weight-bold">He olvidado mi contraseña</p></a>
				</form>
            </div>
        </div>
		<div class="row justify-content-center">
			<button class="boton btn btn-primary mt-3" type="submit">Enviar</button>
		</div>
    </div>
</section>