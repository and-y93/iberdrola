<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Eventos</title>
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
	    	<a href="<?php echo base_url('events_ct') ?>" class="item active">Eventos</a>
	    	<a href="<?php echo base_url('calendar_ct') ?>" class="item">Calendario</a>
	    	<a href="<?php echo base_url('contact_ct') ?>" class="item">Contacto</a>
	    </div>
	  </div>
	</nav>

	<div class="filter_events">
		<div class="ui container">
			<form action="<?php echo base_url() ?>events_ct/filter" class="ui form" method="POST">
				<h4 class="ui dividing header">
					Filtar por:
				</h4>
				<div class="field">
					<div class="two fields">
						<div class="field">
				      <div class="ui selection dropdown" id="dropdown">
			          <input type="hidden" name="filter_cat">
			          <i class="dropdown icon"></i>
			          <div class="default text">Categoría</div>
			          <div class="menu">
			              <div class="item" data-value="1">Nombre (not work)</div>
			              <div class="item" data-value="0">Categoría</div>
			          </div>
				      </div>
					  </div>
						<div class="field">
							<input type="text" name="filter_search" placeholder="Buscar...">
						</div>
					</div>
				</div>
				<button class="fluid ui green button" tabindex="0" type="submit" id="test">Buscar</button>
			</form>
			<div class="ui dividing header"></div>
		</div>
	</div>

	<div class="ui container">
		
	</div>

	<div class="table_events">
		<div class="ui container">
			<table class="ui center aligned definition table">
			  <thead>
			    <tr><th></th>
			    <th>Categoría</th>
			    <th>Fecha inicio</th>
			    <th>Fecha Final</th>
			  </tr></thead>
			  <tbody>
			    <?php 
						foreach ($consulta->result() as $fila) {
							echo '<tr>' .
							'<td>' . $fila -> name_event . '</td>' .
							'<td>' . $fila -> name_cat . '</td>' .
							'<td>' . $fila -> ini_event . '</td>' .
							'<td>' . $fila -> fin_event . '</td>' .
							'</tr>';
						}
					 ?>
				</tbody>
			</table>
		</div>
	</div>




	<script src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('js/semantic.min.js') ?>"></script>
	<script src="<?php echo base_url('js/iberdrola.js') ?>"></script>
</body>
</html>