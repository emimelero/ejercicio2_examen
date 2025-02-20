<?php
require_once "Config/Conexion.php";
class Empleados{
    private $pdo;
    public function __construct() {
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }
    public function getAll(){
        try{
            $query = "SELECT * FROM tbl_empleados";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
        return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getById($id){
        try{
            $query = "SELECT * FROM tbl_empleados WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
        return $registro->fetch();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function delete($id){
        try{
            $insercion = $this->pdo->prepare("delete from tbl_empleados where
            id=:id");
            $insercion->bindParam(':id', $d);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function edit($i, $n, $e, $s, $t, $c, $a){

        try{
            $insercion = $this->pdo->prepare("update tbl_empleados set nombre=:
            nombre, edad=:edad, sexo=:sexo telefono=:telefono cargo=:cargo avatar=:avatar where id=:id");
            $insercion->bindParam(':id', $i);
            $insercion->bindParam(':nombre', $n);
            $insercion->bindParam(':edad', $e);
            $insercion->bindParam(':sexo', $s);
            $insercion->bindParam(':telefono', $t);
            $insercion->bindParam(':cargo', $c);
            $insercion->bindParam(':avatar', $a);
            $insercion->execute();
            return true;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function update($id, $nombre, $edad, $sexo, $telefono, $cargo, $avatar) {
        $query = "UPDATE tbl_empleados SET 
            nombre=:nombre, edad=:edad, sexo=:sexo telefono=:telefono cargo=:cargo avatar=:avatar WHERE id = :id";
        $insercion = $this->pdo->prepare($query);
        $insercion->bindParam(':id', $id);
        $insercion->bindParam(':nombre', $nombre);
        $insercion->bindParam(':edad', $edad);
        $insercion->bindParam(':sexo', $sexo);
        $insercion->bindParam(':telefono', $telefono);
        $insercion->bindParam(':cargo', $cargo);
        $insercion->bindParam(':avatar', $avatar);
        return $insercion->execute();
    }
}



    


    
