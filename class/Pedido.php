<?php

    class Pedido{
        private $idPedido;
        private $fecha;
        private $dirEntrega;
        private $nTarjeta;
        private $dniCliente;

        public function __construct($idPedido,$fecha='',$dirEntrega='',$nTarjeta='',$dniCliente=''){
            $this->idPedido= $idPedido;
            $this->fecha= $fecha;
            $this->dirEntrega=$dirEntrega;
            $this->nTarjeta=$nTarjeta;
            $this->dniCliente=$dniCliente;
        }
        public function __get($name){
            if (property_exists(__CLASS__,$name)){
                return $this->$name;
            }
                return null;
        }
        public function __set($name,$value){
            if (property_exists(__CLASS__,$name)){
                $this->$name=$value;
            }
                return null;
        }


        public static function getLastIdPedido($link){
            try{
                $query = "SELECT max(idPedido) as idPedido FROM pedidos";
                $stmt = $link->prepare($query);
                $stmt->execute();
                if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    return $row["idPedido"];
                }else{
                    return 0;
                }
            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }
        public function insert($link){
            try{
                $query = "INSERT INTO pedidos(idPedido,fecha,dirEntrega,nTarjeta,dniCliente) VALUES(?,?,?,?,?)";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1, $this->idPedido);
                $stmt->bindParam(2, $this->fecha);
                $stmt->bindParam(3, $this->dirEntrega);
                $stmt->bindParam(4, $this->nTarjeta);
                $stmt->bindParam(5, $this->dniCliente);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }
        public function completar($link){
            try{
                $query = "SELECT * FROM pedidos WHERE idPedido=:idPedido";
                $stmt = $link->prepare($query);
                $stmt->bindParam(":idPedido", $this->idPedido);
                $stmt->execute();
                if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $this->fecha = $row["fecha"];
                    $this->dirEntrega = $row["dirEntrega"];
                    $this->nTarjeta = $row["nTarjeta"];
                    $this->dniCliente = $row["dniCliente"];
                }else{
                    return 0;
                }
            }catch(PDOException $e){
                echo $e->getMessage();
                return null;
            }
        }

    }