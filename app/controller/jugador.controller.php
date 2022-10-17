<?php
    require_once './app/Models/jugador.model.php';
    require_once './app/views/jugador.views.php';
    require_once './app/helpers/login.helpers.php';
  
    class JugadorController {

        private $model;
        private $view;


        public function __construct(){

            $this->model = new JugadorModel();
            $this->view = new JugadorViews();
            $this->chequeado = new LoginHelper();
        }

        public function obtenerJugadores(){
            $jugadores = $this->model->ObtenerJugadores();
            $this->view->obtenerjugadores($jugadores);
        }

        
        public function DetalleJugador($id){
            $jugador= $this->model->detalleJugador($id);
            $this->view->detallejugador($jugador);
        }

        function AñadirJugador(){
            $this->chequeado->checkLoggedIn();
            $jugador = $_POST['Jugador'];
            $posicion = $_POST['InputPosicion'];
            $nacionalidad = $_POST['InputNacionalidad'];
            $id_equipo= $_POST['id_equipo'];

            $this->model->AgregarJugadorBD($jugador, $posicion, $nacionalidad, $id_equipo);
            header("Location: " . BASE_URL);
        }
        
        function EditJugadorForm($id) {
            $this->chequeado->checkLoggedIn();
        
            $Editarjugador = $this->model->editarJugadorForm($id);
            $this->view->vistaEditForm($Editarjugador);
        }
        function EditarJugador($id){
            $this->chequeado->checkLoggedIn();

            $jugador = $_POST['InputJugador'];
            $posicion = $_POST['InputPosicion'];
            $nacionalidad = $_POST['InputNacionalidad'];
    
            $this->model->editarJugador( $jugador,   $posicion,   $nacionalidad, $id);
        }

        public function BorrarJugador($id){
            $this->chequeado->checkLoggedIn();

            $this->model->Borrarjugador($id);
            header("Location: " . BASE_URL);
        }

        

        
    }