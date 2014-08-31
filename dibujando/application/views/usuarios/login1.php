<?php
if($ok == '1') { ?>
<script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        alert("Fuiste registrado exitosamente. Por favor corroborá tu casilla que te hemos enviado un correo electrónico con tus datos de acceso. Si no lo encontrás en tu bandeja de entrada, recordá chequear también las casillas de spam o correo no deseado.");
    });
</script>
<?php } ?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>CONCURSO DE DIBUJO FUNDACION BANCO CIUDAD</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Signika:600,400,300' rel='stylesheet' type='text/css'>
        <link href="/assets/style.css" rel="stylesheet" type="text/css" media="screen">
        <link href="/assets/style-headers.css" rel="stylesheet" type="text/css" media="screen">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link href="style-ie.css" rel="stylesheet" type="text/css" media="screen">
	<![endif]-->
</head>

<body class="home boxed shadow p05"><div class="root">
  <header class="h3">
		<section class="top">
		  <div>
		    <nav>
		      <ul>
		        <li class="current-menu-item"><a href="/usuarios/login/">INGRESAR</a></li>
		        <li><a href="/usuarios/registrar/">REGISTRATE</a></li>
	          </ul>
	        </nav>
	      </div>
		</section>
		<section class="main-header">
                    <p class="title"><a href="./"><img src="/assets/images/temp/logo.png" alt="MultiPurpose" width="219" height="35"></a> <span>Ultra Customizable Template</span></p>
			<nav class="social">
				<ul>
					<li></li>
				</ul>
			</nav>
			<nav class="mainmenu">
			  <ul>
			    <li ><a href="/">Inicio</a></li>
			    <li><a href="/bases-y-condiciones/">Bases y condiciones</a></li>
			    <li><a href="/jurado/">El jurado</a></li>
			    <li ><a href="/premios/">Premios</a></li>
			    <li><a href="/dibujos-participantes/">Dibujos participantes</a></li>
		      </ul>
		  </nav>
			<div class="clear"></div>
		</section>
	</header>


	<section class="content">
	<section class="columns">
	 	<h2><span>Ingresar</span></h2>
	 	<p>&nbsp;</p>
	 	<div class="col2">
	 	  <form action="#" method="post" class="form1">
	 	    <p>
	 	      <label for="text">Usuario</label>
                      <input name="usuario" type="text" autofocus required>
 	        </p>
             <p>
	 	      <label for="text">Contraseña</label>
                      <input name="password" type="password" id="text" required>
            </p>
	 	    <p class="submit">
	 	      <button type="submit" name="submit" value="1">Ingresar</button>
 	        </p>
 	      </form>
 	  </div>
	 	<p>&nbsp;</p>
	</section>
	</section>


	<footer>
	  <section class="bottom">
		  <p align="right">Desarrolado por<a href="http://www.eclypsedesign.com" target="_blank"> Eclypse | Cloud Web Services</a></p>
			<nav class="social"></nav>
	  </section>
  </footer></div>

    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/scripts.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/ie.js"></script>
	<![endif]-->
</body>

</html>