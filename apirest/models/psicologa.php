<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
    class Psicologa extends  Conectar{

        public function getPsico(){
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

        public function getPsicoId($id){
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

        public function insertPsico($id_psico, $nombre_psico, $edad_psico, $especialidad_psico){
            $id_psico= $_POST["id_psico"];
            $nombre_psico = $_POST["nombre_psico"];
            $edad_psico = $_POST["edad_psico"];
            $especialidad_psico = $_POST["especialidad_psico"];
            $conectar=parent::Conexion();
            parent::set_name();
            $stm="INSERT INTO psicologas(id_psico,nombre_psico,edad_psico,especialidad_psico) VALUES(?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$id_psico);
            $stm->bindValue(2,$nombre_psico);
            $stm->bindValue(3,$edad_psico);
            $stm->bindValue(4,$especialidad_psico);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        }
    }

?>