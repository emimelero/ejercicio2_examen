<?php
    require_once "Models/EmpleadosModel.php";

    class EmpleadosController{
        private $empleadosModel;

        public function __construct() {
            $this->empleadosModel = new Empleados();
        }

        public function index() {
            $videojuegos = $this->empleadosModel->getAll();
            require "Views/listar.php";
        }
        
    }