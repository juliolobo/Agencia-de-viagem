<?php
use app\Models\Exec;

function rotaAdmin($pagina, $id = ''){
    switch ($pagina) {
        case $pagina != 'dashboard':
            $controller = "../../app/Controllers/".ucfirst($pagina)."Controller.php";
            break;
        case 'dashboard':
        default:
            $controller = "../../app/Controllers/".ucfirst($pagina)."Controller.php";
            break;
    }

    return $controller;
}

function rotaSite($pagina, $id = ''){
    switch ($pagina) {
        case $pagina != 'home':
            $controller = "../app/Controllers/".ucfirst($pagina)."Controller.php";
            break;
        case 'home':
        default:
            $controller = "../app/Controllers/".ucfirst($pagina)."Controller.php";
            break;
    }

    return $controller;
}

function redirectLogout($SERVER_PROTOCOL, $HTTP_HOST, $msg = ''){
    $protocolo = (strpos(strtolower($SERVER_PROTOCOL),'https') === false) ? 'http://' : 'https://';
    $msgErro   = 'msg='.$msg ?: 'erro=naoLogado';
    $destino   = $HTTP_HOST.'/admin/login.php?'.$msgErro;

    return $protocolo.$destino;
}

function redirect($SERVER_PROTOCOL, $HTTP_HOST, $msg = ''){
    $protocolo = (strpos(strtolower($SERVER_PROTOCOL),'https') === false) ? 'http://' : 'https://';
    $msgErro   = $msg ? 'msg='.$msg : 'erro=naoAutorizado';
    $destino   = $HTTP_HOST.'/admin?'.$msgErro;

    return $protocolo.$destino;
}

function echoArray($array, $die = false) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    if($die){
        die;
    }
}

function rodapeData() {
    $anoAtual = date("Y");
    $anoProximo = $anoAtual +1;

    return "2023 - {$anoProximo}";
}

function conta_e_valida($arr){
    if(is_array($arr)){
        return count($arr);
    }else{
        return 0;
    }
}

function alerta($codAlerta, $msg = ''){
    if(in_array($codAlerta, ['addOk','editOk','addErro','usuarioExiste','emailExiste','editErro','editErro'])):
        switch ($codAlerta):
            case 'addOk':
                $retorno['msg']  = 'Cadastrado com sucesso!';
                $retorno['tipo'] = 'success';
                break;
            case 'editOk':
                $retorno['msg']  = 'Edição realizada com sucesso!';
                $retorno['tipo'] = 'success';
                break;
            case 'addErro':
                $retorno['msg']  = 'Houve um erro ao cadastrar!';
                $retorno['tipo'] = 'error';
                break;
            case 'usuarioExiste':
                $retorno['msg']  = 'O usuário já existe!';
                $retorno['tipo'] = 'error';
                break;
            case 'emailExiste':
                $retorno['msg']  = 'Já existe um usuário com esse email!';
                $retorno['tipo'] = 'error';
                break;
            case 'editErro':
                $retorno['msg']  = 'Houve um erro ao editar!';
                $retorno['tipo'] = 'error';
            case 'editErro':
                $retorno['msg']  = 'Houve um erro ao editar!';
                $retorno['tipo'] = 'error';
        endswitch;
    else:
        $retorno['msg']       = $msg;
        $retorno['tipo']      = $codAlerta;
    endif;
    
    $retorno['codAlerta'] = $codAlerta ?: false;

    return json_encode($retorno);
}

function botao($tipo, $link, $id = '', $action = '', $nome = ''){
    if($tipo == 'editar'){
        $retorno = '<a href="'.$link.'" class="btn btn-primary btn-sm" alt="Editar" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>';
    }elseif($tipo == 'excluir'){
        $retorno = '<a href="'.$link.'" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExcluir" data-id="'.$id.'" data-action="'.$action.'" data-nome="'.$nome.'" alt="Excluir" title="Excluir"><i class="fa-solid fa-trash-can"></i></a>';
    }elseif($tipo == 'download'){
        $retorno = '<a href="'.$link.'" class="btn btn-primary btn-sm" alt="Baixar" title="Baixar"><i class="fa-solid fa-download"></i></a>';
    }elseif($tipo == 'copiar'){
        $retorno = '<a href="'.$link.'" class="btn btn-info btn-sm copiarLink" data-action="'.URLRAIZ.'download/'.$id.'" alt="Copiar link" title="Copiar link"><i class="fa-solid fa-link"></i></a>';
    }

    return $retorno;
}

