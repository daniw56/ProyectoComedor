<?php include ('functions.php');
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];


ejecutarSQLCommand("INSERT INTO  `usuarios` (nombre, apellido)
VALUES (
'$nombre' ,
'$apellido')

 ON DUPLICATE KEY UPDATE `nombre`= '$nombre',
`apellido`='$apellido';");

 ?>