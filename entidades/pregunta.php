<?php
class Pregunta {
    private $id;
    private $enunciado;
    private $url;
    private $respuesta1;
    private $respuesta2;
    private $respuesta3;
    private $correcta;
    private $categoriaId;
    private $dificultadId;

    public function __construct($enunciado, $url, $respuesta1, $respuesta2, $respuesta3, $correcta, $categoriaId, $dificultadId) {
       
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEnunciado() {
        return $this->enunciado;
    }

    public function setEnunciado($enunciado) {
        $this->enunciado = $enunciado;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getRespuesta1() {
        return $this->respuesta1;
    }

    public function setRespuesta1($respuesta1) {
        $this->respuesta1 = $respuesta1;
    }

    public function getRespuesta2() {
        return $this->respuesta2;
    }

    public function setRespuesta2($respuesta2) {
        $this->respuesta2 = $respuesta2;
    }

    public function getRespuesta3() {
        return $this->respuesta3;
    }

    public function setRespuesta3($respuesta3) {
        $this->respuesta3 = $respuesta3;
    }

    public function getCorrecta() {
        return $this->correcta;
    }

    public function setCorrecta($correcta) {
        $this->correcta = $correcta;
    }

    public function getCategoriaId() {
        return $this->categoriaId;
    }

    public function setCategoriaId($categoriaId) {
        $this->categoriaId = $categoriaId;
    }

    public function getDificultadId() {
        return $this->dificultadId;
    }

    public function setDificultadId($dificultadId) {
        $this->dificultadId = $dificultadId;
    }
}
?>