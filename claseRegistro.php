<?php
include("config/BdConect.php");

class login extends conexionBD
{
    public static function registrar($documento, $nombre, $apellido, $correoUsuario, $clave, $edad, $fecha_nacimiento, $telefono)
    {
        self::getConexion();
        $sql = "insert into usuarios (id_documento, nombre_p, apellido_p, correo, clave, edad, f_nacimiento, telefono) values ('$documento', '$nombre', '$apellido', '$correoUsuario', '$clave', '$edad', '$fecha_nacimiento', '$telefono');";
        self::$conexion->query($sql);

        header("location: controlador.php?seccion=seccion1");

        self::$conexion->close();

    }
    
}

class iniciar extends conexionBD
{
    static public function autenticar($documento, $clave)
    {
        $salida = "";
        self::getConexion();
        $sql = "select count(*) from usuarios";
        $sql .= "where id_documento = '$documento' and clave = '$clave';";
        self::$conexion->query($sql);

        while($fila = mysqli_fetch_array(self::$conexion->query($sql))){
            echo "estas adentro";
        }

        return $salida;



    }

}







