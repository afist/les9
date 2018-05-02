<?php
namespace lib\Brigadier;
class Brigadier extends Brigade
{
    private listOfEmployees;
    private description;
    public function __construct($salary, $position, $listOfEmployees, $description)
    {
        parent::__construct($salary, $position);
        $this->listOfEmployees = $listOfEmployees;
        $this->description = $description;
    }
}