<?php

    class EquiposModel{

        private $db;
    
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=deportes;charset=utf8', 'root', '');
        }

        public function Obtenerequipos(){
            $query = $this->db->prepare("SELECT *FROM equipos");
            $query->execute();
            $genders = $query->fetchAll(PDO::FETCH_OBJ);
            return $genders;
        }

        function detalleEquipo($idEquipo){
            $query = $this->db->prepare ('SELECT  `nombre`, `posicion`, `nacionalidad` FROM Jugadores_futbol WHERE id_equipo=?');
            $query->execute(array($idEquipo));
            $equipo = $query->fetchALL(PDO::FETCH_OBJ);
            return $equipo;  
        }

        public function AñadirEquipos($nombreEquipos)
        {
            $query = $this->db->prepare("INSERT INTO `equipos`(`nombre_equipo`) VALUES (?)");
            $query->execute([$nombreEquipos]);
        }
        
        public function EditarEquipoform($id){
            $query = $this->db->prepare('SELECT * FROM equipos WHERE id_equipo=?');
            $query->execute([$id]);
            $editarEquipo = $query->fetch(PDO::FETCH_OBJ);
            return $editarEquipo;
        }

        public function Editarequipo($nombreEquipos, $id_genero){
            $query = $this->db->prepare("UPDATE `equipos` SET nombre_equipo=? WHERE id_equipo=?");
            $query->execute([$nombreEquipos, $id_genero]);
            header("Location: " . BASE_URL . "EQUIPOS");
        }

        public function Borrarequipos($id_equipo){
            $query = $this->db->prepare('DELETE FROM `equipos`WHERE id_equipo = ?');
            $query->execute([$id_equipo]);
        }
    

    }


    