<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Lista</h4>
    <ul>
        <li>Poznań</li>
        <li>Łódź</li>
        <li>Gniezno</li>
    </ul>


<?php
$city = "Środa Wlkp.";
echo <<< LIST
    <ul>
        <li>Poznań</li>
        <li>Łódź</li>
        <li>Gniezno</li>
        <li>$city</li>
    </ul>
    LIST;

    echo "Dodanie skryptu<br>";

    //include("test.php");
    //reqire("test.php");

require("./scripts/script.php");



    echo "string";

?>









</body>
</html>