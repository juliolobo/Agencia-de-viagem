<?php
namespace app\Models;

require_once '../../../vendor/autoload.php';
require '../../../app/functions.php';

foreach($_POST as $nome_campo => $valor){
    $comando = "\$" . $nome_campo . "='" . $valor . "';";
    eval($comando);
}

$retorno = [];

switch($action):
    case 'addUsuario':
        if($nome == '' || strlen($nome) < 3){
            $retorno['msg']  = 'O <b>nome</b> precisa ter no mínimo 3 caracteres!';
        }elseif($email == '' || strlen($email) < 3){
            $retorno['msg']  = 'O <b>email</b> precisa ter no mínimo 3 caracteres!';
        }elseif($phone1 == '' || strlen($phone1) < 3){
            $retorno['msg']  = 'O <b>telefone</b> precisa ter no mínimo 3 caracteres!';
        }elseif($login == '' || strlen($login) < 3){
            $retorno['msg']  = 'O <b>nome de usuário</b> precisa ter no mínimo 3 caracteres!';
        }elseif($senha == '' || strlen($senha) < 6){
            $retorno['msg']  = 'A <b>senha</b> precisa ter no mínimo 6 caracteres!';
        }

        if(conta_e_valida($retorno)){
            $retorno['tipo'] = 'error';
            echo json_encode($retorno);
            die();
        }

        $params = [
            'nome'   => $nome, 
            'email'  => $email, 
            'nivel'  => $nivel, 
            'phone1' => $phone1, 
            'phone2' => $phone2, 
            'obs'    => $obs, 
            'status' => $status,
            'login'  => $login,
            'senha'  => $senha
        ];
    
        $retorno = User::addUser($params);
        
        echo alerta($retorno);
        break;

    case 'editUsuario':
        if($nome == '' || strlen($nome) < 3){
            $retorno['msg']  = 'O <b>nome</b> precisa ter no mínimo 3 caracteres!';
        }elseif($email == '' || strlen($email) < 3){
            $retorno['msg']  = 'O <b>email</b> precisa ter no mínimo 3 caracteres!';
        }elseif($phone1 == '' || strlen($phone1) < 3){
            $retorno['msg']  = 'O <b>telefone</b> precisa ter no mínimo 3 caracteres!';
        }elseif($login == '' || strlen($login) < 3){
            $retorno['msg']  = 'O <b>nome de usuário</b> precisa ter no mínimo 3 caracteres!';
        }elseif($senha != '' && strlen($senha) < 6){
            $retorno['msg']  = 'A <b>senha</b> precisa ter no mínimo 6 caracteres!';
        }

        if(conta_e_valida($retorno)){
            $retorno['tipo'] = 'error';
            echo json_encode($retorno);
            die();
        }
        
        $params = [
            'id'     => $id, 
            'nome'   => $nome, 
            'email'  => $email, 
            'nivel'  => $nivel, 
            'phone1' => $phone1, 
            'phone2' => $phone2, 
            'obs'    => $obs, 
            'status' => $status, 
            'login'  => $login
        ];

        if($senha){
            $params['senha'] = $senha;
        }
    
        $retorno = User::editUser($params);
        
        echo alerta($retorno);
        break;

    case 'usersDel':
        echo User::delUser($del_id);
        break;

    case 'editSenha':
        $params = [
            'id'    => $senha_id,
            'senha' => $editsenha
        ];

        echo User::editPass($params);
        break;
endswitch;