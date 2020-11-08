<?php
require_once ('autoloader.php');

$line = readline("Įveskite skaičių sąrašą, kur skaičiai atskirti , (kableliais): ");

use inc\classes\Sorter;
use inc\classes\InputController;

$dataArray = (new InputController($line))->getArray();

$sortedArray = (new Sorter($dataArray))->sort();

foreach($sortedArray as $line){
    echo "$line \n";
}
