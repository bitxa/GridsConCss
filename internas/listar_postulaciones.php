    <?php
    include("../dll/config.php");
	include("../dll/my_sql_connection.php");
	$miconexion= new Connection(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	$query_maker = $miconexion->connect();


    $sql = "SELECT p.nombres, p.apellidos, p.cedula, m.nombre, m.raza, m.postulaciones
                FROM personas1 p
                JOIN mascotas m
            ON p.mascota = m.nombre;";

    $data = $query_maker->query($sql);

    

    echo "    
    <table border='5' style = 'border-collapse: collapse; margin: 25px 0; font-size: 0.9em; font-family: sans-serif;
                                min-width: 900px; min-height: 500px; box-shadow: 0 0 60px rgba(0, 0, 0, 0.15);'>
        <tr style = 'background-color: #009879; coloalign-self:center;r: #ffffff; text-align: center;'>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Mascota</th>
            <th>Raza</th>
            <th>Postulaciones</th>
        </tr>";

    while($row = mysqli_fetch_array($data))
    {
    echo "<tr>";
    echo "<td>" . $row['nombres'] . "</td>";
    echo "<td>" . $row['apellidos'] . "</td>";
    echo "<td>" . $row['cedula'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['raza'] . "</td>";
    echo "<td>" . $row['postulaciones'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

?>