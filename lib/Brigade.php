<?php
class Brigade
{
    // private $listOfEmployees;
    // private $description;
    private $connect;

    // public function __construct()
    // {
    //     $this->listOfEmployees = $listOfEmployees;
    //     $this->description = $description;
    // }

    public function getOllBrigadier()
    {
        $this->connectToDb();
        return $this->sortInformationDb();
    }

    public function getBrigadeByNameBrigadier($name)
    {
        $this->connectToDb();
        $arrayWorker = $this->getListWorker($this->getIdWorker($name));
        return $arrayWorker;
    }

    private function connectToDb()
    {
        $this->connect = new mysqli("localhost", "root", "", "brigade");
        if ($this->connect->connect_error) {
            die("Eroor:".$this->connect->connect_error);
        }
    }
  
    private function sortInformationDb()
    {
        $sort = $this->connect->query("SELECT `name`  FROM `brigadier` WHERE 1");

        foreach ($sort as $key => $value) {
            foreach ($value as $k => $v) {
                $mas[] = $value[$k];
            }
        }
        return $mas;
    }
    
    private function getIdWorker($name)
    {
        $res = $this->connect->query("SELECT `name`, `description`, `dailySalary`, `position`, `idWorker` FROM `brigadier` WHERE 1");
        foreach ($res as $key => $value) {
            foreach ($value as $k => $v) {
                if ($value["name"] === $name) {
                    $id = $value["idWorker"];
                }
            }
        }
        return $id;
    }
    
    private function getListWorker($id)
    {
        $res = $this->connect->query("SELECT `Name`, `id`, `listOfTools`, `position`, `dailySalary`, `idBrigadier` FROM `worker` WHERE 1");
        foreach ($res as $key => $value) {
            if ($value["idBrigadier"] === $id) {
                unset($value["idBrigadier"]);
                $arrayWorker[] = $value;
            }
        }
        return $arrayWorker;
    }
}

$a = new Brigade();
var_dump($a->getOllBrigadier());
echo "<br>";
$masWorker = $a->getBrigadeByNameBrigadier("Oleg");
foreach ($masWorker as $key => $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
