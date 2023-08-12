<?php
require_once 'vendor/autoload.php';

use App\BeefSandwich;
use App\ChickenSandwich;
use App\VegetarianSandwich;

$chickenSandwich = new ChickenSandwich;
$chickenSandwich->make();

$beefSandwich = new BeefSandwich;
$beefSandwich->make();

$vegetarianSandwich = new VegetarianSandwich;
$vegetarianSandwich->make();