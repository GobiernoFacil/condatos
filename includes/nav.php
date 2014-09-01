<header <?php echo $body_class == "home" ? 'id="home"' : "" ;?> class="navbar">
  <div class="container">
    <div class="row">
    	<div class="col-sm-4">
				 <a class="logo" href="<?php echo $body_class == "home" ? '#intro' : "index.php#intro" ;?>">Con Datos</a>
    	</div>
    	<nav class="col-sm-8">
    		<ul class="navbar-brand">
    			<li><a  href="<?php echo $body_class == "home" ? '#sobre-evento' : "index.php#sobre-evento" ;?>">Sobre el evento</a></li>
				<li><a href="<?php echo $body_class == "home" ? '#programa' : "index.php#programa" ;?>">Programa</a></li>
				<li> <a href="<?php echo $body_class == "home" ? '#eventos-paralelos' : "index.php#eventos-paralelos" ;?>" title="eventos">Eventos Paralelos</a>
					<ul>
						<!--<li><a href="bootcamp.html">Data Bootcamp</a></li>-->
						<li><a href="mapa.php">Estado del mapa</a></li>
					</ul>
				</li>
				<li> <a href="https://docs.google.com/a/vectores.in/forms/d/1MoBsv3PLaFzNTqkdcyNiwJlrY4fOUu5N2-F_wSYz71Y/viewform">Registro</a></li>
				<li> <a class="en" href="en">en</a></li>
				<li> <a class="tw" href="https://twitter.com/ABRELATAM">Twitter</a></li>
				<li> <a class="fb" href="https://www.facebook.com/ABRELATAM">Facebook</a></li>
    		</ul>
    	</nav>
    </div>
  </div>
</header> 