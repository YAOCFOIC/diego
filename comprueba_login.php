<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comprueba</title>
</head>
<body>
	<?php
		try{

			$base= new PDO("mysql:host=localhost; dbname=camact_bd","root","");

			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql="SELECT * FROM users WHERE email = :Email AND password = :Password";
		
			$resultado=$base->prepare($sql);

			/*Me rescate lo que el usuario a introducido en los cuadros de textos*/
			$Email=htmlentities(addslashes($_POST["Email"]));

			$Password=htmlentities(addslashes($_POST["password"]));

			$resultado->bindValue(":Email",$Email);

			$resultado->bindValue(":Password",$Password);

			$resultado->execute();

			$numero_registro=$resultado->rowCount();

			if ($numero_registro!=0) {


				/*si el usuario existe me crea la sesion*/
				session_start();

				/*almacenar en la variable super global el login*/

				$_SESSION["login"]=$_POST["Email"];

				header("location:usuarios_registrados.php");
			 	
			 } else{

			 	header("location:Formulario.php");

			 }

		}catch(Exception $e){
			die("Error: ") . $e->getMessage();
		}
	?>

</body>
</html>