<?php

class VistaCriatura
{
    public function mostrarCriatura(Criatura $criatura)
    {
        echo $criatura->mostrarInfo() . PHP_EOL;
    }

    public function mostrarAtaque(string $ataque)
    {
        echo $ataque . PHP_EOL;
    }

    public function mostrarSeparador()
    {
        echo str_repeat('-', 70) . PHP_EOL;
    }

    public function mostrarTitulo(string $titulo)
    {
        echo PHP_EOL . "=== {$titulo} ===" . PHP_EOL;
    }
}
