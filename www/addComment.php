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

function GetFilename() {

	 if ( !file_exists('img') )
	   mkdir('img');


    $pathPhotos = 'img/'.$_REQUEST['idTovar'];
	 if ( !file_exists($pathPhotos) )
	   mkdir($pathPhotos);

	//   if ( count($_FILES['photo']) )
	// {
//    foreach ($_FILES['photo']['name'] as $key => $value)
        $value = $_FILES['photo']['name'];

	//    if ( !$value /*|| !$_FILES['photo']['size'] || $_FILES['photo']['type']  != 'image/jpg'  [$key] */ )
	//           return false;

	move_uploaded_file( $_FILES['photo']['tmp_name'], $pathPhotos.'/'.$value );
        return $value;
	//  }

}

if(!isset($_REQUEST['idTovar'])){
    echo 'no ID MoFa';
    exit;
}

$handle=fopen(C,'a');
$otzyv = $_REQUEST['idTovar'].';'.$_REQUEST['name'].';'.Antimat($_REQUEST['comment']).';'.date('d:m:y').';'.$_REQUEST['rate'].';' . GetFilename();
fwrite($handle, $otzyv.PHP_EOL);
fclose($handle);

		 if ( !file_exists('view') )
	   mkdir('view');

$handle=fopen('view/'.str_replace('.','',GetFilename()).'.php','a');
fwrite($handle, '<?php $text="'.$otzyv.'";'.PHP_EOL.'$lot = explode(";",$text);'.PHP_EOL.'include "otzyv_default_view.php";'.PHP_EOL);
fclose($handle);


header('Location:index.php');