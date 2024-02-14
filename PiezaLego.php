<?php
class PiezaLego
{
    public $cabeza;
    public $piernas;
    public $brazos;
    private $ropa;
    protected $color_piel;

    //Constructor > arranca la clase con unos atributos determinados
    //Se va a igualar lo que se recibe con lo de arriba
    public function __construct($head, $legs, $arms, $clothes, $color_skin)
    {
        $this->cabeza = $head;
        $this->piernas = $legs;
        $this->brazos = $arms;
        $this->ropa = $clothes;
        $this->color_piel = $color_skin;
    }
    public function get_ropa()
    {
        return $this->ropa;
    }

    public function set_ropa($nueva_ropa)
    {
        $this->ropa = $nueva_ropa;
        // echo "El color de la ropa de tu figura ha sido modificada a {$this->ropa}";
    }

    public function get_color_piel()
    {
        return $this->color_piel;
    }

    public function set_color_piel($nuevo_color_piel)
    {
        $this->color_piel = $nuevo_color_piel;
        // echo "El color de la piel de tu figura ha sido modificada a {$this->color_piel}";
    }

    public function mostrar_figura()
    {
        echo "La figura Lego enviada te llegará con \n
        cabeza: {$this->cabeza} \n
        piernas: {$this->piernas} \n
        brazos: {$this->brazos} \n
        ropa: {$this->ropa} \n
        color de piel: {$this->color_piel} \n
        ";
    }
}
