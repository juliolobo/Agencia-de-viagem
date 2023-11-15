<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/config/define.php';
require '../../app/functions.php';
if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}
$timeout = 1;
$timeout = 60*60*24*$timeout; // Calcula segundos x minutos x horas x dias
	if (isset($_SESSION[SESSAO]['usuario']['start_time'])) {
		$elapsed_time = time() - $_SESSION[SESSAO]['usuario']['start_time'];
		if ($elapsed_time >= $timeout) {
			session_destroy();
			header("location:".redirectLogout($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST'], 'logout'));
			echo "<script>window.location.assign('login.php?msg=logout')</script>";
		} else {
			$_SESSION[SESSAO]['usuario']['start_time'] = time();
		}
	}
   
	if(!isset($_SESSION[SESSAO]['usuario']['id'])) {
		header("location:".redirectLogout($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
    }