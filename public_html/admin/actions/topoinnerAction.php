<?php
namespace app\Models;

require_once '../../../vendor/autoload.php';
require '../../../app/functions.php';

foreach($_POST as $nome_campo => $valor){
    $comando = "\$" . $nome_campo . "='" . $valor . "';";
    eval($comando);
}

$retorno = [];

if($action == 'topoinnerDel'){
    $ddArquivo = Exec::readid('inner_topo', $del_id);

    $filePath = '../../assets/img/banner/innerBanner/';
    $status = unlink($filePath.$ddArquivo['arquivo']);

    if($status){  
        $retorno = Exec::delete('inner_topo', $del_id);

        if($retorno == 'delOk'){
            $retorno = 'delFileOk';
            Exec::gravaLog($action, 'inner_topo', $del_id, "Excluiu o arquivo <b>{$ddArquivo['nome']}</b>", $_SESSION[SESSAO]['usuario']['id']);
        }
    }else{  
        $retorno = 'delError';  
    }

    echo $retorno;
}