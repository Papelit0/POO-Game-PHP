<?php

require_once __DIR__ . "/Criatura.php";

class Tierra extends Criatura
{
    private int $flintch;

    public function __construct(string $nombre, int $hp, int $def, int $atk, int $defspc, int $atkspc, int $speed, int $flintch = 25)
    {
        parent::__construct($nombre, $hp, $def, $atk, $defspc, $atkspc, $speed, "Tierra");
        $this->flintch = $flintch;
    }

    // Metodos tierra
    public function getFlintch()
    {
        return $this->flintch;
    }

    public function setFlintch(int $flintch)
    {
        $this->flintch = $flintch;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . " | Flinch: {$this->flintch}%";
    }

    public function atacar()
    {
        $efecto = (rand(1, 100) <= $this->flintch) ? "Si **Flinch**" : "No";
        return "Ataque realizado: Terremoto | Daño: {$this->getAtk()} | Efecto: {$efecto}";
    }
}
