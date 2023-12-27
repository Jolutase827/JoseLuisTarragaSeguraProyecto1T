<?php
class Producto{
    private $idProducto;
    private $nombre;
    private $foto;
    private $marca;
    private $categoria;
    private $unidades;
    private $precio;
    private $descripcion;

    public function __construct($idProducto,$nombre='',$foto='',$marca='',$categoria='',$unidades='',$precio='',$descripcion=''){
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->foto = $foto;
        $this->marca = $marca;
        $this->categoria = $categoria;
        $this->unidades = $unidades;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
    }

    public static function getAll($link){
        try{
            $query = "SELECT * FROM productos";
            $stmt = $link->prepare($query);
            $stmt->execute();
            $array = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                array_push($array, $row);
            }
            return $array;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function getById($link){
        try{
            $query = "SELECT * FROM productos WHERE idProducto = :idProducto";
            $stmt = $link->prepare($query);
            $stmt->bindParam(':idProducto',$this->idProducto);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }


    public function __get($name){
        if(property_exists(__CLASS__,$name)){
            return $this->$name;
        }
        return null;
    }
}



?>