<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

if(in_array($_SESSION[SESSAO]['usuario']['nivel'], [1, 2, 99])){

$title = 'Orçamentos';
$subtitulo = 'Lista de pedidos de orçamento.';

$arrStatus     = Exec::list('orcamento_status', 'WHERE status = 1 ORDER BY nome DESC');
$arrOrcamentos = Exec::list('orcamentos', 'ORDER BY id DESC');

$view = 'orcamentos.php';
}else{
    header("location:".redirect($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
}