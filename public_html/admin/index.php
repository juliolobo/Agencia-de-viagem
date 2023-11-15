<?php
namespace app\Models;
require_once '../../vendor/autoload.php';
require_once './actions/sessionstart.php';

date_default_timezone_set("America/Sao_Paulo");

if(isset($_SESSION[SESSAO]['usuario']['id'])) {

$arrMenu  = Exec::list('menu', 'WHERE status = 1 ORDER BY ordem');
$pg = "dashboard";
if(isset($_GET['pg']) && !empty($_GET['pg'])){
    $pg = addslashes($_GET['pg']);
}
$id = isset($_GET['id']) ? $_GET['id'] : '';

$patch = isset($_GET['id']) ? '../' : './';

$urlBase = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ? 'http://'.$_SERVER['HTTP_HOST'].'/admin' : 'https://'.$_SERVER['HTTP_HOST'].'/admin';

include rotaAdmin($pg, $id);

include './template.php';

} else {
?>
    <html>
    <body style="margin:0;padding:0;background-color:#000;text-align:center;color:#fff;">
    <h1 style="margin-top:50px;">Você precisa estar logado pra acessar o conteúdo!</h1>
    <h2><a href="login.php" style="color:#fff;">Clique aqui e faça o login!</a></h2>
    </body>
    </html>
<?php
	header("location:".redirectLogout($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
}