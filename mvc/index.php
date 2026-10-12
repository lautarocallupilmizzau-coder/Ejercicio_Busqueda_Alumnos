<?php
require_once 'controller/estudianteController.php';
//Creamos una instancia controlador
$controller = new estudianteController();
//Comprobacion si hay un parametro get id 
if(isset($_GET['id'])){
    $controller->showestudiante((int)$_GET['id']);

}else {
    $controller->listestudiantes();
}
?>