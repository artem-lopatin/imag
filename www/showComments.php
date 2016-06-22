<?php
require_once 'const.php';

if((file_exists(C))){
    $rows = fileToarray(C);

    foreach ($rows as $row){
        $parts = explode(';',$row);

        if($parts[0] != $i) {
            continue;
        }else {
            echo $parts[3] . '<br>User: <b>' . $parts[1] . '</b> wrote:<br>' . $parts[2]
                . (isset($parts[4]) ? '<br>Rating:' . str_repeat('*', (int)$parts[4]) : '') . '<hr><br>';
        }
    }
}else {
    echo('no comments yet, you\'re the first one');
}