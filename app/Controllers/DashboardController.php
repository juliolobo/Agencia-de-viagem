<?php

namespace app\Models;
require_once '../../vendor/autoload.php';
$detalhes = Exec::select('menu', 'nome, arquivo', "WHERE arquivo = '{$pg}'");
$contaAtivos = Exec::count('users', 'id', "WHERE status = 1");

$arrOrcamentos30dias = Exec::list('orcamentos', "WHERE datediff(date(now()),dt_cadastro) <= 30");
$contaOrcamentos = [];
foreach($arrOrcamentos30dias as $idOrcamento => $ddOrcamento){
    array_push($contaOrcamentos, $ddOrcamento['status']);
}
$contaOrcamentos = array_count_values($contaOrcamentos);

$anoAtual = date('Y');
$arrOrcamentos = Exec::list('orcamentos', "WHERE dt_cadastro > '{$anoAtual}-01-01 00:00:00' AND dt_cadastro < '{$anoAtual}-12-31 00:00:00'");
$chart = [];
foreach($arrOrcamentos as $ddOrcamento){
    $arrData = explode('-', $ddOrcamento['dt_cadastro']);
    $arrData[1] = $arrData[1][0] == 0 ? $arrData[1][1] : $arrData[1];
    $chart[$arrData[1]][$ddOrcamento['status']] += $ddOrcamento['status'] != 1 ? 1 : 0;
    $chart[$arrData[1]][1]++;

    $pieChart[$ddOrcamento['status']] += $ddOrcamento['status'] != 1 ? 1 : 0;
    $pieChart[1]++;
}

$mes = 1;
$status = 1;
while($mes <= 12) {
    if(!isset($chart[$mes])){
        $chart[$mes] = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0,];
    }else{
        while($status <= 5) {
            if(!isset($chart[$mes][$status])){
                $chart[$mes][$status] = 0;
            }
            $status++;
        }
    }
    $mes++;
}


$title = $detalhes[0]['nome'];
$view = 'dashboard.php';
