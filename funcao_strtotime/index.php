<?php

$data = strtotime("2 days");

echo $data . " ";

$dataAtual = date('d/m/y', $data);

echo $dataAtual;