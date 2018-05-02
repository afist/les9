<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "BrigadeTable";
$conn = new mysqli($serverName, $userName, $password, $dbname);
if ($conn->connect_error) {
	die("eroor:".$conn->connect_error);
}
$sql = "CREATE TABLE BrigadeTable(
	brigade VARCHAR (40) NOT NULL,
	brigadier VARCHAR (40) NOT NULL PRIMARY KEY,
	worker VARCHAR (40) NOT NULL )";
if ($conn->query($sql)===TRUE) {
	echo "Nice";
} else {
	echo "Eroror";
}

// $conn=close();