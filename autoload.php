<?php

spl_autoload_register(function ($class) {
    var_dump($class);
    $map =[
    "$class" => __DIR__."\\".$class.".php",
    // "$class" => __DIR__."\mysqli.php"
    ];
    echo $map[$class];
    require_once "$map[$class]";
    

    // require_once "lib/Brigadier.php";
});
