<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

if(in_array($_SESSION[SESSAO]['usuario']['nivel'], [1, 3, 99])){
    $title    = 'Topo Home';
    $view = 'topo.php';

    $temPost = isset($_POST['titulo']) ?: false;
    $retorno = [];

    if($temPost){
        if($_FILES['customFile']['name']){
            $ddFile = [];
            $arquivo = new Upload($_FILES['customFile']);
            if ($arquivo->uploaded) {
                $arquivo->file_new_name_body = date('Ymd');
                $arquivo->image_resize       = true;
                $arquivo->image_x            = 1920;
                $arquivo->image_ratio        = true;
                $arquivo->file_overwrite     = true;
                $arquivo->process('../../public_html/assets/img/banner/home/');
                if ($arquivo->processed) {
                    $ddFile['name'] = $arquivo->file_dst_name;
                    $arquivo->clean();
                    $fields = ['arquivo', 'titulo', 'subtitulo'];
                    $params = [$ddFile['name'], $_POST['titulo'], $_POST['subtitulo']];
                }
            }
        }else{
            $fields = ['titulo', 'subtitulo'];
            $params = [$_POST['titulo'], $_POST['subtitulo']];
        }
        
        $retorno = Exec::update('home_topo', $fields, $params);
    }

    $arrTopo = Exec::select('home_topo');

}else{
    header("location:".redirect($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
}