<?php
include("claseRegistro.php");

$documento = $_GET['documento'];
$clave = $_GET['password'];


iniciar::autenticar($documento, $clave);





