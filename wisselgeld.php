<?php
$money = (int) $argv[1];

switch ($money) {
    case 15:
        echo $money . " X 1 euro";
        break;
    default:
        echo "Geen wisselgeld";
}
