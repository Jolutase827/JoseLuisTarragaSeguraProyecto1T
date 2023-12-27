<?php
 class Carrito{
    private $idUnico;
    private $nlinea;
    private $dniCliente;
    private $idProducto;

    private $cantidad;
    private $coste;

    public function __construct($idUnico='',$nlinea='',$dniCliente='', $idProducto='',$cantidad='',$coste=''){
        $this->idUnico = $idUnico;
        $this->nlinea = $nlinea;
        $this->dniCliente = $dniCliente;
        $this->idProducto = $idProducto;
        $this->cantidad = $cantidad;
        $this->coste = $coste;
    }

    public function __get($name){
        if(property_exists(__CLASS__,$name)){
            return $this->$name;
        }else{
            return null;
        }
    }

    public function insert($link){
        try{
            $query = "INSERT INTO carrito(idUnico,dniCliente,idProducto,cantidad,coste) VALUES(?,?,?,?,?)";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1, $this->idUnico);
            $stmt->bindParam(2, $this->dniCliente);
            $stmt->bindParam(3, $this->idProducto);
            $stmt->bindParam(4, $this->cantidad);
            $stmt->bindParam(5, $this->coste);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    public function updateLine($link){
        try{
            $query = "UPDATE carrito SET cantidad=?, coste=? WHERE nlinea=?";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1, $this->cantidad);
            $stmt->bindParam(2, $this->coste);
            $stmt->bindParam(3, $this->nlinea);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    public function updateDniAndIdUnico($link,$idNuevo){
        try{
            $query = "UPDATE carrito SET idUnico=?, dniCliente=? WHERE idUnico=?";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1, $idNuevo);
            $stmt->bindParam(2, $this->dniCliente);
            $stmt->bindParam(3, $this->idUnico);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public static function getByProductoIdUnico($link,$idUnico,$idProducto){
        try{
            $query = "SELECT nlinea,cantidad,coste FROM carrito WHERE idUnico=? and idProducto = ?";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1, $idUnico);
            $stmt->bindParam(2, $idProducto);
            $stmt->execute();
            if($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                return $fila;
            }else{
                return false;
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    public static function getByIdUnico($link, $idUnico){
        try{
            $query = "SELECT * FROM carrito WHERE idUnico=?";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1,$idUnico);
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
    public static function getByDni($link, $dni){
        try{
            $query = "SELECT * FROM carrito WHERE dniCliente=?";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1,$dni);
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
    public function delete($link){
        try{
            $query = "DELETE FROM carrito WHERE nlinea=?";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1, $this->nlinea);
            $stmt->execute();
            return $stmt->execute();;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
 }