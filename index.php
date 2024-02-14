<?php

require "PiezaLego.php";

$figura1 = new PiezaLego("sonriente", "largas", "cortos", "sucia", "amarilla");

$figura1->mostrar_figura();

$figura2 = new PiezaLego("sanfadado", "cortas", "largos", "coder", "amarilla");

$figura2->set_color_piel("morena");
$figura2->mostrar_figura();
