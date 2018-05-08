<?php
require_once "autoload.php";

if (!empty($_POST['id'])) {
    $brigade = new lib\Brigade();
    $masWorker = $brigade->getBrigadeByIDBrigadier($_POST['id']);
    $text="<tr><th>Имя</th><th>id</th><th>инструменты</th>
    <th>зп</th><th>должность</th><th>Изменение дней</th><th>Кол Дней</th></tr >";
    foreach ($masWorker as $value) {
        $text .= "<tr><td>{$value['Name']}</td><td class=\"id\">{$value['id']}</td><td>{$value['listOfTools']}</td><td>{$value['dailySalary']}</td>
        <td>{$value['position']}</td><td >{$value['changeDate']}</td><td ><form><input id=\"{$value['id']}\" onchange=\"changeDate(value, id)\"  type=\"text\" value=\"{$value['daysWorked']}\"></form></td></tr>";
    }
    echo $text;
}

if (!empty($_POST['setDaysWorker'])) {
    $a = new lib\Worker();
    $a->setDaysWorkedWorker($_POST['id'], $_POST['setDaysWorker']);
}

if (!empty($_POST['Brigadier'])) {
    $brigadir = new lib\Brigadier();
    $formCheck = new lib\FormCheck($_POST);
    $masPost = $formCheck->getCheckInput();
    $brigadir->addBrigadier($masPost["name"], $masPost["description"], $masPost["dailySalary"], $masPost["position"], $masPost["idWorker"], $masPost["daysWorked"]);
}

if (!empty($_POST['Worker'])) {
    $brigadir = new lib\Worker();
    $formCheck = new lib\FormCheck($_POST);
    $masPost = $formCheck->getCheckInput();
    $brigadir->addWorker($masPost["name"], $masPost["listOfTools"], $masPost["position"], $masPost["dailySalary"], $masPost["idBrigadier"], $masPost["daysWorked"]);
}
if ($_POST['start']==="go") {
    $brigade = new lib\Brigade();
    $masBrig = $brigade->getOllBrigadier();
    $text="";
    foreach ($masBrig as $value) {
        $text.="<li data-id=\"{$value['id']}\"><a>{$value['name']}</a><table border=\"3\"><caption class=\"main\">Список рабочих</caption></table></li>";
    }
    echo $text;
}
