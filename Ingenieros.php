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
<h1>Manejar Ingenieros</h1>
<br>
<table border="0" align="center">
  <tr>
    <td><a href="Index.html">HOME</a><br></td>
	  <td><a href="BuscarIngeniero.php">Busqueda en Ingenieros.</a><br></td>
    <td><img src="imagenes/Rol-de-RH-en-la-administración-de-la-nómina_imgdest.jpg" width='200' /></td>
  </tr>
  <tr>
    <th> 
    <td><form  action="mostrarInformacion.php" id = "formulario" method="post">
        <p>
          <label>Nombre:</label>
          <input type="text" name="nombre" minlegth="3" required />
        </p>
        <p>
          <label>Numero de empleado:</label>
          <input type="number" name="empleado" minlegth="2" required/>
        </p>
        <p>
          <input type="submit" onClick="" value="Enviar" />
        </p>
      </form>
      <div id="error"></div></td>
    </th>
  </tr>
</table>

<script src="funciones.js"></script>
</body></html>
