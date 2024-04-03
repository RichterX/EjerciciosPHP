<?php

//HERENCIA EN PHP

class Persona
{
    //ATRIBUTOS
    private $nombre;
    private $apellidos;
    private $altura;
    private $edad;

    //CONSTRUCTOR
    public function __construct($nombre, $apellidos, $altura, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->altura = $altura;
        $this->edad = $edad;
    }

    //MÉTODOS DE CLASE
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }

    public function caminar()
    {
        return "Estoy caminando...";
    }
}

//CLASE INFORMÁTICO (HIJA DE PERSONA)
class Informatico extends Persona
{
    public function __construct($nombre, $apellidos, $altura, $edad, $lenguajes)
    {
        parent::__construct($nombre, $apellidos, $altura, $edad);
        $this->lenguajes = $lenguajes;
    }

    public function getLenguajes()
    {
        return $this->lenguajes;
    }

    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;
    }   

    public function programar()
    {
        return "Estoy programando en " . $this->lenguajes;
    }   

}