<?php
	include("../dll/config.php");
	include("../dll/class_mysqli.php");
	$miconexion= new class_mysqli();
	$miconexion->conectar(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	//extract($_POST);

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$fechaNacimiento=$_POST['fecha'];

	$sql="insert into personal values('','$nombres', '$apellidos', '$correo', '$telefono', '$direccion', '$fechaNacimiento')";
	$resSql=$miconexion->consulta($sql);

	phpinfo();

	//$sql="delete from personal where id = 1";

	//$sql="update personal set nombres = 'Juan', apellidos = 'Sonora' where id = 2";

	//$resSql=mysqli_query($conexion, $sql);

	if($resSql){
		echo "Sus datos se registraron correctamente";
	}else{
		echo "ERROR";
	}


?>