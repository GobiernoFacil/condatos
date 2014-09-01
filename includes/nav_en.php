<header <?php echo $body_class == "home" ? 'id="home"' : "" ;?> class="navbar">
  <div class="container">
    <div class="row">
    	<div class="col-sm-4">
				 <a class="logo" href="<?php echo $body_class == "home" ? '#intro' : "index.php#intro" ;?>">Con Datos</a>
    	</div>
    	<nav class="col-sm-8">
    		<ul class="navbar-brand">
    			<li><a  href="<?php echo $body_class == "home" ? '#about' : "index.php#about" ;?>">About</a></li>
				<li><a href="<?php echo $body_class == "home" ? '#programme' : "index.php#programme" ;?>">Programme</a></li>
				<li> <a href="<?php echo $body_class == "home" ? '#side-events' : "index.php#side-events" ;?>" title="eventos">Side events</a>
					<ul>
						<!--<li><a href="bootcamp.html">Data Bootcamp</a></li>-->
						<li><a href="map.php">State of the Map</a></li>
					</ul>
				</li>
				<li> <a href="https://docs.google.com/a/vectores.in/forms/d/1MoBsv3PLaFzNTqkdcyNiwJlrY4fOUu5N2-F_wSYz71Y/viewform" target="_blank">Registration</a></li>
				<li> <a class="en" href="../index.php">es</a></li>
				<li> <a class="tw" href="http://twitter.com/intent/tweet?text=ConDatos:%20evento%20regional%20más%20importante%20sobre%20datos%20abiertos,%20oct%202—3,%20Ciudad%20de%20México%20-%20condatos.org&hashtags=Condatos,ABRELATAM">Twitter</a></li>
				<li> 
				        <a class="fb" href="https://www.facebook.com/dialog/share?app_id=691498740931722&display=popup&href=http%3A%2F%2Fcondatos.org&picture=http://ramo23.com/condatos/img/ConDatos_facebook.jpg&caption=Reference%20Documentation&description=Using%20Dialogs%20to%20interact%20with%20users.&redirect_uri=http%3A%2F%2Fcondatos.org" target="_blank">Facebook</a></li>
    		</ul>
    	</nav>
    </div>
  </div>
</header>