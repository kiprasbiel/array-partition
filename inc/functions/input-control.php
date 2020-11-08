<?php
require_once('../../autoloader.php');

use inc\classes\Sorter;
use inc\classes\InputController;

if(isset($_POST)){
    $dataArray = (new InputController($_POST['main-input']))->getArray();

    $sortedArray = (new Sorter($dataArray))->sort();

    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Partition algorithm</title>
    </head>
    <body>
    <div>
        <?php
        foreach($sortedArray as $line){
            echo "$line <br>";
        }
        ?>

    </div>


    </body>
    </html>

<?php
}