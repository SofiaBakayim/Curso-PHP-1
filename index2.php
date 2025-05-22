<?php


use Valium\PT\Nif;
require 'vendor/autoload.php';

$nif = new Nif();
$q = $nif->check(['216014239', '275744302']);
var_dump($q);