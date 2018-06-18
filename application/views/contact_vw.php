<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contactos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('css/semantic.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/iberdrola.css') ?>">
</head>
<body>
	
	<nav class="ui fixed stackable menu navbarIber">
	  <div class="ui container">
	    <a href="#" class="header item">
	      <img class="logo" src="<?php echo base_url('img/logo_iberdrola2.png') ?>">
	      <span>Iberdrola</span>
	    </a>
	    
	    <div class="right menu navbarIber_links" id="navbarIber_links">
	    	<a href="<?php echo base_url() ?>" class="item">Inicio</a>
	    	<a href="<?php echo base_url('events_ct') ?>" class="item">Eventos</a>
	    	<a href="<?php echo base_url('calendar_ct') ?>" class="item">Calendario</a>
	    	<a href="<?php echo base_url('contact_ct') ?>" class="item active">Contacto</a>
	    </div>
	  </div>
	</nav>

	<div class="form_contact">
		<div class="ui container">
			<form action="<?php echo base_url("contact_ct/contact_insertar")?>" class="ui form" method="POST">
				<h3 class="ui dividing header">Datos personales</h3>
				<div class="field">
					<label>Nombre</label>
					<input type="text" name="name_contact" placeholder="Nombre"  required autofocus>
				</div>
				<div class="field">
					<label>Apellidos</label>
					<input type="text" name="subname_contact" placeholder="Apellidos" required>
				</div>
				<div class="field">
					<label>Ciudad</label>
					<div class="two fields">
						<div class="field">
							<input type="text" name="city_contact" placeholder="Ciudad">
						</div>
						<div class="field">
							<input type="text" name="cp_contact" placeholder="Cídigo postal">
						</div>
					</div>
				</div>
				<div class="field">
					<label>Correo electrónico</label>
					<input type="email" name="email_contact" placeholder="e-mail" required>
				</div>
				<h3 class="ui dividing header">Mensaje</h3>
				<div class="field">
					<label>Asunto</label>
					<input type="text" name="subject_contact" placeholder="Asunto" required>
				</div>
				<div class="field">
			    <label>Mensaje:</label>
			    <textarea name="text_contact" required></textarea>
			  </div>
			  <button class="fluid ui green button" tabindex="0" type="submit">Enviar</button>
			</form>
		</div>
	</div>




	<script src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('js/semantic.min.js') ?>"></script>
	<script src="<?php echo base_url('js/iberdrola.js') ?>"></script>
</body>
</html>