<?php

class conectar
{
    public static function conexion()
    {

        try {
         //   $conexion = new PDO('mysql:localhost=localhost; dbname=ingbio_app_capacitacion;', 'ingbio_app_capacitacion_user', 'EI,Y6y*yD7J{');
            $conexion = new PDO('mysql:localhost=localhost; dbname=app_capacitacion;', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $e) {
            die("Error :" . $e->getMessage());
            echo "Linea del error :" . $e->getLine();
        }
        return $conexion;
    }
}
