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

    public static function deleteByidUnico($link,$idUnico){
        try{
            $query = "DELETE FROM carrito WHERE idUnico=?";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1, $idUnico);
            $stmt->execute();
            return $stmt->execute();;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
 }