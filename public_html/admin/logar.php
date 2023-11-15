<?php
namespace app\Models;
session_start();
require_once '../../vendor/autoload.php';
include $_SERVER['DOCUMENT_ROOT'].'/config/define.php';


if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    $senha   = addslashes($_POST['senha']);
    $usuario = addslashes($_POST['usuario']);

    $use = Exec::login($usuario,$senha);

    // Exec::echoArray($use);exit;

    if(!isset($use['nivel']) || $use['nivel'] == 0){
        echo "<script>window.location.assign('login.php?msg=erro".$use['coderro']."')</script>";
    }elseif($use['status'] == 1){
        // $arrConfigs    = Exec::getConfigs();

        $_SESSION[SESSAO]['usuario']['start_time']     = time();
        $_SESSION[SESSAO]['usuario']['id']             = $use['id'];
        $_SESSION[SESSAO]['usuario']['nome']           = $use['nome'];
        $_SESSION[SESSAO]['usuario']['nivel']          = $use['nivel'];
        $_SESSION[SESSAO]['usuario']['logado']         = TRUE;

        // $_SESSION[SESSAO]['configs']['titulo']         = $arrConfigs['titulo'];
        // $_SESSION[SESSAO]['configs']['subtitulo']      = $arrConfigs['subtitulo'];
        // $_SESSION[SESSAO]['configs']['logo_admin']     = $arrConfigs['logo_admin'];
        // $_SESSION[SESSAO]['configs']['link_rodape']    = $arrConfigs['link_rodape'];
        // $_SESSION[SESSAO]['configs']['nome_rodape']    = $arrConfigs['nome_rodape'];
        // $_SESSION[SESSAO]['configs']['versao_sistema'] = $arrConfigs['versao_sistema'];
        // $_SESSION[SESSAO]['configs']['icone']          = $arrConfigs['icone'];

        // $_SESSION[SESSAO]['permissoes'] = Exec::getPermissoes($use['nivel']);
        
        echo "<script>window.location.assign('index.php')</script>";
    } elseif($use['nivel'] < 1) {
        echo "<script>window.location.assign('login.php?msg=erro".$use['coderro']."')</script>"; 
    } elseif($use['status'] == 0) {
        echo "<script>window.location.assign('login.php?msg=erro".$use['coderro']."')</script>";
    } else {
        echo "<script>window.location.assign('login.php?msg=erro4')</script>";
    }
}else{
    header("Location:login.php");
}