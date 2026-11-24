<?php

require_once __DIR__ . "/../model/Criatura.php";
require_once __DIR__ . "/../model/Agua.php";
require_once __DIR__ . "/../model/Fuego.php";
require_once __DIR__ . "/../model/Tierra.php";
require_once __DIR__ . "/../view/VistaCriatura.php";

class criaturaController
{
    private $vista;

    public function __construct(VistaCriatura $vista)
    {
        $this->vista = $vista;
    }

    public function demostrar()
    {
        $this->vista->mostrarTitulo("What is the Pokémon?");

        $criaturas = array(
            new Agua("Corphish", 43, 65, 80, 35, 50, 35, 40),
            new Fuego("Charmander", 60, 40, 80, 30, 100, 80, 30),
            new Tierra("Sandslash", 100, 80, 30, 80, 50, 20, 25),
        );

        foreach ($criaturas as $criatura) {
            $this->vista->mostrarCriatura($criatura);
            $this->vista->mostrarAtaque($criatura->atacar());
            $this->vista->mostrarSeparador();
        }
    }
}
