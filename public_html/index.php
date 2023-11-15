<?php
namespace app\Models;
require_once '../vendor/autoload.php';

date_default_timezone_set("America/Sao_Paulo");


require '../app/functions.php';
$arrMenu  = Exec::list('menu_site', 'WHERE status = 1 ORDER BY ordem');

$pg = "home";
if(isset($_GET['pg']) && !empty($_GET['pg'])){
    $pg = addslashes($_GET['pg']);
}
$id = isset($_GET['id']) ? $_GET['id'] : '';

include rotaSite($pg, $id);

include './template.php';