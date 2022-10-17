<?php

    class LoginModel {
        
        
        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=deportes;charset=utf8', 'root', '');
        }
        
        public function ObtenerUserEmail($email){
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
            $query->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
        


    
    
    }