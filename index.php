<?php
require_once "autoload.php";

// $a = new lib\Brigadier();
// $a->addBrigadier('Valerian', 'work house', 333, 'brigadier', 'id5');
// $a->delBrigadierById(2);
// $a->setDaysWorkedBrigadier(9, 22);


// $b = new lib\Worker();
// $b->addWorker('Valera1', 'Pliers, Scraper', "worker", 43, 'id5');

$c = new lib\Brigade();
$masWorker = $c->getBrigadeByIDBrigadier("8");


foreach ($masWorker as $key => $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
