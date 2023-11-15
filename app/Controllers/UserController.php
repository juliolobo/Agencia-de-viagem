<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

if(in_array($_SESSION[SESSAO]['usuario']['nivel'], [1, 99])){
    $arrNiveis = Exec::list('niveis', 'WHERE status = 1 AND id <> 99 ORDER BY nome DESC');

    $title    = $detalhes[0]['nome'];
    $subtitulo = 'Cadastre um novo usuário para acessar o sistema.';

    if(isset($_GET['id'])){
        $ddUser    = Exec::readid('users', $_GET['id']);
        $title    = 'Editar '.$ddUser['nome'];
        $subtitulo = 'Edite os detalhes do cadastro do usuário.';
    }

    $msg = [
        '1' => 'Preencha o campo nome corretamente',
        '2' => 'Preencha o campo email corretamente',
        '3' => 'Preencha o campo telefone 1 corretamente',
        '4' => 'Preencha o campo login corretamente',
        '5' => 'Preencha o campo senha corretamente com pelo menos 6 digitos',
        '6' => 'Houve um erro ao realizar o cadastro!',
        '7' => 'Já existe um usuário com esse nome de usuário!',
        '8' => 'Já existe um usuário com esse email!',
    ];

    $view = 'user.php';
}else{
    header("location:".redirect($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
}