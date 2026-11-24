<?php

require_once __DIR__ . "/Criatura.php";

class Agua extends Criatura
{
    private int $relantizar;

    public function __construct(string $nombre, int $hp, int $def, int $atk, int $defspc, int $atkspc, int $speed, int $relantizar = 40)
    {
        parent::__construct($nombre, $hp, $def, $atk, $defspc, $atkspc, $speed, "Agua");
        $this->relantizar = $relantizar;
    }

    // Metodos agua
    public function getRelantizar()
    {
        return $this->relantizar;
    }

    public function setRelantizar(int $relantizar)
    {
        $this->relantizar = $relantizar;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . " | Ralentizar: {$this->relantizar}%";
    }

    public function atacar()
    {
        $efecto = (rand(1, 100) <= $this->relantizar) ? "Si **Ralentizar**" : "No";
        return "Ataque realizado: Rayo Burbuja | Daño: {$this->getAtk()} | Efecto: {$efecto}";
    }
}
