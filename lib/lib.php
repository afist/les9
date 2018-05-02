<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "brigade";
$conn = new mysqli($serverName, $userName, $password, $dbname);


if ($conn->connect_error) {
    die("eroor:".$conn->connect_error);
}
$res = $conn->query("SELECT `name`, `description`, `dailySalary`, `position`, `idWorker` FROM `brigadier` WHERE 1");

while ($row = $res->fetch_assoc()) {
    $json[]= $row;
}
echo "<pre>";
print_r($json);
echo "</pre>";

var_dump(array_filter($json, function ($obj) {
    return $obj['name'] =="Paul" ;
}));
