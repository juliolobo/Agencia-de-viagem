<?php
namespace app\Models;

require_once '../../../vendor/autoload.php';
require '../../../app/functions.php';

foreach($_POST as $nome_campo => $valor){
    $comando = "\$" . $nome_campo . "='" . $valor . "';";
    eval($comando);
}

$retorno = [];

if($action == 'fileDel'){
    $ddArquivo = Exec::readid('orcamento_arquivos', $del_id);

    $filePath = '../../arquivos/';
    $status = unlink($filePath.$ddArquivo['nome']);

    if($status){  
        $retorno = Exec::delete('orcamento_arquivos', $del_id);
        Exec::gravaLog($action, 'orcamento_arquivos', $del_id, "Excluiu o arquivo <b>{$ddArquivo['nome']}</b>", $_SESSION[SESSAO]['usuario']['id']);
    }else{  
        $retorno = 'delError';  
    }

    echo 'delFileOk';
}elseif($action == 'topoinnerDel'){
    $ddArquivo = Exec::readid('inner_topo', $del_id);

    $filePath = '../../assets/img/banner/innerBanner/';
    $status = unlink($filePath.$ddArquivo['nome']);

    if($status){  
        $retorno = Exec::delete('inner_topo', $del_id);
        Exec::gravaLog($action, 'inner_topo', $del_id, "Excluiu o arquivo <b>{$ddArquivo['nome']}</b>", $_SESSION[SESSAO]['usuario']['id']);
    }else{  
        $retorno = 'delError';  
    }

    echo 'delFileOk';
}