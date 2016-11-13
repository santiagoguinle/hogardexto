<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Registro</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="username">Usuario</label>
					<input type="text" class="form-control" id="username" name="username" >
					<p class="help-block">Al menos 4 caracteres, solo numeros y letras</p>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" >
					<p class="help-block">Una direccion que revises seguido, no vamos a enviar spam</p>
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input type="password" class="form-control" id="password" name="password" >
					<p class="help-block">Al menos 6 caracteres</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Repetir contraseña</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" >
					<p class="help-block">Debe coincidir con tu contraseña</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Registrarme">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->