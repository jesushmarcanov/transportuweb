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
						<input type="text" class="form-control form-control-lg" placeholder="Nombre" name="nombre" id="nombre">
					</div>

					<div class="form-group">
						<input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="pass" id="pass">
					</div>
					
                    <div class="form-check">
						<label class="form-check-label">
						<input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2 align-self-end"> Recordarme 
						</label>
					</div>
				</form>
            </div>
        </div>
		<div class="row justify-content-center">
			<button class="btn btn-primary" type="submit">Enviar</button>
		</div>
    </div>
</section>