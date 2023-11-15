<?php

namespace app\Models;
require_once '../../../vendor/autoload.php';

$arrStatus = Exec::list('orcamento_status', 'WHERE status = 1');

echo json_encode($arrStatus);