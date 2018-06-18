<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Calendario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('css/semantic.min.css') ?>">
	<link rel='stylesheet' href='<?php echo base_url() ?>fullcalendar/fullcalendar.css' />
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
	    	<a href="<?php echo base_url('calendar_ct') ?>" class="item active">Calendario</a>
	    	<a href="<?php echo base_url('contact_ct') ?>" class="item">Contacto</a>
	    </div>
	  </div>
	</nav>

	<div class="ui container" >
		<div id='calendar'></div>
	</div>



	<script src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script src='<?php echo base_url() ?>/fullcalendar/lib/jquery.min.js'></script>
	<script src='<?php echo base_url() ?>/fullcalendar/moment.js'></script>
	<script src='<?php echo base_url() ?>/fullcalendar/fullcalendar.min.js'></script>

	<script src="<?php echo base_url('js/semantic.min.js') ?>"></script>
	<script src="<?php echo base_url('js/iberdrola.js') ?>"></script>
</body>
</html>