<?php
namespace lib;

require_once "autoload.php";

class Worker
{
    use ConnectToDb;

    private $connect;

    public function __construct($name, $listOfTools, $position, $dailySalary, $idBrigadier)
    {
        $this->connect = $this->connectToDb();
        $this->addToDb($name, $listOfTools, $position, $dailySalary, $idBrigadier);
    }

    private function addToDb($name, $listOfTools, $position, $dailySalary, $idBrigadier)
    {
        $sql="INSERT INTO worker (`Name`, `listOfTools`, `position`, `dailySalary`, `idBrigadier`) 
        VALUES( '$name', '$listOfTools', '$position', '$dailySalary', '$idBrigadier')";
        if ($this->connect->query($sql)) {
            echo "Worker add";
        };
    }
}
