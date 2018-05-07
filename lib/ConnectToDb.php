<?php
namespace lib;

trait ConnectToDb
{
    protected function connectToDb()
    {
        $localhost ="localhost";
        $brigade = "brigade";

        try {
            $connect = new \PDO( "mysql:host=$localhost;dbname=$brigade", 'root', '');
        } catch (PDOException $e) {
            echo $sql.$e->getMessage();
        }
        return $connect;
    }
}
