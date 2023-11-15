<?php
namespace app\Model;
if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

//url
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$requestUri = $_SERVER['REQUEST_URI'];

//dominio
$serverName = str_replace("www.", "", $_SERVER['SERVER_NAME']);

//sessao
define("DOMINIO",$serverName);
define("SITE",$serverName);
define("SESSAO",md5($serverName.date('Ymd')));
unset($_SESSION[$serverName]);

//debug
if(isset($_GET['debug'])){
    define("DEBUG",true);
}else{
    define("DEBUG",false);
}

//prefixo
define("DB_PREFIX","");

if($_SERVER['SERVER_ADDR'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost'){
    
    #************* LOCALHOST *************
    define("PATHRAIZ",$_SERVER['DOCUMENT_ROOT'].'/');
    define("URLRAIZ","http://embarqueideal.site/");
    define("URLAPI","http://embarqueideal.site/api/");
    define("BD_USUARIO","embarqueideal");
    define("BD_SENHA","poiu7890");
    define("BD_SERVIDOR","localhost");
    define("BD_BASE","embarqueidealsite");
	define("LOCAL",true);
    
}else{

    #************* HOSPEDAGEM *************
    define("PATHRAIZ",$_SERVER['DOCUMENT_ROOT'].'/');
    define("URLRAIZ","https://{$serverName}/");
    define("URLAPI","https://api.{$serverName}/");
    define("BD_USUARIO","embarque_sistema");
    define("BD_SENHA","68TbIrg4UK");
    define("BD_SERVIDOR","localhost");
    define("BD_BASE","embarque_sistema");
	define("LOCAL",false);
    
}

if(DEBUG){
    ini_set('display_errors', 'On');
}else{
    ini_set('display_errors', 'Off'); 
}