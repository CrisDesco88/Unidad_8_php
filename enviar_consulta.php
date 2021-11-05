<?php 

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$edad_form = $_POST['edad'];
$email_form = $_POST['email'];
$motiv_form = $_POST['motivo'];
$mens_form = $_POST['mensaje'];

include('conexion.php');

mysqli_query($conexion, "INSERT INTO consultas VALUES ('$nombre_form', '$apellido_form', $edad_form, '$email_form', '$motiv_form', '$mens_form')");
mysqli_close($conexion);
header("Location: contacto.php?ok");
?>