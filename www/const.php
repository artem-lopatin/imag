<?php
const C = 'comments.txt';
const A = 'antimat.txt';

function fileToarray($filename){

    if(!($handle = fopen($filename,'r'))){
        return false;
    };

    $text='';
    do{
        $row=fread($handle, 100);
        $text .=$row;
    }while ($row);

    fclose($handle);

    $rows= explode(PHP_EOL,$text);

    return $rows;
}