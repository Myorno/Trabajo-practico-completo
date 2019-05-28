
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Trabajo integrador</title>
		<link rel="stylesheet" type="text/css" href="estilo-pagina.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
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
				<li><a href="Ofertas.php">Ofertas</a></li>
				<li><a href="">Mi Carrito</a></li>
			</ul>
			<div class="formulario">
			<form method="POST" action="enviar-consulta.php">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" required>
				<label for="autor">Autor</label>
				<input type="text" name="autor" required>
				<label for="editorial">Editorial</label>
				<input type="text" name="editorial" required>
				<label for="email">Email</label>
				<input type="email" name="email" required>
				<label for="estado">Estado</label>
				<select name="estado">
					<option value="Nuevo">Nuevo</option>
					<option value="Casi_nuevo">Casi nuevo</option>
					<option value="Bueno">Bueno</option>
					<option value="Con_manchas">Con manchas</option>
					<option value="Dañado">Dañado</option>
				</select>
				<input type="submit" class="botom_formulario">
			</div>
			</form>
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