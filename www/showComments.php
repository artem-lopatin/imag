<?php



require_once 'const.php';

if((file_exists(C))){
    $rows = fileToarray(C);
	//var_dump($_FILES);
    foreach ($rows as $row){
        $parts = explode(';',$row);

        if($parts[0] != $i) {
            continue;
        }else {
            echo $parts[3] . '<br>User: <b>' . $parts[1] . '</b> wrote:<br>' . $parts[2]
				. (isset($parts[4]) ? '<br>Rating:' . str_repeat('*', (int)$parts[4]) : '')
				. '<a href="view/'.str_replace('.','',$parts[5]).'.php"><img src="img/'.$i.'/'.$parts[5].'" width="90%"></a>' . '<hr><br>';
        }
    }
}else {
    echo('no comments yet, you\'re the first one');
}