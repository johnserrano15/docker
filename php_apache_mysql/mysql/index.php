<?php

  // echo "<h1>Hola php</h1>";
 
  // $connection = mysqli_connect("my-mysql", "root", "ja1509", "prueba");
   
  // if (!$connection) {
  //     echo "Error conectando a la base de datos";
  //     exit;
  // }
   
  // echo "Conecatdo a la base de datos correctamente.";

  // Datos de la base de datos
  $usuario = "root";
  $password = "ja1509";
  $servidor = "my-mysql";
  $basededatos = "prueba";
  
  // creación de la conexión a la base de datos con mysql_connect()
  $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
  
  // Selección del a base de datos a utilizar
  $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  // establecer y realizar consulta. guardamos en variable.
  $consulta = "SELECT * FROM personas";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  
  // Motrar el resultado de los registro de la base de datos
  // Encabezado de la tabla
  echo "<table borde='2'>";
  echo "<tr>";
  echo "<th>Nombre</th>";
  echo "<th>Apellido</th>";
  echo "</tr>";
  
  // Bucle while que recorre cada registro y muestra cada campo en la tabla.
  while ($columna = mysqli_fetch_array( $resultado ))
  {
    echo "<tr>";
    echo "<td>" . $columna['Nombres'] . "</td><td>" . $columna['Apellidos'] . "</td>";
    echo "</tr>";
  }
  
  echo "</table>"; // Fin de la tabla
  // cerrar conexión de base de datos
  mysqli_close( $conexion );

?>