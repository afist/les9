<?php
require_once "autoload.php";

if (!empty($_POST['id'])) {
    $c = new lib\Brigade();
    $masWorker = $c->getBrigadeByIDBrigadier($_POST['id']);
    $a="<tr><th>Имя</th><th>id</th><th>инструменты</th>
    <th>зп</th><th>должность</th><th>Изменение дней</th><th>Кол Дней</th></tr >";
    foreach ($masWorker as $value) {
        $a .= "<tr><td>{$value['Name']}</td><td class=\"id\">{$value['id']}</td><td>{$value['listOfTools']}</td><td>{$value['dailySalary']}</td>
        <td>{$value['position']}</td><td >{$value['changeDate']}</td><td ><form><input id=\"{$value['id']}\" onchange=\"changeDate(value, id)\"  type=\"text\" value=\"{$value['daysWorked']}\"></form></td></tr>";
    }
    echo $a;
}

if (!empty($_POST['setDaysWorker'])) {
    $a = new lib\Worker();
    $a->setDaysWorkedWorker($_POST['id'], $_POST['setDaysWorker']);
}
