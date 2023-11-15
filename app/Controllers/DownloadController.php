<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

$ddArquivo = Exec::select('orcamento_arquivos', 'uuid, nome', "WHERE uuid = '{$_GET['id']}'");

// Define file name and path 
$fileName = $ddArquivo[0]['nome']; 
$filePath = './arquivos/'.$fileName; 
 
if(!empty($fileName) && file_exists($filePath)){ 
    // Define headers 
    header("Cache-Control: public"); 
    header("Content-Description: File Transfer"); 
    header("Content-Disposition: attachment; filename=$fileName"); 
    header("Content-Type: application/zip"); 
    header("Content-Transfer-Encoding: binary"); 
     
    // Read the file 
    readfile($filePath); 
    exit; 
}else{ 
    echo 'The file does not exist.'; 
}

die();