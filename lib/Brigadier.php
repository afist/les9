<?php
namespace lib;

// require_once "../autoload.php";

class Brigadier
{
    use ConnectToDb;

    private $connect;
    public function __construct($name, $description, $dailySalary, $position, $idWorker)
    {
        $this->connect = $this->connectToDb();
        $this->addToDb($name, $description, $dailySalary, $position, $idWorker);
    }
    
    private function addToDb($name, $description, $dailySalary, $position, $idWorker)
    {
        $sql="INSERT INTO brigadier (name, description, dailySalary, position, idWorker) 
        VALUES( '$name', '$description', '$dailySalary', '$position', '$idWorker')";

        if ($this->connect->query($sql)===true) {
            echo "Brigadier add";
        };
    }
    public static function hi()
    {
        echo "<br>hi";
    }
}

// $a = new Brigadier('Valerian', 'work house', 333, 'brigadier', 'id5');
