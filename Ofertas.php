<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Trabajo integrador</title>
		<link rel="stylesheet" href="css/example.css">
		<link rel="stylesheet" type="text/css" href="estilo-pagina.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 		<script src="js/jquery.slides.min.js"></script>
 		 <meta name="viewport" content="width=device-width">
	 	<script>
   		 $(function() {
     		 $('#slides').slidesjs({
       			width: 890,
        		height: 260,
        		play: {
         		 active: true,
         	 	auto: true,
         	 	interval: 4000,
         	 	swap: true
       	 	}
     		 });
   	 	});
 	 </script>
	</head>

	<body>
		<section id="contenedor">
			<header id="title-lol">
    			<div class="center">
        			<h1>Atenea</h1>
    			</div>
    			<div class="center2">
    			<h2>Libros de Segunda Mano</h2>
    			</div>
    			<div class="logo">
    				<img src="svg/logo.svg">
    			</div>
			</header>
			<ul class="menup">
				<li><a href="Index.php">Inicio</a></li>
				<li><a href="">Libros</a>
					<ul>
						<li><a href="">Best Sellers</a></li>
						<li><a href="">Géneros</a></li>
						<li><a href="">Escolares</a></li>
						<li><a href="">Comics</a></li>
						<li><a href="">Idioma Extranjero</a></li>
					</ul>
				</li>
				<li><a href="">Autores</a>
					<ul>
						<li><a href="">Más Populares</a></li>
						<li><a href="">Internacionales</a></li>
						<li><a href="">Latinoamericanos</a></li>
					</ul>
				</li>
				<li><a href="">Ofertas</a></li>
				<li><a href="">Mi Carrito</a></li>
			</ul>
			  <div class="container">
    			<div id="slides">
      			<img src="Imagenes/Ofertas.jpg">
      			<img src="Imagenes/Ofertas1.jpg">
      			<img src="Imagenes/Ofertas2.jpg">
     			<img src="Imagenes/Ofertas3.jpg">
    			</div>
  				</div>
  				<section id="ofertas">
					<div class="cajita">
						<div class="caja1">
							<div class="cajaimg1">
								<a href="Ofertas.php?id=1"><img src="imagenes/IT.png">
							</div>
						</div>
						<div class="caja1">
							<div class="cajaimg1">
								<a href="Ofertas.php?id=2"><img src="imagenes/Harry.jpg"></a>
							</div>
						</div>
						<div class="caja1">
							<div class="cajaimg1">
								<a href="Ofertas.php?id=3"><img src="imagenes/Punto.jpg"></a>
							</div>
						</div>
						<div class="caja1">
							<div class="cajaimg1">
								<a href="Ofertas.php?id=4"><img src="imagenes/Origen.jpg"></a>
							</div>
						</div>
						<div class="caja1">
							<div class="cajaimg1">
								<a href="Ofertas.php?id=5"><img src="imagenes/Berserk.png"></a>
							</div>
						</div>
						<div class="caja1">
							<div class="cajaimg1">
								<a href="Ofertas.php?id=6"><img src="imagenes/Fundacion.jpg"></a>
							</div>
						</div>
					</div>
					<div class="desc">
						<?php 
						if(isset ($_GET['id'])) 
						{
							switch ($_GET['id']) 
							{
								case '1':
									$titulo= 'It - Stephen King';
									$descripcion= '¿Quién o qué mutila y mata a los niños de un pequeño pueblo norteamericano? ¿Por qué llega cíclicamente el horror a Derry en forma de un payaso siniestro que va sembrando la destrucción a su paso? Esto es lo que se proponen averiguar los protagonistas de esta novela. Tras veintisiete años de tranquilidad y lejanía una antigua promesa infantil les hace volver al lugar en el que vivieron su infancia y juventud como una terrible pesadilla. Regresan a Derry para enfrentarse con su pasado y enterrar definitivamente la amenaza que los amargó durante su niñez. Saben que pueden morir, pero son conscientes de que no conocerán la paz hasta que aquella cosa sea destruida para siempre. It es una de las novelas más ambiciosas de Stephen King, donde ha logrado perfeccionar de un modo muy personal las claves del género de terror.';
									$estado= 'casi nuevo';
									$precio= '$200';
									$comprar= '<ul class="comven1">
								<li><a href="">Comprar</a></li>
								<li><a href="">Añadir al carrito</a></li>
								</ul>';
									break;
								case '2':
									$titulo= 'Harry Potter - J. K. Rowling - Saga completa';
									$descripcion= 'La historia comienza con la celebración del mundo mágico. Durante muchos años, había sido aterrorizado por el malvado mago Lord Voldemort. La noche del 31 de octubre, mató a Lily y James Potter. Sin embargo, cuando intenta matar a su hijo de 1 año, Harry, la maldición asesina Avada Kedavra se vuelve sobre sí mismo. El cuerpo de Voldemort resulta destruido, pero él sobrevive: no está muerto ni vivo. Por su parte, a Harry solo le queda una cicatriz con forma de rayo en la frente que es el único remanente físico de la maldición de Voldemort. Harry es el único sobreviviente de la maldición asesina, y a raíz de la misteriosa derrota de Voldemort, el mundo mágico empieza a llamarlo como «el niño que sobrevivió». Rubeus Hagrid, un semi-gigante, deja a Harry con los únicos parientes que le quedan, los crueles Dursley. Ellos intentarán en vano esconder su herencia mágica. Sin embargo, la víspera de su undécimo cumpleaños, Harry tiene su primer contacto con el mundo mágico cuando recibe cartas del Colegio Hogwarts de Magia y Hechicería, las cuales eran entregadas por lechuzas, aunque su tío impide que pueda leerlas. Ya en su cumpleaños, Hagrid aparece y le dice a Harry que existe un mundo mágico y otro «muggle» , puesto que él es un mago, ha sido invitado a asistir al colegio.';
									$estado= 'bueno/usado';
									$precio= '$500';
									$comprar= '<ul class="comven1">
								<li><a href="">Comprar</a></li>
								<li><a href="">Añadir al carrito</a></li>
								</ul>';
								break;
								case '3':
									$titulo= 'Punto de Contacto de Tom Clancy - Jack Ryan Jr.';
									$descripcion= 'El ex senador estadounidense Weston Rhodes es un contratista de defensa con un problema urgente. Su compañía necesita a alguien que revise rápidamente los libros de Dalfan Technologies, una empresa de Singapur, rápidamente. Se dirigea su viejo amigo Gerry Hendley en busca de ayuda. Hendley Associates es una delas mejores firmas de análisis financiero del país y la portada de The Campus,una agencia de inteligencia estadounidense de alto secreto. Rhodes preguntapor dos analistas específicos, Jack Ryan Jr., y Paul Brown, un contadorforense de modales suaves. Brown no tiene idea de que Jack trabaja para The Campus, pero el torpe contador está ocultando sus propios secretos. Rhodes le ha encargado que cargue un programa de guerra cibernética en el bastidor principal altamente confiable de Dalfan Technologies en nombre de la CIA. Al borde del éxito de la misión, Brown descubre un juego dentro del juego, y las personas que ahora quieren matarlo es tan mortal como el ciclón que azota a la nación isleña. Juntos, Ryan y Brown corren para escapar de la tormenta asesina y de un equipo de asesinos entrenados para evitar una catástrofe global, incluso a costa de sus propias vidas.';
									$estado= 'casi nuevo';
									$precio= '$300';
									$comprar= '<ul class="comven1">
								<li><a href="">Comprar</a></li>
								<li><a href="">Añadir al carrito</a></li>
								</ul>';
								break;
								case '4':
									$titulo= 'Origen - Dan Brown';
									$descripcion= 'Robert Langdon, profesor de simbología e iconografía religiosa de la universidad de Harvard, acude al Museo Guggenheim Bilbao para asistir a un trascendental anuncio que «cambiará la faz de la ciencia para siempre». El anfitrión de la velada es Edmond Kirsch, un joven multimillonario cuyos visionarios inventos tecnológicos y audaces predicciones lo han convertido en una figura de renombre mundial. Kirsch, uno de los alumnos más brillantes de Langdon años atrás, se dispone a revelar un extraordinario descubrimiento que dará respuesta a las dos preguntas que han obsesionado a la humanidad desde el principio de los tiempos: ¿De donde venimos? ¿Adónde vamos? ';
									$estado= 'con manchas';
									$precio= '$100';
									$comprar= '<ul class="comven1">
								<li><a href="">Comprar</a></li>
								<li><a href="">Añadir al carrito</a></li>
								</ul>';
								break;
								case '5':
									$titulo= 'Berserk - Tomo 1 - Kentaro Miura';
									$descripcion= 'Historia ambientada en una época medieval con tintes de la Europa medieval, en el cual se cuenta la historia de Guts (traducido como Gatsu en las primeras ediciones en castellano), un mercenario huérfano que acompañado del elfo Puck, caza demonios llamados «Apóstoles». La historia se divide en dos partes: la primera (que va del volumen 4 al volumen 13) cuenta su infancia y cómo conoce a Griffith, líder de un grupo mercenario llamado «la Banda del Halcón». La segunda parte (volúmenes del 1 al 3 y 14 al 39, publicándose) es su historia tras el fatídico Eclipse, la caza de los Apóstoles y su búsqueda de venganza contra Griffith.';
									$estado= 'casi nuevo';
									$precio= '$80';
									$comprar= '<ul class="comven1">
								<li><a href="">Comprar</a></li>
								<li><a href="">Añadir al carrito</a></li>
								</ul>';
								break;
								case '6':
									$titulo= 'Trilogía de Fundación- Isaac Asimov';
									$descripcion= 'El hombre se ha dispersado por toda la galaxia. La capital del Imperio es Trántor, nido de intrigas y corrupción. Gracias a su ciencia, fundada en el estudio matemático de los hechos históricos y el comportamiento de las masas, el psicohistoriador Hari Seldon prevé la caída del Imperio y el retorno a la barbarie durante varios milenios. A fin de reducir este período de barbarie a mil años, Seldon decide crear una Fundación en un extremo de la galaxia.';
									$estado= 'bueno/usado';
									$precio= '$210';
									$comprar= '<ul class="comven1">
								<li><a href="">Comprar</a></li>
								<li><a href="">Añadir al carrito</a></li>
								</ul>';
								break;

								default:
									echo '<h5> Error </h5>';
									break;
							}
							?>
							<h4><?php echo $titulo; ?></h4>
							<h6><?php echo $descripcion; ?></h6>
							<?php echo $estado; ?>
							<?php echo $precio; ?>
							<?php echo $comprar; ?>
						<?php
						} else {
							echo " Selecciona un libro para obtener su descripción";
						}
						?>
					</div>
			</section>
			</section>
			<footer id="contacto">
				<div class="contacto1">
					<div class="links">
						<a href=""><img src="svg/facebook.svg"></a>
					</div>
					<div class="links">
						<a href=""><img src="svg/instagram.svg"></a>
					</div>
					<div class="links">
						<a href=""><img src="svg/twitter.svg"></a>
					</div>
					<div class="links">
						<a href=""><img src="svg/mercadolibre.svg"></a>
					</div>
					<div class="links2">
						<img src="svg/citi.svg">
					</div>
					<div class="links2">
						<img src="svg/visa.svg">
					</div>
					<div class="links2">
						<img src="svg/mastercard.svg">
					</div>
				</div>
			</footer>
		</section>
	</body>
</html>