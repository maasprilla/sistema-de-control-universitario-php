<!Doctype html>
<html>
<head>
	<title>Sistema de Control</title>
	<link rel="stylesheet" type="text/css" href="./static/css/bootstrap-3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./static/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./static/css/hover-min.css">

	<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

</head>
<body>
	<header>
		<nav  class="navbar  MainMenu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

      </ul>

      <ul id="MainMenu-list" class="nav navbar-nav navbar-right MainMenu-list">



				<li class="dropdown  MainMenu-item">
					<a href="#" class="dropdown  MainMenu-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar Docente <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Registar Docente</a></li>
						<li><a href="#">Editar Docente</a></li>
						<li><a href="#">Inhabilitar Docente</a></li>
					</ul>
				</li>

				<li class="dropdown">
          <a href="#" class="dropdown-toggle MainMenu-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar Grupo <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Crear Grupo</a></li>
            <li><a href="#">Editar  Grupo</a></li>
            <li><a href="#">Inhabilitar Grupo</a></li>
          </ul>
        </li>

				<li class="dropdown">
          <a href="#" class="dropdown-toggle MainMenu-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar Alumno <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Registar Alumno</a></li>
            <li><a href="#">Editar Alumno</a></li>
            <li><a href="#">Inhabilitar Alumno</a></li>
          </ul>
        </li>
				<li class="dropdown">
          <a href="#" class="dropdown-toggle MainMenu-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar Reporte <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ver Informe</a></li>
            <li><a href="#">Generar Reporte Mensual</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</header>


	<section class="sectionLogin">
		<form class="sectionLogin-form" id="FormLogin" role="form"  action="./scriptphp/login/verificar.php" method="post">

			<h1 class="sectionLogin-title">Ingresar</h1>

  <div class="form-group">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>


  <button type="submit" class="btn btn-warning sectionLogin-button">Iniciar Sesion</button>
</form>

	</section>








	<footer class="Footer">
		<div class="Footer-redes">
			<span class="icon-facebook Footer-redesicon"></span>
			<span class="icon-google-plus Footer-redesicon"></span>
			<span class="icon-twitter Footer-redesicon"></span>
			<span class="icon-instagram Footer-redesicon"></span>
		</div>

	</footer>
	<script type="text/javascript" src="./static/js/jquery/jquery.js"></script>
	<script type="text/javascript" src="./static/js/bootstrap-3.3.6/js/bootstrap.min.js"></script>


</body>
</html>
