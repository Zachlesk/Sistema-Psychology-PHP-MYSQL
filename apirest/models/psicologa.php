<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
    class Psicologas extends Conectar{

        public function getPsicologas(){
            try {
                $conectar = parent::Conexion();
                parent::set_name();
                $stm = $conectar->prepare("SELECT * FROM psicologas");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return $e-> getMessage();
            }
        }

        public function getPsicologasId($id){
            try {
                $conectar = parent::Conexion();
                parent::set_name();
                $stm = $conectar->prepare("SELECT * FROM psicologas WHERE id = ?");
                $stm->bindValue(1,$id);
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e) {
                return $e-> getMessage();
            }
        }

        public function insertPsicologas($id_psicologas, $nombre_psicologas, $edad_psicologas, $especialidad, $cargo){
            $id_psicologas= $_POST["id_psicologas"];
            $nombre_psicologas = $_POST["nombre_psicologas"];
            $edad_psicologas = $_POST["edad_psicologas"];
            $especialidad= $_POST["especialidad"];
            $cargo = $_POST["cargo"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO psicologas(id_psicologas,nombre_psicologas,edad_psicologas,especialidad,cargo) VALUES(?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$id_psicologas);
            $stm->bindValue(2,$nombre_psicologas);
            $stm->bindValue(3,$edad_psicologas);
            $stm->bindValue(4,$especialidad);
            $stm->bindValue(5,$cargo);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        }
    }

?>