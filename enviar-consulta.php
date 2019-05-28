<?php
$titulo_formu=$_POST['titulo'];
$autor_formu=$_POST['autor'];
$editorial_formu=$_POST['editorial'];
$email_formu=$_POST['email'];
$estado_formu=$_POST['estado'];

$datos_conexion=mysqli_connect("localhost", "root", "", "formulario");

mysqli_query($datos_conexion, "INSERT INTO form VALUES (DEFAULT, '$titulo_formu', '$autor_formu', '$editorial_formu', '$email_formu', '$estado_formu')");

mysqli_close($datos_conexion);

header("location: consulta_enviada.php");
?>