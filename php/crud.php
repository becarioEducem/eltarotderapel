<?php
	require('db.php');			
	//TODO: Si no tenim variable de sessió, verifiquem usuari i contrasenya rebuts pel POST
	//TODO: Si la validació falla, redirigi a login.php, si validem, creem variable de sessió
	//TODO: Si tenim variable de sessió, iniciem càrrega de dades
		//Control d'esborrat i revisat de registres a mig fer
		if(isset($_GET['aksi'])){
			$aksi = filter_input(INPUT_GET, 'aksi', FILTER_SANITIZE_STRING);
			$id   = filter_input(INPUT_GET, 'nik', FILTER_SANITIZE_NUMBER_INT);
			//TODO: Si $aksi és 'borrar' esborrem el registre amb id $id
			//TODO: Si $aksi és 'revisar' canviem l'estat de revisió del registre amb id $id
		}
		$filter = (isset($_GET['filter']) ? $_GET['filter'] : 0);
		//TODO: $contactData hauria de contenir el resultat de consultar les dades de contacte (ja filtrades)
		//TODO: Usant $contactData cal crear la taula HTML amb les dades de contacte (cas d'haver-n'hi).
		$contactData = getContactData($filter);
		$contHTMLTable = '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="David González">
	<meta name="robots" content="noindex, nofollow">
	<title>El Tarot de Rapel - CRUD</title>
	<link rel="icon" href="../img/favicon.png">
	<!-- Bootstrap 4.3.1 resources-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Kalam:700" rel="stylesheet"> 
	<!-- Font Awesome 5.6.3-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="../css/crud.css">
	<!-- JQuery 3.3.1 + Popper.JS 1.14.6 + Bootstrap JS 4.3.1 -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../js/crud.js"></script>
</head>
<body>
	<header class="fixed-top">
		<nav class="navbar navbar-dark">
			<div class="navbar-brand"><h1><a id="mainbrand" class="hovereffect" href="../index.html">El Tarot de Rapel</a></h1></div>
			<a class="btn btn-lg btn-danger" href="./logout.php" role="button">Logout</a>
		</nav>
	</header>
		
	<main class="maincrud mt-5">
		<div class="content">
			<h2>Lista de clientes</h2>
			<hr>
			<form class="form-inline" method="GET">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="submit()">
						<option value="0" <?php if($filter == 0){ echo 'selected'; } ?>>Pendientes</option>
						<option value="1" <?php if($filter == 1){ echo 'selected'; } ?>>Revisados</option>
					</select>
				</div>
			</form>
			<br />
			<?php //TODO: mostrar si s'ha eliminat/revisat correctament un determinat registre ?>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Nª</th>
						<th>Código Cliente</th>
						<th>Fecha Registro</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Teléfono</th>
						<th>Día Preferente</th>
						<th>Horario Preferente</th>
						<th>Mensaje</th>
						<th colspan="2">Acciones</th>
					</tr>
				<?php //TODO: Pintar els registres de la taula HTML ?>
				</table>
			</div>
		</div>
	</main>
</body>
</html>