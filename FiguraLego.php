<?php

class FiguraLego{

    // ATRIBUTOS DE CLASE
    public $cabeza;
    public $camisa;
    private $pantalon;
    public $piernas;
    protected $color_piel;
    
    // CONSTRUCTOR PARA INICIALIZAR LA CLASE CON LOS ATRIBUTOS
    public function __construct($cabeza, $camisa, $pantalon, $piernas, $color_piel)
    {
        $this -> cabeza = $cabeza;
        $this -> camisa = $camisa;
        $this -> pantalon = $pantalon;
        $this -> piernas = $piernas;
        $this -> color_piel = $color_piel;
    }

    // MÉTODOS DE CLASE
    public function moverse(){
        $movimiento = "la figura se está moviendo";
        echo $movimiento; 
    }

    // Encapsulación 

    public function obtener_pantalon(){
        return $this -> pantalon;
    }

    public function cambiar_pantalon($otro_pantalon){
        $this -> pantalon = $otro_pantalon;
        echo "A la figura de lego se le ha cambiado el pantalon 
                por uno de  {$this -> pantalon} \n";
    }

    public function ver_figura(){
        echo "Cabeza: {$this -> cabeza} \n";
        echo "Camisa: {$this -> camisa} \n";
        echo "Piernas: {$this -> piernas} \n";
        echo "pantalón: {$this -> pantalon} \n";
        echo "Color de piel: {$this -> color_piel} \n";
    }

}


?>