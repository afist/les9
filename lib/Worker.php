<?php
// namespace lib\Worker;
class Worker
{
    private $connect;

    public function __construct($name, $listOfTools, $position, $dailySalary, $idBrigadier)
    {
        $this->connectToDb();
        $this->addToDb($name, $listOfTools, $position, $dailySalary, $idBrigadier);
    }
    private function connectToDb()
    {
        $this->connect = new mysqli("localhost", "root", "", "brigade");
        if ($this->connect->connect_error) {
            die("Eroor:".$this->connect->connect_error);
        }
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

$a = new Worker('Valera', 'Pliers, Scraper', "worker", 43, 'id4');
