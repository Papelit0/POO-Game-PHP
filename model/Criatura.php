<?php

class Criatura
{
    private string $nombre;
    private int $hp;
    private int $def;
    private int $atk;
    private int $defspc;
    private int $atkspc;
    private int $speed;
    private string $tipo;

    public function __construct(string $nombre, int $hp, int $def, int $atk, int $defspc, int $atkspc, int $speed, string $tipo)
    {
        $this->nombre = $nombre;
        $this->hp = $hp;
        $this->def = $def;
        $this->atk = $atk;
        $this->defspc = $defspc;
        $this->atkspc = $atkspc;
        $this->speed = $speed;
        $this->tipo = $tipo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function getDefspc()
    {
        return $this->defspc;
    }

    public function getAtkspc()
    {
        return $this->atkspc;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setHp(int $hp)
    {
        $this->hp = $hp;
    }

    public function setDef(int $def)
    {
        $this->def = $def;
    }

    public function setAtk(int $atk)
    {
        $this->atk = $atk;
    }

    public function setDefspc(int $defspc)
    {
        $this->defspc = $defspc;
    }

    public function setAtkspc(int $atkspc)
    {
        $this->atkspc = $atkspc;
    }

    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;
    }

    // Metodos base
    public function mostrarInfo()
    {
        return "Nombre: {$this->nombre} | Vida: {$this->hp} | Def: {$this->def} | Atk: {$this->atk} | DefSpc: {$this->defspc} | AtkSpc: {$this->atkspc} | Vel: {$this->speed} | Tipo: {$this->tipo}";
    }

    public function atacar()
    {
        return "Ataque: Basico | Daño: {$this->atk} | Efecto: No";
    }
}
