<?php

include_once "PiezaLego.php";

//Esta clase héroe heredará todo lo de Lego (uso extends), menos el atributo protected porque le hijo no puede acceder a él de forma directa, aunque sí lo puede utilizar

class Heroe extends PiezaLego
{
    public function set_atributos()
    {
        $this->set_ropa("mallas");
        $this->cabeza = "antifaz";
    }
}
