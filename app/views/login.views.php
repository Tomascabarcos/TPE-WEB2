<?php

    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class loginView{

        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty(); 
        }

        
        public function LoginForm($error = null){ 
            $this->smarty->assign("error", $error);
            $this->smarty->display('Loginform.tpl');
        
        }
        
       


    }