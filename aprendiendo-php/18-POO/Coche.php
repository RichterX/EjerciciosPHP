<?php

class Coche{
    //Atributos o propiedades de la clase
    private $color;
    private $marca;
    private $modelo;

    //Constructor de la clase
    public function __construct($color, $marca, $modelo)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    //Metodos de la clase
    public function mostrarInformacion()
    {
        echo "<br><b>Color: " . $this->color . "<br>Marca: " . $this->marca . "<br>Modelo: " . $this->modelo . "</b>";
    }

    public function setColor($color)
    {
        $this->color= $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function acelerar()
    {
        echo "Acelerando";
    }

    public function frenar()
    {
        echo "Frenando";
    }
}

?>