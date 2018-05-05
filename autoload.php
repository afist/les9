<?php
    spl_autoload_register(function ($class) {
        require_once sprintf('%s.php', implode('/', explode('\\', $class)));
    });


// require_once "autoload.php";

// $a = new lib\Brigadier('Valerian', 'work house', 333, 'brigadier', 'id5');
// $a = new lib\Worker('Valera', 'Pliers, Scraper', "worker", 43, 'id4');
