<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class EquiposViews {

        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty(); 
        }

        function obtenerequipos($equipos){
            $this->smarty->assign('equipos', $equipos);
            $this->smarty->display('ListaEquipos.tpl');
        }
        
        function VistaFormJugadores($jugadores){
            $this->smarty->assign('jugadores', $jugadores);
            $this->smarty->display('AñadirJugador.tpl');
        }   
        

        function detallEEquipo($equipo){
            $this->smarty->assign('equipo', $equipo);
            $this->smarty->display('DetalleEquipo.tpl');
        }
      
        function VistaFormEquipo($editarEquipo){
            $this->smarty->assign('editarEquipo', $editarEquipo);
            $this->smarty->display('EditarEquipoForm.tpl');
        }

        
            




    
    }