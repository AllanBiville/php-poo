<?php
spl_autoload_register('chargerClasse');
function chargerClasse(string $classe)
{
    include $classe . '.php';
    // include_once $classe . '.php';
    // require $classe . '.php';
}


include "conf.php";