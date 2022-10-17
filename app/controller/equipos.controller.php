<?php

    require_once './app/Models/equipos.model.php';
    require_once './app/views/equipos.views.php';
    require_once './app/helpers/login.helpers.php'; 
    class EquiposController{

        private $model;
        private $view;
    
        public function __construct(){

            $this->model = new EquiposModel;
            $this->view = new EquiposViews();
            $this->chequeado = new LoginHelper();
        }      
  
        public function ObtenerEquipos(){
            $equipos = $this->model->Obtenerequipos();
            $this->view->obtenerequipos($equipos);
        }

        function FormJugadores(){
            $jugadores = $this->model->ObtenerEquipos();
            $this->view->VistaFormJugadores($jugadores);
        }
        function DetalleEquipo($idEquipo){
            $equipo = $this->model->detalleEquipo($idEquipo);

         
            $this->view->detallEEquipo($equipo);
            
        }
        public function AñadirEquipos() {
            $this->chequeado->checkLoggedIn();
           
            $nombreEquipos= $_POST['nombreEquipos'];
            $this->model->Añadirequipos($nombreEquipos);
            header("Location: " . BASE_URL ."EQUIPOS");
        }
        

        function EditarFormEquipo($id){
            $this->chequeado->checkLoggedIn();
            $editarEquipo = $this->model->EditarEquipoform($id);
            $this->view->VistaFormEquipo($editarEquipo);
        }

        function EditarEquipo($id_genero){
            $this->chequeado->checkLoggedIn();
            $nombreEquipos = $_POST['nombreEquipos'];
            $this->model->Editarequipo($nombreEquipos, $id_genero);
        }

        
        
        function BorrarEquipos($id_equipo) {
            $this->chequeado->checkLoggedIn();
            $this->model->Borrarequipos($id_equipo);
            header("Location: " . BASE_URL .  "EQUIPOS");
         }


        
    }
