<?php

class Cconexion {

    public static function conexionBD() {

        $host = 'localhost';
        $dbname = 'hospitalmorenita'; // Corrige el nombre de la base de datos
        $username = 'root'; // Corrige el nombre de usuario
        $password = ''; // Corrige la contraseña
        
        try {
            $conn = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $username, $password);
            //echo "Se ha podido conectar a la Base de datos";
        } catch (PDOException $pe) {
            die("No se ha conectado a la Base de datos: " . $pe->getMessage());
        }
        return $conn;
    }

    public static function CerrarConexion() {
        $connex = CConexion::conexionBD();
        $connex = null; // Cerrar la conexión
        return $connex;
    }
}

?>
