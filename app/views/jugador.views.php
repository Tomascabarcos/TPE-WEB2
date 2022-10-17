<?php

    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class Jugadorviews{

        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }

        function obtenerjugadores($jugadores){
            $this->smarty->assign("jugadores" , $jugadores);
            $this->smarty->display('ListaJugadores.tpl');
        }
        
        function detallejugador($jugador){
            $this->smarty->assign('jugador', $jugador);
            $this->smarty->display('DetalleJugador.tpl');
        }

        function vistaEditForm($Editarjugador){
            $this->smarty->assign('editarJugador', $Editarjugador);

            $this->smarty->display('EditJugadorForm.tpl');
        }

      
    }