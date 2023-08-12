<?php

require_once 'App/Cappuccino.php';
require_once 'App/ExtraSugar.php';
require_once 'App/ArtisticDrawing.php';

$cappuccino = new Cappuccino;

// $cappuccino = new ExtraSugar($cappuccino);

$cappuccino = new ArtisticDrawing($cappuccino);

echo 'Price $' . $cappuccino->getPrice() . PHP_EOL;