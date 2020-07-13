<?php

function cleanMask($data)
{
    $data = trim($data);
    $data = str_replace("(", "", $data);
    $data = str_replace(")", "", $data);
    $data = str_replace("-", "", $data);
    $data = str_replace(" ", "", $data);
    return $data;
}

function getIpClient()
{
    return $_SERVER["REMOTE_ADDR"];
}


function createMask($numero){
    if(strlen($numero) == 10){
        $mask = substr_replace($numero, '(', 0, 0);
        $mask = substr_replace($mask, '9', 3, 0);
        $mask = substr_replace($mask, ')', 3, 0);
        $mask = substr_replace($mask, '-', 8, 0);
    }else{
        $mask = substr_replace($numero, '(', 0, 0);
        $mask = substr_replace($mask, ')', 3, 0);
        $mask = substr_replace($mask, '-', 9, 0);

    }
    return $mask;
}
