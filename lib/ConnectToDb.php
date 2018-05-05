<?php
namespace lib;

trait ConnectToDb
{
    protected function connectToDb()
    {
        $connect = new \mysqli("localhost", "root", "", "brigade");
        if ($this->connect->connect_error) {
            die("Eroor:".$this->connect->connect_error);
        }
        return $connect;
    }
}
