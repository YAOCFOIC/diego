<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cierre</title>
</head>
<body>
	<?php
		/*reanudarmos la session que ya se encuentra abierta*/
		/*indicamos cual sesion queremos cerrar*/
		session_start();

		/*cerramos la secion*/
		session_destroy();

		header("location:index.php");
	?>
</body>
</html>