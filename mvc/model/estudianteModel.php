<?php
class estudianteModel{
    private $xmlFile = 'model/estudiantes.xml';
    // Metodo para obtener a los estudiantes
     public function getestudiantes(){
        if(file_exists($this->xmlFile)){
            $estudiantes = simplexml_load_file($this->xmlFile);
            return $estudiantes;
        } else {
            exit('Error al abrir el archivo XML.');
        }
     }
     public function getestudianteById($id){
        $estudiantes = $this->getestudiantes();
        foreach($estudiantes->estudiante as $estudiante){
            if((int)$estudiante->id == $id){
                return $estudiante;
            }
        }
        return null;
     }
}
?>