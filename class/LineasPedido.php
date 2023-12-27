<?php
    class LineasPedido{
        private $idPedido;
        private $nlinea;
        private $idProducto;
        private $cantidad;

        public function __construct($idPedido,$nlinea,$idProducto, $cantidad){
            $this->idPedido = $idPedido;
            $this->nlinea = $nlinea;
            $this->idProducto = $idProducto;
            $this->cantidad = $cantidad;
        }

        public function __get($name){
            if(property_exists(__CLASS__,$name)){
                return $this->$name;
            }
            return null;
        }

        public function insert($link){
            try{
            $query = "INSERT INTO lineaspedidos(idPedido,nlinea,idProducto,cantidad) VALUES(?,?,?,?)";
            $stmt = $link->prepare( $query );
            $stmt->bindParam(1, $this->idPedido);
            $stmt->bindParam(2, $this->nlinea);
            $stmt->bindParam(3, $this->idProducto);
            $stmt->bindParam(4, $this->cantidad);
            $stmt->execute();
            return true;
            }catch(PDOException $e){
                echo($e->getMessage());
            }
        }
        public static function getLineasById($link, $idPedido){
            try{
                $query = "SELECT * FROM lineaspedidos WHERE idPedido=?";
                $stmt = $link->prepare($query);
                $stmt->bindParam(1,$idPedido);
                $stmt->execute();
                $array = [];
                while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                    array_push($array, $fila);
                }
                return $array;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }