<?php

$data = mktime(05, 12, 33, 03, 19, 1994);

//echo $data;

$dataNascimento = date('d/m/Y', $data);

echo $dataNascimento;