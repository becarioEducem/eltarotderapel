<?php
      //TODO: SI ESTEM LOGINATS REDIRIGIM AL CRUD
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="David González">
    <meta name="robots" content="noindex, nofollow">
    <title>El Tarot de Rapel - Login</title>
    <!-- Bootstrap 4.3.1 resources-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome 5.6.3-->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="icon" href="../img/favicon.png">
    <link href="../css/login.css" rel="stylesheet">
    <!-- JQuery 3.3.1 + Popper.JS 1.14.6 + Bootstrap JS 4.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center"><div class="brand_logo_container"><img src="../img/adivino.png" class="brand_logo" alt="Avatar"></div></div>
          <div class="d-flex justify-content-center form_container">
            <form action="./crud.php" method="POST">
              <div class="input-group mb-3">
                <div class="input-group-append"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                <input type="text" name="uname" class="form-control input_user" value="" placeholder="Introduce tu usuario">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-append"><span class="input-group-text"><i class="fas fa-key"></i></span></div>
                <input type="password" name="password" class="form-control input_pass" value="" placeholder="Introduce tu contraseña">
              </div>
              <div class="d-flex justify-content-center mt-3 login_container">
                <button type="submit" name="button" class="btn login_btn">Login</button>
              </div>
            </form>
          </div>
			  </div>
		  </div>
	  </div>
  </body>
</html>