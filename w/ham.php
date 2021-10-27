<?php
$number = 14;

if (kiem_tra_chan($number)){
    echo 'so chan';
}else{
    echo 'so le';
}

function kiem_tra_chan($number){
    if ($number % 2 == 0)
        return true;
    else return false;
    }