function statBox($contaOrcamentos, $contaAtivos){
    $retorno[1] = [
        'style' => 'info',
        'icon'  => 'fa-solid fa-magnifying-glass-dollar',
        'number' => isset($contaOrcamentos[1]) ? $contaOrcamentos[1] : 0,
        'link'   => './orcamentos',
        'text'   => 'Orçamento(s) aguardando'
    ];
    $retorno[2] = [
        'style' => 'warning',
        'icon'  => 'fa-solid fa-file-export',
        'number' => isset($contaOrcamentos[3]) ? $contaOrcamentos[3] : 0,
        'link'   => './orcamentos',
        'text'   => 'Proposta(s) enviada(s)'
    ];
    $retorno[3] = [
        'style' => 'danger',
        'icon'  => 'fa-solid fa-file-circle-xmark',
        'number' => isset($contaOrcamentos[4]) ? $contaOrcamentos[4] : 0,
        'link'   => './orcamentos',
        'text'   => 'Proposta(s) Recusada(s)'
    ];
    $retorno[4] = [
        'style' => 'success',
        'icon'  => 'fa-solid fa-file-circle-check',
        'number' => isset($contaOrcamentos[5]) ? $contaOrcamentos[5] : 0,
        'link'   => './orcamentos',
        'text'   => 'Proposta(s) Aceita(s)'
    ];

    return $retorno;
}

function telToWhats($number) {
    $numero = str_replace(' ', '', $number);

    $telefone = substr($numero,0,1) == '+' ? substr($numero, 1) : $numero;

    return '<a href="https://wa.me/'.$telefone.'" target="_blank">'.$number.'</a>';
}

function calcPorcentagem($base, $valor){
    $retorno = $valor / $base * 100;
    return $retorno;
}

/**
 * Retorna mes por extenso
 * 
 * @param int $mes
 * @return string
 */
function mes_extenso($mes, $lang = 'pt', $substr = 0) {

    $mes = (int) $mes;

    switch ($lang) {
        case 'en':
            $array_mes[1] = "January";
            $array_mes[2] = "February";
            $array_mes[3] = "March";
            $array_mes[4] = "April";
            $array_mes[5] = "May";
            $array_mes[6] = "June";
            $array_mes[7] = "July";
            $array_mes[8] = "August";
            $array_mes[9] = "September";
            $array_mes[10] = "October";
            $array_mes[11] = "November";
            $array_mes[12] = "December";
            break;
        default:
            $array_mes[1] = "Janeiro";
            $array_mes[2] = "Fevereiro";
            $array_mes[3] = "Março";
            $array_mes[4] = "Abril";
            $array_mes[5] = "Maio";
            $array_mes[6] = "Junho";
            $array_mes[7] = "Julho";
            $array_mes[8] = "Agosto";
            $array_mes[9] = "Setembro";
            $array_mes[10] = "Outubro";
            $array_mes[11] = "Novembro";
            $array_mes[12] = "Dezembro";
            break;
    }

    if ($substr) {
        return substr($array_mes[$mes], 0, $substr);
    } else {
        return $array_mes[$mes];
    }
}

/**
 * Converte data mysql para data dd/mm/yyyy
 * 
 * @param string $data_mysql
 * @return string
 */
