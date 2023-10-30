<?php
class examen {
    private $idExamen;
    private $fechaCreacion;
    

    public function __construct($idExamen,$fechaCreacion) {
        $this->idExamen = $idExamen;
        $this->fechaCreacion = $fechaCreacion;
       
    }

   

    public function getIdExamen() {
       return $this->idExamen;
    }

    public function setidExamen() {
        $this->idExamen=$idExamen;
    }

    public function getfechaCreacion() {
        return $this->fechaCreacion;
     }
 
     public function setfechaCreacion() {
         $this->fechaCreacion=$fechaCreacion;
     }
     

     Public function obtenExamen(){
        return "EL examen ($this->idExamen) (Fecha: ($this->fechaCreacion)).";
     }

}
?>