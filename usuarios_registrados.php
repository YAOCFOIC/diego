<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Material Design Bootstrap</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
  <!--Navbar -->
<nav class="mb-1 navbar-expand-lg navbar-dark info-color">

  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>   
          <?php
            echo $_SESSION["login"];
          ?> 
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
         <!--  <a class="dropdown-item" href="#"><i class="fas fa-cogs pr-2"aria-hidden="true"></i>Configuración</a> -->
          <form class="dropdown-item" action="cierre.php" method="post">
            <i class="fas fa-sign-out-alt"></i> <button >cierra sesion</button>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- main JavaScript-->
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>