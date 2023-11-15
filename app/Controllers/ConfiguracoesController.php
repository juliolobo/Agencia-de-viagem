<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

$arrConfigs = Exec::select('configuracoes');



$title    = 'Configurações';

$view = 'configuracoes.php';