function mysql_to_data($data_mysql, $hora = false, $segundos = true, $formato = '', $meio = '') {

    if ($hora) {

        if ($data_mysql == "" || $data_mysql == "0000-00-00 00:00:00" || $data_mysql == NULL) {
            $dataFormatada = "";
        } else {

            if ($segundos) {

                $formatacao = str_replace('  ', ' ', "d/m/Y {$meio} H:i:s");

                $dataFormatada = date($formatacao, strtotime($data_mysql));
                
            } else {

                $formatacao = str_replace('  ', ' ', "d/m/Y {$meio} H:i");

                $dataFormatada = date($formatacao, strtotime($data_mysql));
            }
        }
    } else {

        if ($data_mysql == "" || $data_mysql == "0000-00-00" || $data_mysql == "0000-00-00 00:00:00" || $data_mysql == NULL) {
            $dataFormatada = "";
        } else {
            $dataFormatada = date("d/m/Y", strtotime($data_mysql));
        }
    }

    switch ($formato) {
        case 'nomeMes':
            $arrDataFormatada = explode(" ", $dataFormatada);
            $arrData = explode("/", $arrDataFormatada[0]);
            $arrHora = explode(':', $arrDataFormatada[1]);
            $mes = ucfirst(substr(mes_extenso($arrData[1]), 0, 3));
            $dataFormatada = $arrData[0] . ' ' . $mes . ' ' . $arrData[2];
            if($hora):
                $dataFormatada .= " às {$arrHora[0]}:{$arrHora[1]}";
                if($segundos):
                    $dataFormatada .= ":{$arrHora[2]}";
                endif;
            endif;
        break;

        case 'nomeMes2':
            $arrDataFormatada = explode(" ", $dataFormatada);
            $arrData = explode("/", $arrDataFormatada[0]);
            $arrHora = explode(':', $arrDataFormatada[1]);
            $mes = ucfirst(substr(mes_extenso($arrData[1]), 0, 3));
            $dataFormatada = $arrData[0] . ' de ' . $mes;
            if($hora):
                $dataFormatada .= " às {$arrHora[0]}:{$arrHora[1]}";
                if($segundos):
                    $dataFormatada .= ":{$arrHora[2]}";
                endif;
            endif;
        break;

        case 'nomeMes3':
            $arrDataFormatada = explode(" ", $dataFormatada);
            $arrData = explode("/", $arrDataFormatada[0]);
            $arrHora = explode(':', $arrDataFormatada[1]);
            $mes = mb_strtolower(mes_extenso($arrData[1]));
            $dataFormatada = $arrData[0] . ' de ' . $mes . ' de ' . $arrData[2];
            if($hora):
                $dataFormatada .= " às {$arrHora[0]}:{$arrHora[1]}";
                if($segundos):
                    $dataFormatada .= ":{$arrHora[2]}";
                endif;
            endif;
        break;
        case 'nomeMes4':
            $arrDataFormatada = explode(" ", $dataFormatada);
            $arrData = explode("/", $arrDataFormatada[0]);
            $arrHora = explode(':', $arrDataFormatada[1]);
            $mes = ucfirst(substr(mes_extenso($arrData[1]), 0, 3));
            $dataFormatada = $arrData[0] . ' de ' . $mes . ' de ' . $arrData[2];
            if($hora):
                $dataFormatada .= " às {$arrHora[0]}:{$arrHora[1]}";
                if($segundos):
                    $dataFormatada .= ":{$arrHora[2]}";
                endif;
            endif;
        break;
    }

    return $dataFormatada;
}

function data_to_mysql($data, $hora = false) {
    if($hora):
        $arrData = explode(' ', $data);
        $data    = explode('/', $arrData[0]);
        $dia     = $data[0];
        $mes     = $data[1];
        $ano     = $data[2];
        $data   = "{$ano}-{$mes}-{$dia} {$arrData[1]}";
    else:
        $arrData = explode('/', $data);
        $dia     = $arrData[0];
        $mes     = $arrData[1];
        $ano     = $arrData[2];
        $data   = "{$ano}-{$mes}-{$dia}";
    endif;
    return $data;
}

function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

function innerBanner(){
    $arrBannerTopo = Exec::list('inner_topo');
    $arrBanner = [];
    $contaBanners = 0;
    foreach($arrBannerTopo as $ddBanner){
        array_push($arrBanner, $ddBanner['arquivo']);
        $contaBanners++;
    }
    $numberBanner = random_int(0, $contaBanners-1);

    return './assets/img/banner/innerBanner/'.$arrBanner[$numberBanner];
}