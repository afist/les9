<?php
require_once "autoload.php";

// $a = new lib\Brigadier();
// $a->addBrigadier('Valerian', 'work house', 333, 'brigadier', 'id5', '30');
// $a->delBrigadierById(2);
// $a->setDaysWorkedBrigadier(25, 28);


// $b = new lib\Worker();
// $b->addWorker('Valera1', 'Pliers, Scraper', "worker", 43, 'id5');

// $c = new lib\Brigade();
// $masWorker = $c->getBrigadeByIDBrigadier("3");
// foreach ($masWorker as $value) {
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }


// $brigade = new lib\Brigade();
//     $masBrig = $brigade->getOllBrigadier();
//     $text="";
// foreach ($masBrig as $value) {
//     $text.="<li data-id=\"{$value['id']}\"><a class=\"a\">{$value['name']}</a><table border=\"3\"><caption class=\"main\">Список рабочих</caption></table></li>";
// }
//     echo $text;
$localhost ="localhost";
$brigade = "brigade";
try {
    $connect = new PDO( "mysql:host=$localhost;dbname=$brigade", 'root', '');
    $sql = "CREATE TABLE `testDB`.`brigadier` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `dailySalary` INT(30) NOT NULL , `position` VARCHAR(255) NOT NULL , `idWorker` VARCHAR(255) NOT NULL , `changeDate` TEXT NOT NULL , `daysWorked` INT(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $connect->exec($sql);
    // $sql="INSERT INTO worker (`Name`, `listOfTools`, `position`, `dailySalary`, `idBrigadier`, `changeDate`, `daysWorked`) 
    //     VALUES( 'Valerian', 'work house', 333, 'brigadier', 'id5', '30')";
    //     $connect->exec($sql);
} catch (PDOException $e) {
    echo $sql.$e->getMessage();
}
