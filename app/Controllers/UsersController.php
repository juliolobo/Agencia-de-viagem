<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

if(in_array($_SESSION[SESSAO]['usuario']['nivel'], [1, 99])){

$title = 'Lista de Usuários';
$subtitulo = 'Lista dos usuários cadastrados no sistema.';

$arrNiveis = Exec::list('niveis', 'WHERE status = 1 AND id <> 99 ORDER BY nome DESC');
$arrUsers  = Exec::list('users', 'WHERE nivel <> 99 ORDER BY status DESC, nome ASC');
$arrStatus = [0 => 'Inativo', 1 => 'Ativo'];

$view = 'users.php';
}else{
    header("location:".redirect($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
}