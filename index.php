<?php
require_once "Controller/EmpleadosController.php";
    $index = new EmpleadosController;
    $action = $_GET["action"] ?? null;
    $id = $_GET["id"] ?? null;
    
    if($action == "edit"){
        $index->edit($id);
    } elseif ($action == "delete") {
        $index->delete($id);
    }else{
        $index->index();
    }
?>