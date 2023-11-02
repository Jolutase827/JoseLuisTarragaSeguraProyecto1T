<?php
    class Cliente{
        private $dniCliente;
        private $nombre;
        private $direccion;
        private $email;
        private $pwd;
        private $administrador;

        public function __construct($dniCliente, $nombre, $direccion, $email, $pwd, $administrador){
            $this->dniCliente = $dniCliente;
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->administrador = $administrador;
        }

        public function __get($name){
            if(property_exists(__CLASS__,$name)){
                
            }else{
                return NULL;
            }
        }

    }