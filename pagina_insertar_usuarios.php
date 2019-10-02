<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
//pedimos lo datos del usuario
	$nombre=$_POST["name"];
	$usuario= $_POST["email"];
	$contrasenia= $_POST["password"];
	$cel=$_POST["phone"];
	$ciudad=$_POST["city"];
	$ocupacion=$_POST["occupation"];
//leame si los campos estan vacios
	
	$pass_cifrado= password_hash($contrasenia, PASSWORD_DEFAULT, array("cost" => 12 ));
	
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=camact_bd', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO users (name,email,password,phone,city,occupation) VALUES (:Name,:Email, :pass,:phone,:city,:occupation)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":Name"=>$nombre,":Email"=>$usuario, ":pass"=>$pass_cifrado,":phone"=>$cel,":city"=>$ciudad,":occupation"=>$ocupacion));		

		header("location:index.php");
		
		$resultado->closeCursor();


	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}


?>
</body>
</html> 