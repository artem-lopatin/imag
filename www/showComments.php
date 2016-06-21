<?php
require_once 'const.php';

if(!($rows = fileToarray(C)))
exit(-1);

foreach ($rows as $row){
    $parts = explode(';',$row);
    if($parts[0] != $_REQUEST['idTovar'])
        continue;
    echo $parts[3].'<br>User: <b>'.$parts[1].'</b> wrote:<br>'.$parts[2]
        .(isset($parts[4])?'<br>Rating:'.str_repeat('*',(int)$parts[4]):'').'<br>';
}