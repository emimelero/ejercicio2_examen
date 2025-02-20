<?php
    require_once "Models/EmpleadosModel.php";

    class EmpleadosController{
        private $empleadosModel;

        public function __construct() {
            $this->empleadosModel = new Empleados();
        }

        public function index() {
            $empleados = $this->empleadosModel->getAll();
            require "Views/listar.php";
        }

        public function edit($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];
                $sexo = $_POST['sexo'];
                $telefono = $_POST['telefono'];
                $cargo = $_POST['cargo'];
                $avatar = $_POST['avatar'];
                $this->empleadosModel->update($id, $nombre, $edad, $sexo, $telefono, $cargo, $avatar);
                    header("Location: index.php");
                } else {
                    $empleados = $this->empleadosModel->getById($id);
                require "Views/edit.php";
                }
        }
        

        public function delete($id) {
            $this->empleadosModel->delete($id);
            header("Location: index.php");
        }
    }