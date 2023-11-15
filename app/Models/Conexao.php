<?php
namespace app\Models;
/**
 * @author Julio Lobo
 */
class Conexao {
    private static $instance;

    public static function getConn() {
		
		require_once $_SERVER['DOCUMENT_ROOT'].'/config/define.php';

        try{
	        if(!isset(self::$instance)):
	            self::$instance = new \PDO('mysql:host='.BD_SERVIDOR.';dbname='.BD_BASE.';charset=utf8', BD_USUARIO, BD_SENHA);
	        endif;
	        
	        return self::$instance;
	    }catch(PDOException $e){
	    	echo 'Error: '.$e->getMessage();
	    }
    }
}