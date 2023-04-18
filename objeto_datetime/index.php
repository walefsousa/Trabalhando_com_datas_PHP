<?php

$data = new DateTime();

//print_r($data);

echo $data->format('d/m/Y') . "\n";


$data->modify('+5 days');

echo $data->format('d/m/Y'); //mais 5 dias adicionados