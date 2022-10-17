<?php
    require_once "app/controller/jugador.controller.php";
    require_once "app/controller/equipos.controller.php";
    require_once "app/controller/login.controller.php";

    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    $action = 'home';
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    session_start();
 
    $partesURL = explode("/" , $action);
 

    $jugadoresController = new JugadorController();
    $EquiposController = new EquiposController();
    $loginController = new LoginController();
    switch ($partesURL[0]) {
        case 'home':
            $jugadoresController-> obtenerJugadores();
            $EquiposController->FormJugadores();
        break;
        case 'DetalleJugador':
            $id = $partesURL[1];
            $jugadoresController->DetalleJugador($id);
        break;    
        case 'añadirJugador':
            $jugadoresController->AñadirJugador();
        break;
        case 'EQUIPOS':
            $EquiposController->ObtenerEquipos();
        break;
        case 'DetalleEquipos':
            $id = $partesURL[1];
            $EquiposController->DetalleEquipo($id);
        break;
        case 'AñadirEquipos':
            $EquiposController->AñadirEquipos();
        break;
     

        case 'EditarFormJugador':
            $id = $partesURL[1];
            $jugadoresController->EditJugadorForm($id);
        break;

        case 'EditarJugador':
            $id = $partesURL[1];
            $jugadoresController->EditarJugador($id);
        break;  
        
        case 'BorrarJugador':
            $id = $partesURL[1];
            $jugadoresController-> Borrarjugador($id);
        break;
       
        case 'EditarFormEquipos':
            $id = $partesURL[1];
            $EquiposController->EditarFormEquipo($id);
        break;
        case 'EditarEquipos':
            $id_equipo = $partesURL[1];
            $EquiposController->EditarEquipo($id_equipo);
        break;

        case 'BorrarEquipo':
            $id = $partesURL[1];
            $EquiposController->BorrarEquipos($id);
        break;

        //validacion de usuario

        case 'formlogin':
            $loginController ->showLogin();
        break;
        case 'ValidarUser':
            $loginController->ValidarUsuario();
        break;
        case 'logoutuser':
            $loginController->logoutuser();
        break;
        default:
            echo "404 not found";
        break;
       
            


    }




