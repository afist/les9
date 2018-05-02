<?php
// namespace lib\Brigadier;
class Brigadier
//extends Brigade
{
    private $listOfEmployees;
    private $description;
    private $connect;
    private $name;
    public function __construct()
    {
        $this->listOfEmployees = $listOfEmployees;
        $this->description = $description;
    }
    public function getOllBrigadier()
    {
        $this->connectToDb();
        return $this->sortInformationDb();
    }

    private function connectToDbBrigade()
    {
        $this->connect = new mysqli("localhost", "root", "", "brigade");
        if ($this->connect->connect_error) {
            die("Eroor:".$this->connect->connect_error);
        }
    }
    private function sortInformationDb()
    {
        $sort = $this->connect->query("SELECT `name` FROM `brigadier` WHERE 1");

        foreach ($sort as $key => $value) {
            foreach ($value as $k => $v) {
                $mas[] = $value[$k];
            }
        }
        return $mas;
    }
    // public function getBrigadeByNameBrigadier($name)
    // {
    //     $this->connectToDb();
    //     $this->name = $name;
    //     $res = $this->connect->query("SELECT `name`, `description`, `dailySalary`, `position`, `idWorker` FROM `brigadier` WHERE 1");
    //     while ($row = $res->fetch_assoc()) {
    //         $json[]= $row;
    //     }
    //     $result = array_filter($json, function ($obj) {
    //         return $obj['name'] == $this->name;
    //     });
    //     var_dump($result[2]["idWorker"]);
    // }
    public function getBrigadeByNameBrigadier($name)
    {
        $this->connectToDbBrigade();
        $id = $this->getIdWorker($name);
        var_dump($id);
    }
    private function getIdWorker($name)
    {
        $res = $this->connect->query("SELECT `name`, `description`, `dailySalary`, `position`, `idWorker` FROM `brigadier` WHERE 1");
        foreach ($res as $key => $value) {
            foreach ($value as $k => $v) {
                if ($value["name"] = $name) {
                    $id = $value["idWorker"];
                }
            }
        }
        return $id;
    }
}

$a = new Brigadier();
var_dump($a->getOllBrigadier());
echo "<br>";
$a->getBrigadeByNameBrigadier("Paul");
