<?php 


require_once './student.php';

$StudentS = new student(1, 2, 'email@email.com', ' Terry Cristinelli', new DateTime('1990-01-18'), "male");
$StudentS = new student();

var_dump($StudentS);