<?php
function chargerClasse(string $classe)
{
    include $classe . '.php';
    // include_once $classe . '.php';
    // require $classe . '.php';
}
spl_autoload_register('chargerClasse');

include "conf.php";