<?php
namespace lib;

require_once "autoload.php";

class Brigadier
{
    use ConnectToDb;
    private $connect;
    public function __construct()
    {
        
    }

    private function addToDb($name, $description, $dailySalary, $position, $idWorker)
    {
        $changeDate = date("[Y-m-d H:i:s]")."-Brigadier add";
        $sql="INSERT INTO brigadier (name, description, dailySalary, position, idWorker, changeDate) 
        VALUES( '$name', '$description', '$dailySalary', '$position', '$idWorker', '$changeDate')";
        $this->connect->exec($sql);
        echo "Brigadier add";
       
    }
    private function delInDb()
    {
        
    }
    public function addBrigadier($name, $description, $dailySalary, $position, $idWorker)
    {
        $this->connect = $this->connectToDb();
        $this->addToDb($name, $description, $dailySalary, $position, $idWorker);
    }

    public function delBrigadierById($id)
    {
        $this->connect = $this->connectToDb();
        $sql="DELETE FROM `brigadier` WHERE `id`=$id";
        $this->connect->exec($sql);
    }
    public function setDaysWorkedBrigadier($id, $daysWorked)
    {
        $conn = $this->connectToDb();
        foreach($conn->query("SELECT `changeDate`, `daysWorked` FROM `brigadier` WHERE `id`='$id'") as $row) {
        $changeDate = $row["changeDate"];
        $daysWorkedOld = $row["daysWorked"];
    }
        $changeDate =$changeDate.";".date("[Y-m-d H:i:s]")."-daysWorked chenge $daysWorkedOld vs $daysWorked";
        $sql="UPDATE brigadier SET changeDate='$changeDate', daysWorked='$daysWorked' WHERE id='$id'";
        $conn->exec($sql);
    }

    public static function hi()
    {
        echo "<br>hi";
    }
}

// $a = new Brigadier('Valerian', 'work house', 333, 'brigadier', 'id5');
