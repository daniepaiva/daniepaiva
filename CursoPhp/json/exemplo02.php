<?php


$json = '[{"nome":"Joao","idade":20}]';

$data = json_decode($json, true);
var_dump($data);
?>