<?php
namespace lib;

require_once "autoload.php";

class Worker
{
    use ConnectToDb;

    private $connect;

    public function __construct()
    {
        
    }

    private function addToDb($name, $listOfTools, $position, $dailySalary, $idBrigadier)
    {
        $changeDate = date("[Y-m-d H:i:s]")."Worker add";
        $sql="INSERT INTO worker (`Name`, `listOfTools`, `position`, `dailySalary`, `idBrigadier`, `changeDate`) 
        VALUES( '$name', '$listOfTools', '$position', '$dailySalary', '$idBrigadier', '$changeDate')";
        $this->connect->exec($sql);
        echo "Worker add";
        
    }

    public function addWorker($name, $listOfTools, $position, $dailySalary, $idBrigadier)
    {
        $this->connect = $this->connectToDb();
        $this->addToDb($name, $listOfTools, $position, $dailySalary, $idBrigadier);   
    }
    public function delWorkerById($id)
    {
        $this->connect = $this->connectToDb();
        $sql="DELETE FROM `worker` WHERE `id`=$id";
        $this->connect->exec($sql);
    }
    public function setDaysWorkedWorker($id, $daysWorked)
    {
        $conn = $this->connectToDb();
        foreach ($conn->query("SELECT `changeDate`, `daysWorked` FROM `worker` WHERE `id`='$id'") as $row) {
               $changeDate = $row["changeDate"];
               $daysWorkedOld = $row["daysWorked"];
        }
        $changeDate =$changeDate.date("[Y-m-d H:i:s]")."-daysWorked chenge $daysWorkedOld vs $daysWorked </br>";
        $sql="UPDATE worker SET changeDate='$changeDate', daysWorked='$daysWorked' WHERE id='$id'";
        $conn->exec($sql);
    }
}
