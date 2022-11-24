<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
	<link rel="icon" href="../images/logo.png" sizes="192x192"/>
	<link rel="apple-touch-icon" href="../images/logo.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
		integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="contenedor">
        <header class="cabeceraPrincipal">
			<section class="logotipo"><img src="../images/logotipoPet.png"></section>
			<nav class="menuPrincipal">
				<a href="../">Inicio</a>
				<a href="../internas/servicios.php">Servicios</a>
				<a href="#">Productos</a>
				<a href="../internas/adopcion.php">Adopción</a>
				<a href="../internas/personal.php">Contactos</a>
				<a href="../internas/postular.php">Postulacion</a>
				<a href="../internas/listar_postulaciones.php">Listado postulacion</a>
			</nav>
		</header>
		
		<main>
			<h2>Formulario de adopcion</h2>
			<form method="post" action="procesar_postulacion.php" class="formulario">
				<div class=groupInput>
					<label for="nombres">Nombres</label>
					<input type="text" name="nombres" id = "nombres" placeholder="Ingrese sus nombres: " required>
				</div>

				<div class=groupInput>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id = "apellidos" placeholder="Ingrese sus apellidos: " required>
				</div>

                <div class=groupInput> 
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" id = "direccion" placeholder="Ingrese sus direccion: ">
				</div>
                
				<div class=groupInput>
                    <label for="correo">Email</label>
                    <input type="text" name="correo" id = "correo" placeholder="Ingrese sus email: ">
                </div>


                <div class=groupInput>
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id = "telefono" placeholder="Ingrese su telefono: ">
                </div>

				<div class=groupInput>
                    <label for="telefono">Cedula <span class="alert">*</span></label required>
                    <input type="text" name="cedula" id = "cedula" placeholder="Ingrese su cedula: ">
				</div>

                <?php
                /*
                    $pdo = new PDO('mysql:host=localhost;dbname=petsdb', 'root', '');
                  
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $mascotas = $stmt->fetchAll();
                    */

                    include("../dll/config.php");
	                include("../dll/my_sql_connection.php");
	                $miconexion= new Connection(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	                $query_maker = $miconexion->connect();
                    $sql = "SELECT nombre name FROM mascotas";
                    $result =  $query_maker->query($sql);
                    $mascotas = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    
                ?>
                    <label for="mascota" style="margin-left:1vh;">Escoga una mascota:</label>
                    <select name="mascota" id ="mascota" style="max-width: 20vh; min-height: 5vh; margin-left:1vh;">
                        <?php foreach($mascotas as $mascota): ?>
                            <option value="<?= $mascota['name']; ?>"><?= $mascota['name']; ?></option>
                        <?php endforeach; ?>align-self:center;
                    </select>

				<button class="button" type="submit">Guardar</button>

			</form>


		
		</main>
		
		<section class="sponsor">
			<h3>Sponsor</h3>
		</section>
		<footer class="piePagina">
			<section class="derechos">
				<h3>Derechos Reservados UTPL 2022</h3>
			</section>

			<nav class="redesSociales">
				<a href=""><i class="fa-brands fa-facebook"></i>Facebook</a>
				<a href=""><i class="fa-brands fa-instagram"></i>Instagram</a>
				<a href=""><i class="fa-brands fa-tiktok"></i>Tiktok</a>
			</nav>

		</footer>
	</div>
</body>

</html>

