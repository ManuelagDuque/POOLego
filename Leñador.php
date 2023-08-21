<?php
require "FiguraLego.php";
require "AgarreInterface.php";


class Leñador extends FiguraLego implements AgarreInterface{
    // Encapsulación
    public function  cambiarAtributo(){
        $this -> cabeza = "cabeza cuadrada"; // Porque está PUB
        // $this -> pantalon; -> No es posible 
        $this -> cambiar_pantalon("Brillantina"); // Porque está PRIV
    }

    public function agarrar()
    {
        //
    }

}

$leñador = new Leñador("Sonriente", "Cuadros", "Vaquero", "pata de palo","Amarillo");
echo "Antes de cambiar atributos \n";
$leñador -> ver_figura();


echo "Despues de cambiar atributos \n";
$leñador -> cambiarAtributo();
$leñador -> ver_figura();

