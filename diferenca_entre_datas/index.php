<?php

$data1 = new DateTime();
$data2 = new DateTime();


$data2->setDate(2020,12,12);

print_r($data2);

$novaData = $data1->diff($data2);

print_r($novaData);

echo $novaData->format('%a Dias'); //Imprime a quantidade de dias entrea as datas.