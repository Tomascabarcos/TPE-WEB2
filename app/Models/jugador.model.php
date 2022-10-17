<?php

    class JugadorModel{

        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=deportes;charset=utf8', 'root', '');
        }
        public function ObtenerJugadores() {
            $query = $this->db->prepare("SELECT * FROM jugadores_futbol ");
            $query->execute();
            $jugadores = $query->fetchAll(PDO::FETCH_OBJ);
            return $jugadores;
        }

        public function detalleJugador($id){
            $query = $this->db->prepare("SELECT jugadores_futbol.*, equipos.nombre_equipo as equipos FROM jugadores_futbol JOIN equipos ON jugadores_futbol.id_equipo = equipos.id_equipo WHERE ID=?");
            $query->execute([$id]);
            $games = $query->fetch(PDO::FETCH_OBJ);
            return $games;
        }

        public function AgregarJugadorBD($jugador, $posicion, $nacionalidad, $id_equipo){
            $query = $this->db->prepare("INSERT INTO `jugadores_futbol`(`nombre`, `posicion`, `nacionalidad`, `id_equipo`) VALUES (?, ?, ?, ?)");
            $query->execute([$jugador, $posicion, $nacionalidad, $id_equipo]);
    
            return $this->db->lastInsertId();
        }

     
        public function editarJugadorForm($id){
            $query = $this->db->prepare('SELECT * FROM jugadores_futbol WHERE ID=?');
            $query->execute([$id]);
            $EditarJugador = $query->fetch(PDO::FETCH_OBJ);
            return $EditarJugador;
        }

        public function editarJugador( $jugador,   $posicion,   $nacionalidad, $id){
            $query = $this->db->prepare("UPDATE `jugadores_futbol` SET nombre=?, posicion=?, nacionalidad=? WHERE ID=?");
            $query->execute([ $jugador,   $posicion,   $nacionalidad, $id]);
            header("Location: " . BASE_URL . 'home');
        }

        public function Borrarjugador($id){
            $query = $this->db->prepare('DELETE FROM `jugadores_futbol` WHERE ID = ?');
            $query->execute([$id]);
        }

    }