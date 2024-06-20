<?php

include("claseRegistro.php");

$documento = $_GET['documento'];
$nombre = $_GET['nombres'];
$apellido = $_GET['apellidos'];
$correoUsuario = $_GET['correo'];
$clave = $_GET['password'];
$edad = $_GET['edad'];
$fecha_nacimiento = $_GET['fecha_nacimiento'];
$telefono = $_GET['telefono'];

login::registrar($documento, $nombre, $apellido, $correoUsuario, $clave, $edad, $fecha_nacimiento, $telefono);
