<?php
namespace lib\Worker;
class Worker extends Brigade
{
private listTools;
    public function __construct($salary, $position, $listTools)
    {
        parent::__construct($salary, $position);
        $this->listTools = $listTools;
    }
}