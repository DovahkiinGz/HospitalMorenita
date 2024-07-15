<?php
include_once "CConexion.php";

class CPacientes {
    
    public static function mostrarTotalDePacientes() {
        $query = CConexion::ConexionBD()->prepare('SELECT * FROM paciente');
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public static function AgregarPaciente(){

        $rut = $_POST['paraRut'];
        $nombre = $_POST['paraNombre'];
        $apellido = $_POST['paraApellido'];
        $edad = $_POST['paraEdad'];

        $query = $query = CConexion::ConexionBD()->prepare('INSERT INTO PACIENTE(rut,nombre,apellido,edad) VALUES(?,?,?,?)');
        
        $query->bindParam(1,$rut,PDO::PARAM_INT);
        $query->bindParam(2,$nombre,PDO::PARAM_STR);
        $query->bindParam(3,$apellido,PDO::PARAM_STR);
        $query->bindParam(4,$edad,PDO::PARAM_INT);

        if($query->execute()){
            echo "Ingreso correcto";
            header("Location: ../index.php");

        } else {
            echo "Ingreso Incorrecto";
        }   
        
    
    }

    public static function ModificarPaciente(){

        $id = $_POST['paraCodigo'];
        $rut = $_POST['paraRut'];
        $nombre = $_POST['paraNombre'];
        $apellido = $_POST['paraApellido'];
        $edad = $_POST['paraEdad'];

        $query = $query = CConexion::ConexionBD()->prepare("UPDATE PACIENTE SET PACIENTE.rut = ?, PACIENTE.nombre = ?,PACIENTE.apellido = ?,PACIENTE.edad = ? WHERE PACIENTE.id=?");
        
        $query->bindParam(1,$rut,PDO::PARAM_INT);
        $query->bindParam(2,$nombre,PDO::PARAM_STR);
        $query->bindParam(3,$apellido,PDO::PARAM_STR);
        $query->bindParam(4,$edad,PDO::PARAM_INT);
        $query->bindParam(5,$id,PDO::PARAM_INT);

        if($query->execute()){
            echo "Ingreso correcto";
            header("Location: ../index.php");

        } else {
            echo "Ingreso Incorrecto";
        }   
        
    
    }

    public static function EliminarPaciente(){

        $id = $_POST['paraCodigo'];

        $query = $query = CConexion::ConexionBD()->prepare("DELETE FROM PACIENTE WHERE PACIENTE.id=?");
        
        $query->bindParam(1,$id,PDO::PARAM_INT);

        if($query->execute()){
            echo "Ingreso correcto";
            header("Location: ../index.php");

        } else {
            echo "Ingreso Incorrecto";
        }   
        
    
    }
}

if (array_key_exists("insertar",$_POST)){
    CPacientes::AgregarPaciente();
}

if (array_key_exists("modificar",$_POST)){
    CPacientes::ModificarPaciente();
}

if (array_key_exists("eliminar",$_POST)){
    CPacientes::EliminarPaciente();
}

?>
