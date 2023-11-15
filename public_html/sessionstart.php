<?php
session_start();
$timeout = 1;
$timeout = 60*60*24*$timeout; // Calcula segundos x minutos x horas x dias
	if (isset($_SESSION['embarque_ideal_time'])) {
		$elapsed_time = time() - $_SESSION['embarque_ideal_time'];
		if ($elapsed_time >= $timeout) {
			session_destroy();
			echo "<script>window.location.assign('./?pg=fazerpedido&msg=logout')</script>";
		} else {
			$_SESSION['embarque_ideal_time'] = time();
		}
	}
   
	// if(!isset($_SESSION['idfleecaCli'])) {
	// 	header("location:./?pg=fazerpedido");
    // }