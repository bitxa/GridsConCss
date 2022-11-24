<?php
	include("../dll/config.php");
	include("../dll/my_sql_connection.php");
	$miconexion= new Connection(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	$query_maker = $miconexion->connect();

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$cedula=$_POST['cedula'];
	$mascota=$_POST['mascota'];

    echo "$mascota";
    
    $new_guy_query="insert into personas1 values(null, '$nombres', '$apellidos', '$correo', '$telefono', '$direccion', '$cedula', '$mascota')";
    
    #uodate postulacion de mascota en especifico
    $update_numero_postulacion_query= "UPDATE mascotas SET postulaciones = postulaciones + 1 WHERE nombre='$mascota'";

    $query_maker->query($new_guy_query);
    $query_maker->query($update_numero_postulacion_query);
    
    echo "<script>window.history.back();<script>"
?>

	
