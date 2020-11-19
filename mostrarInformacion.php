<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Ingenieros</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	$nombre = $_POST['nombre'];
	$empleado = $_POST['empleado'];

    echo 'Datos que enviados';
    echo "<br>";
    echo htmlspecialchars($nombre);
    echo "<br>";
    echo htmlspecialchars($empleado);
    echo "<br>";

	$servername ="127.0.0.1";
	$user = "root";
	$pass = "1234";
	$database = "progweb";
	
	//Generando un conector a la base de datos.
	 //coneccion Mysql con un usuario.
	

        $conn = mysqli_connect($servername, $user, $pass);

        // Verficar la conneccion.

        if (mysqli_connect_errno()) {

            echo 'Fallo la conexión';
            die("Connection failed: " . mysqli_connect_error());
            exit();
        }

        //Realizamos la conexio a la base de datos.

        mysqli_select_db($conn, $database) or die("Falla la conexión a la base de datos");
        mysqli_set_charset($conn, "utf8"); 
		// el set de caracteres de la base de datos
        //Realizamos las consultas deseadas.

        $query = "INSERT INTO ingeniero (no_empleado, nombre, puesto) VALUES($empleado, '$nombre' , 'Ingeniero Residente');";

        $result = mysqli_query($conn, $query);
        
        if($result == false){
            
            echo 'Error en la consulta';
			            
        } else {
            
            echo "Registro guardado<br><br>";
            echo "<table><tr><td>$empleado</td></tr>";
            echo "<table><tr><td>$nombre</td></tr></table>";
            
        }

        mysqli_close($conn);


?>
	</body>
</html>