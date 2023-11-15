<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

$temPost = isset($_POST['nome']) ?: false;

if($temPost){
    $retorno = [];

    if($_POST['lastName']){
        $retorno = [
            'msg'  => 'success',
            'tipo' => 'success'
        ];
    }else{
        if($_POST['nome'] == '' || strlen($_POST['nome']) < 3){
            $retorno['msg']  = 'O <b>nome</b> precisa ter no mínimo 3 caracteres!';
        }elseif($_POST['origem'] == '' || strlen($_POST['origem']) < 2){
            $retorno['msg']  = 'A <b>origem</b> precisa ter no mínimo 2 caracteres!';
        }elseif($_POST['destino'] == '' || strlen($_POST['destino']) < 2){
            $retorno['msg']  = 'O <b>destino</b> precisa ter no mínimo 2 caracteres!';
        }elseif($_POST['dataIda'] == '' || strlen($_POST['dataIda']) < 8){
            $retorno['msg']  = 'A <b>data de Ida</b> precisa ter no mínimo 8 caracteres!';
        }elseif($_POST['passageiros'] == '' || strlen($_POST['passageiros']) < 1){
            $retorno['msg']  = 'A <b>passageiros</b> precisa ser preenchido!';
        }elseif($_POST['tel'] == '' || strlen($_POST['tel']) < 9){
            $retorno['msg']  = 'O <b>telefone</b> precisa ter no mínimo 9 caracteres!';
        }
    
        if(conta_e_valida($retorno)){
            $retorno['tipo'] = 'error';
        }else{
            $fields = [
                'origem',
                'destino',
                'data_ida',
                'data_volta',
                'passageiros',
                'nome',
                'tel',
                'email',
                'hora',
                'status'
            ];
    
            $params = [
                $_POST['origem'],
                $_POST['destino'],
                $_POST['dataIda'],
                $_POST['dataVolta'],
                $_POST['passageiros'],
                $_POST['nome'],
                $_POST['tel'],
                $_POST['email'],
                $_POST['hora'],
                '1'
            ];

            $result = Exec::create('orcamentos', $fields, $params);
    
            if($result){
                $retorno = [
                    'msg'  => 'Mensagem enviada com sucesso!',
                    'tipo' => 'success'
                ];
            }
        }
    }
    echo json_encode($retorno);
    die();
}
$bannerTopo = Exec::select('home_topo');

$dataIda = date('Y-m-d', strtotime("+5 days"));
$dataVolta = date('Y-m-d', strtotime("+12 days"));

$temPost = isset($_POST['nome']) ?: false;

$fileImages = '../app/Jobs/instaImages.json';
$imageJson  = file_get_contents($fileImages);

$arrImages = json_decode($imageJson, true);
$objImages = json_decode($imageJson);
$countImages = 0;

// $fileVideos = 'instaVideos.json';

$title    = 'Início';

$view = 'home.php';