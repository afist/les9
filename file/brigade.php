<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.7.7
 */

/**
 * Database `brigade`
 */

/* `brigade`.`brigadier` */
$brigadier = array(
  array('id' => '1','name' => 'Vlad','description' => 'work in kitchen','dailySalary' => '250','position' => 'brigadier','idWorker' => 'id1'),
  array('id' => '2','name' => 'Oleg','description' => 'work in garden','dailySalary' => '300','position' => 'brigadier','idWorker' => 'id2'),
  array('id' => '3','name' => 'Paul','description' => 'bricklayers','dailySalary' => '400','position' => 'brigadier','idWorker' => 'id3')
);

/* `brigade`.`worker` */
$worker = array(
  array('id' => '1','Name' => 'Oleg','listOfTools' => 'Hammer, Mallet, Ax','position' => 'worker','dailySalary' => '20','idBrigadier' => 'id1'),
  array('id' => '2','Name' => 'Vasa','listOfTools' => 'Hacksaw, Level ','position' => 'worker','dailySalary' => '40','idBrigadier' => 'id1'),
  array('id' => '3','Name' => 'Nikita','listOfTools' => 'Screwdriver, Wrench ','position' => 'worker','dailySalary' => '50','idBrigadier' => 'id1'),
  array('id' => '4','Name' => 'Ivan','listOfTools' => 'Monkey wrench, Chisel ','position' => 'worker','dailySalary' => '35','idBrigadier' => 'id2'),
  array('id' => '5','Name' => 'Viktor','listOfTools' => 'Pliers, Scraper ','position' => 'worker','dailySalary' => '43','idBrigadier' => 'id2'),
  array('id' => '6','Name' => 'Vasa','listOfTools' => 'Scraper, Sandpaper ','position' => 'worker','dailySalary' => '34','idBrigadier' => 'id2'),
  array('id' => '7','Name' => 'Nikita','listOfTools' => 'Sandpaper, Plane ','position' => 'worker','dailySalary' => '47','idBrigadier' => 'id3'),
  array('id' => '8','Name' => 'Valik','listOfTools' => 'Bradawl, Paint thinner','position' => 'worker','dailySalary' => '31','idBrigadier' => 'id3'),
  array('id' => '9','Name' => 'Slava','listOfTools' => 'Workbench, Bolt ','position' => 'worker','dailySalary' => '56','idBrigadier' => 'id3')
);
