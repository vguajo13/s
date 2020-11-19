<!doctype html>
<html>
<head>
<title>Ingenieros</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<?php
$servername = "127.0.0.1";
$user = "root";
$pass = "1234";
$database = "progweb";

//Generando un conector a la base de datos.
//coneccion Mysql con un usuario.


$conn = mysqli_connect( $servername, $user, $pass );

// Verficar la conneccion.

if ( mysqli_connect_errno() ) {

  echo 'Fallo la conexión';
  die( "Connection failed: " . mysqli_connect_error() );
  exit();
}

//Realizamos la conexio a la base de datos.

mysqli_select_db( $conn, $database )or die( "Falla la conexión a la base de datos" );
mysqli_set_charset( $conn, "utf8" );
// el set de caracteres de la base de datos
//Realizamos las consultas deseadas.

$query = "SELECT * FROM reportes ;";

$result = mysqli_query($conn, $query);

if ( $result == false ) {

  echo 'Error en la consulta';
  mysql_error();

} else {
  
  echo '<table class="table table-striped">';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Id_Equipo</th>';
  echo '<th>Fecha</th>';
  echo '<th>Voltaje</th>';
  echo '<th>Amperaje</th>';
  echo '</tr>';
  echo '</thead>';

  while( $row = mysqli_fetch_array( $result ) ) { 
	 
	 echo "<tr><td>".$row['Id_equipo']."</td>";
	 echo "<td>".$row['fecha']."</td>";
	 echo "<td>".$row['voltaje']."</td>";
	 echo "<td>".$row['amperaje']."</td></tr>";
  } }  
?>
</table>
<body>
</body>
</html>
