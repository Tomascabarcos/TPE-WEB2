<?php

    require_once './app/Models/login.model.php';
    require_once './app/views/login.views.php';


    class LoginController{
        
        private $view;
        private $model;

        public function __construct(){

            $this->model = new LoginModel();
            $this->view = new loginView();
        }

        public function showlogin(){
            $this->view->LoginForm();
        }

        public function ValidarUsuario(){
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $usuario = $this->model->ObtenerUserEmail($email);
            if ($usuario && password_verify($contraseña, $usuario->password)){
                session_start();
                $_SESSION['USUARIOS_ID'] = $usuario->ID;
                $_SESSION['USUARIOS_EMAIL'] = $usuario->email;
                $_SESSION['IS_LOGGED'] = true;
    
    
                header("Location: " . BASE_URL);
            } 
            else {
                $this->view->LoginForm("Usuario invalido");
            }
        }

        public function logoutuser(){
            session_start();
            session_destroy();
            header("Location: " . BASE_URL);
        }


    }


       

