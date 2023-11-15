<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

if(in_array($_SESSION[SESSAO]['usuario']['nivel'], [1, 2, 99])){
    $title = 'Orçamento';
    $subtitulo = 'Lista de pedidos de orçamento.';
    
    $temPost = isset($_POST['nome']) ?: false;
    $retorno = [];
    
    if($temPost){
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
                'status',
    
                'pass_int_origem',
                'pass_int_destino',
                'pass_int_data_ida',
                'pass_int_data_volta',
                'pass_int_qtd',
                'pass_int_bag10k',
                'pass_int_bag23k',
                'pass_int_preco',
    
                'pass_nac_origem',
                'pass_nac_destino',
                'pass_nac_data_ida',
                'pass_nac_data_volta',
                'pass_nac_qtd',
                'pass_nac_bag10k',
                'pass_nac_bag23k',
                'pass_nac_preco',
    
                'pass_rod_origem',
                'pass_rod_destino',
                'pass_rod_data_ida',
                'pass_rod_data_volta',
                'pass_rod_qtd',
                'pass_rod_preco',
    
                'seguro',
                'assessoria',
                'taxas',
                'total',
                'obs',
            ];
    
            $pass_int_data_ida = $_POST['pass_int_data_ida'] ? data_to_mysql($_POST['pass_int_data_ida']) : '';
            $pass_int_data_volta = $_POST['pass_int_data_volta'] ? data_to_mysql($_POST['pass_int_data_volta']) : '';
            $pass_nac_data_ida = $_POST['pass_nac_data_ida'] ? data_to_mysql($_POST['pass_nac_data_ida']) : '';
            $pass_nac_data_volta = $_POST['pass_nac_data_volta'] ? data_to_mysql($_POST['pass_nac_data_volta']) : '';
            $pass_rod_data_ida = $_POST['pass_rod_data_ida'] ? data_to_mysql($_POST['pass_rod_data_ida']) : '';
            $pass_rod_data_volta = $_POST['pass_rod_data_volta'] ? data_to_mysql($_POST['pass_rod_data_volta']) : '';
    
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
                $_POST['status'],
    
                $_POST['pass_int_origem'],
                $_POST['pass_int_destino'],
                $pass_int_data_ida,
                $pass_int_data_volta,
                $_POST['pass_int_qtd'],
                $_POST['pass_int_bag10k'],
                $_POST['pass_int_bag23k'],
                $_POST['pass_int_preco'],
                
                $_POST['pass_nac_origem'],
                $_POST['pass_nac_destino'],
                $pass_nac_data_ida,
                $pass_nac_data_volta,
                $_POST['pass_nac_qtd'],
                $_POST['pass_nac_bag10k'],
                $_POST['pass_nac_bag23k'],
                $_POST['pass_nac_preco'],
                
                $_POST['pass_rod_origem'],
                $_POST['pass_rod_destino'],
                $pass_rod_data_ida,
                $pass_rod_data_volta,
                $_POST['pass_rod_qtd'],
                $_POST['pass_rod_preco'],
                
                $_POST['seguro'],
                $_POST['assessoria'],
                $_POST['taxas'],
                $_POST['total'],
                $_POST['obs'],
            ];
    
            if($_GET['id']){
                $where = "id = ".$_GET['id'];
    
                $ddAntigos = Exec::readid('orcamentos', $_GET['id']);
                $resultado = Exec::update('orcamentos', $fields, $params, $where);
    
                if($resultado){
                    foreach($fields as $idCampo => $nomeCampo){
                        if($ddAntigos[$nomeCampo] != $params[$idCampo]){
                            Exec::gravaLog('editOrcamento', 'orcamentos', $_GET['id'], "Editou o campo <b>{$nomeCampo}</b> do do Orçamento do <b>{$_POST['nome']}</b> de <b>{$ddAntigos[$nomeCampo]}</b> para <b>{$params[$idCampo]}</b>.", $_SESSION[SESSAO]['usuario']['id']);
                        }
                    }
                    $retorno['tipo'] = 'editOk';
                    $retorno['msg']  = '';
                }else{
                    $retorno['tipo'] = 'editErro';
                    $retorno['msg']  = '';
                }
            }else{
                $resultado = Exec::create('orcamentos', $fields, $params);
    
                if($resultado){
                    $retorno['tipo'] = 'addOk';
                    $retorno['msg']  = '';
                }else{
                    $retorno['tipo'] = 'addErro';
                    $retorno['msg']  = '';
                }
            }
        }
    
        echo alerta($retorno['tipo'], $retorno['msg']);
        die();
    
    }else{
        $ddOrcamento = [
            'id'          => '',
            'origem'      => '',
            'destino'     => '',
            'data_ida'    => '',
            'data_volta'  => '',
            'passageiros' => '',
            'nome'        => '',
            'tel'         => '',
            'email'       => '',
            'hora'        => '',
            'status'      => '',
            'valor'       => '',
            'pagamento'   => '',
            'dt_cadastro' => '',
    
            'pass_int_origem'     => '',
            'pass_int_destino'    => '',
            'pass_int_data_ida'   => '',
            'pass_int_data_volta' => '',
            'pass_int_qtd'        => '',
            'pass_int_bag10k'     => '',
            'pass_int_bag23k'     => '',
            'pass_int_preco'      => '',
    
            'pass_nac_origem'     => '',
            'pass_nac_destino'    => '',
            'pass_nac_data_ida'   => '',
            'pass_nac_data_volta' => '',
            'pass_nac_qtd'        => '',
            'pass_nac_bag10k'     => '',
            'pass_nac_bag23k'     => '',
            'pass_nac_preco'      => '',
    
            'pass_rod_origem'     => '',
            'pass_rod_destino'    => '',
            'pass_rod_data_ida'   => '',
            'pass_rod_data_volta' => '',
            'pass_rod_qtd'        => '',
            'pass_rod_preco'      => '',
    
            'seguro'     => '',
            'assessoria' => '',
            'taxas'      => '',
            'total'      => '',
            'obs'        => '',
        ];
    
        $fileType = [
            'doc'  => 'word',
            'docx' => 'word',
            'pdf'  => 'pdf',
            'csv'  => 'csv',
            'zip'  => 'zipper',
            '7zip' => 'zipper',
            'rar'  => 'zipper',
            'jpg'  => 'image',
            'jpeg' => 'image',
            'png'  => 'image',
            'gif'  => 'image',
            'mp3'  => 'audio',
            'wav'  => 'audio',
            'aac'  => 'audio',
            'ogg'  => 'audio',
            'wma'  => 'audio',
            'mp4'  => 'video',
            'mov'  => 'video',
            'wmv'  => 'video',
            'avi'  => 'video',
            'mkv'  => 'video',
        ];
    
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $ddOrcamento = Exec::readid('orcamentos', $_GET['id']);
            $arrArquivos = Exec::list('orcamento_arquivos', "WHERE orcamento_id = {$_GET['id']}");
            $title       = 'Orçamento de '.$ddOrcamento['nome'];
            $subtitulo   = 'Edite os detalhes do cadastro do usuário.';
    
        }elseif(isset($_GET['id']) && is_string($_GET['id'])){
            $ddFile = [];
            $arquivo = new Upload($_FILES['inputFile']);
            if ($arquivo->uploaded) {
                $arquivo->file_new_name_body = $_POST['nameFile'].'-'.date('Ymds');
                $ddFile['size'] = $arquivo->file_src_size / 1024;
                $arquivo->process('../../public_html/arquivos/');
                if ($arquivo->processed) {
                    $ddFile['name'] = $arquivo->file_dst_name;
                    $ddFile['ext']  = $arquivo->file_dst_name_ext;
                    $ddFile['uuid'] = guidv4();
                    $arquivo->clean();
                    $fileId = Exec::create('orcamento_arquivos', ['nome', 'uuid', 'orcamento_id', 'tipo', 'tamanho'], [$ddFile['name'], $ddFile['uuid'], $_POST['orcamentoId'], $ddFile['ext'], $ddFile['size']]);
                    Exec::gravaLog('addArquivo', 'orcamento_arquivos', $fileId, "Anexou o arquivo <b>{$ddFile['name']}</b>", $_SESSION[SESSAO]['usuario']['id']);
    
                    $extensao = array_key_exists($ddFile['ext'], $fileType) ? '-'.$fileType[$ddFile['ext']] : '';
                    $retorno = [
                        'msg' => 'Arquivo enviado com sucesso!',
                        'tipo' => 'success',
                        'linha' => '<tr id="tr'.$fileId.'">
                                        <td>
                                            <i class="fa-solid fa-file'.$extensao.'"></i> 
                                            '.$ddFile['name'].'
                                        </td>
                                        <td>'.round($ddFile['size'], 4).' KB</td>
                                        <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            '.botao('download', URLRAIZ.'download/'.$ddFile['uuid']).'
                                            '.botao('excluir', '#', $fileId, 'fileDel', $ddFile['name']).'
                                            '.botao('copiar', '#', $ddFile['uuid']).'
                                        </div>
                                        </td>
                                    </tr>',
                    ];
                    echo json_encode($retorno);
                }
            }
            die();
        }else{
            $arrOrcamentos = Exec::list('orcamentos', 'ORDER BY id DESC');
        }
    }
    
    $arrStatus = Exec::list('orcamento_status', 'WHERE status = 1 ORDER BY ordem ASC');
    
    $view = 'orcamento.php';
}else{
    header("location:".redirect($_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']));
}