<?php
//print_r($_REQUEST);

require_once 'const.php';

function Antimat($text)
{
    if (!($rows = fileToarray(A)))
        return array();

    foreach ($rows as $row) {
        $row = explode('-', $row);

        $badWord = $row[0];
        $goodWord = $row[1];

        if(strstr(strtolower($text), $badWord)){
            $text = str_replace($badWord, $goodWord, $text);
        }
    }
    return $text;
}

if(!isset($_REQUEST['idTovar'])){
    echo 'no ID';
    exit;
}

$handle=fopen(C,'a');
fwrite($handle, $_REQUEST['idTovar'].';'.$_REQUEST['name'].';'.Antimat($_REQUEST['comment']).';'.date('d:m:y').';'.$_REQUEST['rate'].PHP_EOL);
fclose($handle);

//$handle = fopen(C, 'r');
//$text=fread($handle,1000000);
//
//echo $text;
header('Location:index.php');