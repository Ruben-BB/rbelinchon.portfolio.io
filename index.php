<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio 2.0</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href="rubenbelinchon.com">
		<meta property="og:locale" content="es_ES">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="rubenbelinchon.com">
		<link href="css/general.css" rel="stylesheet" type="text/css">
		
		<Link  rel = "apple-touch-icon"  size = "57x57"  href = "icon/apple-icon-57x57.png" > 
		<link  rel = "apple-touch-icon"  size = "60x60"  href = "icon/ apple -icon-60x60.png" > 
		<link  rel = "apple-touch-icon"  tamaños = "" 72x72  href = "" icon/apple-icon-72x72.png > 
		<link  rel = "" apple-touch-icon  tamaños = "76x76"  href = "icon/apple-icon-76x76.png" > 
		<link  rel = "Apple-touch-icon  "size = " 114x114 "  href = " icon/apple-icon-114x114.png "> 
		<Link  rel = "apple-touch-icon"  size = "120x120"  href = "icon/apple-icon-120x120.png" > 
		<link  rel = "apple-touch-icon  " size = "144x144"  href = "icon/ apple-icono-144x144.png" > 
		<link  rel = "apple-touch-icon"  tamaños = "152x152"  href = "icon/apple-icon-152x152.png" > 
		<link  rel = "apple-touch-icon"  tamaños = "180x180"  href = "icon/apple-icon-180x180.png" > 
		<Link  rel = "icon"  = "image / png  " size = "192x192"  href = "icon/android-icon-192x192.png" > 
		<link  rel = "icono"  type = "image / png"  tamaños = "32x32"  href = "icon/favicon-32x32.png" > 
		<link  rel = "icono"  type = "image / png"  tamaños = "96x96"  href = "icon/favicon-96x96.png" > 
		<link  rel = "icono"  type = "image / png"  tamaños = "16x16"  href = "icon/ favicon-16x16. Png " > 
		<link  rel = " manifest " Href = "icon/manifest.json" > 
		<meta  name ="Msapplication-TileColor"  content = "#ffffff" > 
		<meta  name = "msapplication-TileImage"  content = "icon/ms-icon-144x144.png" > 
		<meta  name = "theme-color"  content = "#ffffff" >
	</head>
	<body>
	<!-- HEADER -->
		<header>
			<h1>
				<a href="#home"><img src="./i/header_logo.png" title="Portfolio de Rubén Belinchón Banegas" /></a>
					
				<ul class="infoBox">
					<li>Rubén Belinchón</li>
					<li>Diseñador Gráfico - Maquetador Web</li>
				</ul>
				
				<ul class="socialBox">
					<input type="checkbox" name="social" value="social" id="social"></input>
					<label for="social">
						<li><a target="_blank" class="gplus" title="Google Plus" href="https://plus.google.com/103690862917929309738"></a></li>
						<li><a target="_blank" class="linke" title="LinkedIn" href="https://www.linkedin.com/in/rubén-belinchón-banegas-5286a57b"></a></li>
						<li><a target="_blank" class="infoj" title="Infojobs" href="http://www.infojobs.net/ruben-belinchon.prf"></a></li>
					</label>
				</ul>
			</h1>
			
		<!-- NAVEGACION -->
			<nav>
				<input type="checkbox" class="menu_list" id="menu_list">
				<label for="menu_list">
					<ul>
						<li><a href="#home" onclick="menu_off();"><span>Home</span></a></li>
						<li><a href="#about" onclick="menu_off();"><span>Sobre mí</span></a></li>
						<li><a href="#works" onclick="menu_off();"><span>Mis trabajos</span></a></li>
						<li><a href="#experiencia" onclick="menu_off();"><span>Experiencia</span></a></li>
						<li><a href="#skills" onclick="menu_off();"><span>Conocimientos</span></a></li>
						<li><a href="#contact" onclick="menu_off();"><span>Contacto</span></a></li>
					</ul>
				</label>
			</nav>
		<!-- NAVEGACION END -->
		</header>
	<!-- HEADER END -->

	<!-- CUERPO -->
		<main class="mainbodier">
			<div class="bodier">
			<?php
				include("home.shtml");
				include("about.shtml");
				include("works.shtml");
				include("experi.shtml");
				include("skills.shtml");
				include("contact.shtml");
/**/			?>
			</div>
		</main>
	<!-- CUERPO END -->

	<!-- FOOTER -->
		<footer>
			<p>Todos los derechos reservados - 2018 ©</p>
		</footer>
	<!-- FOOTER END -->
	<script type="text/javascript">
		function menu_off(){
		  var menu=document.getElementById("menu_list");
			 menu.checked=0;
		}
	</script>
	</body>
</html>