<?php

require_once __DIR__ . "/Criatura.php";

class Fuego extends Criatura
{
    private int $quemadura;

    public function __construct(string $nombre, int $hp, int $def, int $atk, int $defspc, int $atkspc, int $speed, int $quemadura = 30)
    {
        parent::__construct($nombre, $hp, $def, $atk, $defspc, $atkspc, $speed, "Fuego");
        $this->quemadura = $quemadura;
    }

    // Metodos fuego
    public function getQuemadura()
    {
        return $this->quemadura;
    }

    public function setQuemadura(int $quemadura)
    {
        $this->quemadura = $quemadura;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . " | Quemadura: {$this->quemadura}%";
    }

    public function atacar()
    {
        $efecto = (rand(1, 100) <= $this->quemadura) ? "Si **Quemadura**" : "No";
        return "Ataque realizado: Lanzallamas | Daño: {$this->getAtk()} | Efecto: {$efecto}";
    }
}
