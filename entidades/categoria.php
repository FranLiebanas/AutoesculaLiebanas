<?php
class Categoria {
    private $idCategoria;
    private $nombreCategoria;

    public function __construct($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function getnombreCategoria() {
        return $this->nombreCategoria;
    }

    public function setnombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }
}
?>