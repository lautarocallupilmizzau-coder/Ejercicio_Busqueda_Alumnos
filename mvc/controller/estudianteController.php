<?php
require_once 'model/estudianteModel.php';
class estudianteController {
    private $model;
    public function __construct(){
        $this->model = new estudianteModel();
    }
    // Ahora vamos a crear el método para mostrar la lista de todos los estudiantes.
    public function listestudiantes() {
        $estudiantes = $this->model->getestudiantes();
        include 'view/estudiantesView.php';
    }
    //Metodo para mostrar detalles de un estudiante
    public function showestudiante($id){
        $estudiante = $this->model-> getestudianteById($id);
        include 'view/estudiantesView.php';
    }
}
?>