<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iberdrola</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('css/semantic.min.css') ?>">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

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
	    	<a href="<?php echo base_url() ?>" class="item active">Inicio</a>
	    	<a href="<?php echo base_url('events_ct') ?>" class="item">Eventos</a>
	    	<a href="<?php echo base_url('calendar_ct') ?>" class="item">Calendario</a>
	    	<a href="<?php echo base_url('contact_ct') ?>" class="item">Contacto</a>
	    </div>
	  </div>
	</nav>

	<div class="video_bg">
		<video autoplay loop muted id="video_bg">
			<source src="<?php echo base_url('img/iberdrola.mp4')?>" type="video/mp4">
		</video>
	</div>

	<div class="intro_text">
		<div class="ui center aligned container">
			<h1>Lorem ipsum dolor sit amet.</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nam eius molestias dolor quibusdam possimus, doloremque, tenetur dicta porro quo. Natus doloremque, officia dolor corrupti!</p>
		</div>
	</div>

	<div class="img_wall">
		<img class="img1" src="<?php echo base_url('img/banner1.png')?>" alt="">
		<img src="<?php echo base_url('img/logo_iberdrola.png')?>" alt="" class="img2" id="img2">
	</div>

	<div class="cards_register">
		<div class="ui container">
			<div class="ui equal width  grid">
				<div class="row centered">
					<h1>Registros</h1>
				</div>
					<div class="column">
						<div class="ui link card">
							<div class="image">
						    <img src="<?php echo base_url('img/card1.jpg')?>">
						  </div>
						  <div class="center aligned content">
						    <div class="header">Eventos</div>
						    <div class="description ">
						      <div class="ui green statistic">
									  <div class="value">
									    46
									  </div>
									</div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="column">
						<div class="ui link card">
							<div class="image">
						    <img src="<?php echo base_url('img/card1.jpg')?>">
						  </div>
						  <div class="center aligned content">
						    <div class="header">Asistentes</div>
						    <div class="description ">
						      <div class="ui green statistic">
									  <div class="value">
									    2,204
									  </div>
									</div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="column">
						<div class="ui link card">
							<div class="image">
						    <img src="<?php echo base_url('img/card1.jpg')?>">
						  </div>
						  <div class="center aligned content">
						    <div class="header">Paises</div>
						    <div class="description ">
						      <div class="ui green statistic">
									  <div class="value">
									    6
									  </div>
									</div>
						    </div>
						  </div>
						</div>
					</div>
			</div>
		</div>
	</div>



	<div class="carousel_wrap">
		<div class="ui center aligned container">
			<h1>¿Qué dice la gente sobre nosotros?</h1>
			<div class="main-carousel" id="main-carousel">
			  <div class="carousel-cell">
					<div class="ui items">
					  <div class="item">
					    <div class="ui medium image">
					      <img src="<?php echo base_url('img/avatar1.png')?>">
					    </div>
					    <div class="middle aligned content">
					      <div class="header">Stevie Feliciano</div>
					      <div class="description">
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sapiente provident, mollitia quis laboriosam qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ex, praesentium. Est molestias quaerat laboriosam doloremque nesciunt blanditiis repudiandae iusto!</p>
					      </div>
					    </div>
					  </div>
					</div>
			  </div>
			  <div class="carousel-cell">
			  	<div class="ui items">
					  <div class="item">
					    <div class="ui medium image">
					      <img src="<?php echo base_url('img/avatar2.png')?>">
					    </div>
					    <div class="middle aligned content">
					      <div class="header">Stevie Feliciano</div>
					      <div class="description">
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sapiente provident, mollitia quis laboriosam qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ex, praesentium. Est molestias quaerat laboriosam doloremque nesciunt blanditiis repudiandae iusto!</p>
					      </div>
					    </div>
					  </div>
					</div>
			  </div>
			  <div class="carousel-cell">
			  	<div class="ui items">
					  <div class="item">
					    <div class="ui medium image">
					      <img src="<?php echo base_url('img/avatar3.png')?>">
					    </div>
					    <div class="middle aligned content">
					      <div class="header">Stevie Feliciano</div>
					      <div class="description">
					        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sapiente provident, mollitia quis laboriosam qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ex, praesentium. Est molestias quaerat laboriosam doloremque nesciunt blanditiis repudiandae iusto!</p>
					      </div>
					    </div>
					  </div>
					</div>
			  </div>
			</div>
		</div>
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
			    <tr>
			    	<td>#event1</td>
			      <td>Cat3</td>
			      <td>29/09/2018</td>
			      <td>05/10/2018</td>
			    </tr>
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

	<div class="empresas">
		<div class="ui center aligned container">
			<h1>Nuestros Clientes</h1>
			<img src="<?php echo base_url('img/clientes/image1.png')?>" alt="">
			<img src="<?php echo base_url('img/clientes/image2.png')?>" alt="">
			<img src="<?php echo base_url('img/clientes/image3.png')?>" alt="">
			<img src="<?php echo base_url('img/clientes/image4.png')?>" alt="">
			<img src="<?php echo base_url('img/clientes/image5.png')?>" alt="">
			<img src="<?php echo base_url('img/clientes/image6.png')?>" alt="">
			<img src="<?php echo base_url('img/clientes/image7.png')?>" alt="">
			<img src="<?php echo base_url('img/clientes/image8.png')?>" alt="">
		</div>
	</div>

	<script src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('js/semantic.min.js') ?>"></script>
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<script src="<?php echo base_url('js/iberdrola.js') ?>"></script>
</body>
</html>