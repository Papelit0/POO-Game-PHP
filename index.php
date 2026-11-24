<?php

require_once __DIR__ . "/controller/criaturaController.php";
require_once __DIR__ . "/view/VistaCriatura.php";

$vista = new VistaCriatura();
$controller = new criaturaController($vista);

echo "<pre>";
$controller->demostrar();
echo "</pre>";
