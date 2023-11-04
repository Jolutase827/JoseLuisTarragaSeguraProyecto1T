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
        public function __set($name, $value){
            if(property_exists(__CLASS__,$name)){
               if($name=='email'){
                    $this->$name = $value;
               }
            }
            
        }

        public function existDni($link){
            $cliente = $this->getById($link);
            if($cliente!=null){
                return true;
            }else{
                return false;
            }
        }
        public function existEmail($link){
            $cliente = $this->getByEmail($link);
            if($cliente!=null){
                return true;
            }else{
                return false;
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
        
        function getByEmail($link){
            try{
                $query = "SELECT * FROM clientes WHERE email = ?";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1,$this->email);
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
        

        static function getAll($link){
            try{
                $query = "SELECT * FROM clientes";
                $stmt = $link->prepare($query);
                $stmt->execute();
                $array = [];
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    array_push($array,$row);
                }
                return $array;
            }catch(PDOException $e){
                echo $e->getMessage();
                return $e->getMessage();
            }
        }

        public function insert( $link){
            try{
                $query = "INSERT INTO clientes(dniCliente,nombre,direccion,email,pwd,administrador) VALUES(?,?,?,?,?,?)";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1,$this->dniCliente);
                $stmt->bindParam(2,$this->nombre);
                $stmt->bindParam(3,$this->direccion);
                $stmt->bindParam(4,$this->email);
                $stmt->bindParam(5,$this->pwd);
                $stmt->bindParam(6,$this->administrador);
                $stmt->execute();
                return $this->dniCliente;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

    }