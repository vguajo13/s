<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Reportes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Manejar Reportes</h1>
<br>
<table border="0" align="center">
  <tr>
    <td><a href="Index.html">HOME</a><br></td>
	  <td><a href="BuscarReportes.php">Busqueda en Reportes.</a><br></td>
    <td><img src="imagenes/Reportes-de-sustentabilidad-alineados-a-ODS.jpg" width="200"/></td>
  </tr>
  <tr>
  
  <th>
  <td>
  
  <form id="formulario"  action="mostrarInformacion2.php" method="post">
  
  <p><label>Fecha:</label>
    <input type="date" name="fecha" minlegth="2" requerid/>
  </p>
  <p><label>Equipo</label>
    <input type="text" name="equipo" minlegth="2" requerid>
  </p>
  <p><label>Voltaje</label>
    <input type="number" name="voltaje" minlegth="2" requerid>
  </p>
  <p><label>Amperaje</label>
    <input type="number" name="amperaje" minlegth="2" requerid>
  </p>
	<p><label>Potencia</label>
    <label id="potencia">4445 KW</label>
  </p>
  <p>
    <input type="submit"  value="Enviar" />
  </p>
  </td>
  </th>
  </tr>
</table>
	<script src="funciones.js">
		
	</script>
</body>
</html>
