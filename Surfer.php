<?php
require "FiguraLego.php";

class Surfer extends FiguraLego{
    // Encapsulación
    public function  cambiarAtributo(){
        $this -> cabeza = "cabeza cuadrada"; // Porque está PUB
        // $this -> pantalon; -> No es posible 
        $this -> cambiar_pantalon("Brillantina"); // Porque está PRIV
    }

}