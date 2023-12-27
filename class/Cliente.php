<?php
    class Cliente{
        private $dniCliente;
        private $nombre;
        private $direccion;
        private $email;
        private $pwd;
        private $administrador;

        public function __construct($dniCliente, $nombre = '', $direccion = '', $email='', $pwd ='', $administrador=''){
            $this->dniCliente = $dniCliente;
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->administrador = $administrador;
        }

        public function __get($name){
            if(property_exists(__CLASS__,$name)){
                return $this->$name;
            }else{
                return NULL;
            }
        }
        
        function getById($link){
            try{
                $query = "SELECT * FROM clientes WHERE dniCliente = ?";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1,$this->dniCliente);
                $stmt->execute();
                if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                    return $result;
                }else{
                    return null;
                }
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
}