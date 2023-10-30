<?php
class intento {
    private $id;
    private $nombre;
    private $pass;
    private $role;

    public function __construct($id,$nombre, $pass, $role) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->role = $role;
    }

   

    public function getIdUser() {
       return $this->id;
    }

    public function setIdUser() {
        $this->id=$id;
    }

    public function getNombre() {
        return $this->nombre;
     }
 
     public function setNombre() {
         $this->nombre=$nombre;
     }
     public function getPass() {
        return $this->pass;
     }
 
     public function setPass() {
         $this->pass=$pass;
     }
     public function getRole() {
        return $this->role;
     }
 
     public function setRole() {
         $this->role=$role;
     }

     Public function obtenUsuario(){
        return "Hola, soy ($this->nombre) (ID: ($this->id)).";
     }

}
?>