<?php
namespace app\Models;
require_once '../../vendor/autoload.php';

    session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/config/define.php';
	unset($_SESSION[SESSAO]);
	echo "<script>window.location.assign('login.php?msg=logoutok')</script>"; 