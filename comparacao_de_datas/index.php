<?php
$data1 = new DateTime();
$data2 = new DateTime();

$data2->setDate(2023,12,12);
$data2->setDate(2023,12,12);

$data2->setTime(01,12,12);
$data2->setTime(01,12,12);



if($data1 > $data2){

    echo "A data 1 é maior que a data 2";

}else{

    echo "data 2 é maior que a data 1";

}

if($data1 == $data2){
   
    echo "As datas são iguais";

}