<?php
namespace app\Models;
require_once $_SERVER['DOCUMENT_ROOT'].'/config/define.php';
/**
 * @author Julio Lobo
 */

class User {

    public static function addUser(array $data): string
    { 
        $fields = array('nome', 'email', 'nivel', 'phone1', 'phone2', 'obs', 'status');
        $params = array($data['nome'], $data['email'], $data['nivel'], $data['phone1'], $data['phone2'], $data['obs'], $data['status']);

        $usuarioExiste = Exec::list('users', "WHERE login = '{$data['login']}'");
        $emailExiste   = Exec::list('users', "WHERE email = '{$data['email']}'");

        if(!$usuarioExiste && !$emailExiste){
            if($data['senha']){
                array_push($fields, "login");
                array_push($params, $data['login']);
                $pass = password_hash($data['senha'], PASSWORD_DEFAULT);
                array_push($fields, "senha");
                array_push($params, $pass);
            }
            
            $lastId = Exec::create('users',$fields,$params);

            if($lastId){
                Exec::gravaLog('addUser', 'users', $lastId, "Cadastrou o Usuário <b>{$data['nome']}</b>", $_SESSION[SESSAO]['usuario']['id']);
                $retorno = 'addOk';
            }else{
                $retorno = 'addErro';
            }
        }elseif($usuarioExiste){
            $retorno = 'usuarioExiste';
        }elseif($emailExiste){
            $retorno = 'emailExiste';
        }

        return $retorno;
    }

    public static function editUser(array $data): string
    { 
        $fields = array('nome', 'email', 'nivel', 'phone1', 'phone2', 'obs', 'status', 'login');
        $params = array($data['nome'], $data['email'], $data['nivel'], $data['phone1'], $data['phone2'], $data['obs'], $data['status'], $data['login']);
        
        if(isset($data['senha'])){
            $pass = password_hash($data['senha'], PASSWORD_DEFAULT);
            array_push($fields, "senha");
            array_push($params, $pass);
        }

        $where = "id = ".$data['id'];

        $ddAntigos = Exec::readid('users', $data['id']);
        $resultado = Exec::update('users', $fields, $params, $where);

        if($resultado){
            foreach($fields as $idCampo => $nomeCampo){
                if($ddAntigos[$nomeCampo] != $params[$idCampo]){
                    Exec::gravaLog('editUser', 'users', $data['id'], "Editou o campo <b>{$nomeCampo}</b> do usuário <b>{$data['nome']}</b> de <b>{$ddAntigos[$nomeCampo]}</b> para <b>{$params[$idCampo]}</b>.", $_SESSION[SESSAO]['usuario']['id']);
                }
            }
            $retorno = 'editOk';
        }else{
            $retorno = 'editErro';
        }

        return $retorno;
    }

    public static function delUser(int $id): string
    {
        $delUser = Exec::readid('users', $id);

        // Exec::delete('users', $del_id);
        // Exec::gravaLog($action, 'users', $del_id, "Excluiu o Usuário <b>{$del_id}</b>", $_SESSION[SESSAO]['usuario']['id']);
        // echo 'delUsuario';

        $retorno = Exec::desactivate('users', $id);
        Exec::gravaLog('delUser', 'users', $id, "Desativou o Usuário <b>{$delUser['nome']}</b>", $_SESSION[SESSAO]['usuario']['id']);
        return $retorno;
    }

    public static function editPass(array $data): string
    {
        $user = Exec::readid('users', $data['id']);
        $pass = password_hash($data['senha'], PASSWORD_DEFAULT);

        $where = "id = ".$data['id'];
        $camposSenha = ["senha"];
        $paramsSenha = [$pass];
        Exec::update('users', $camposSenha, $paramsSenha, $where);
        
        $texto = $data['id'] != $_SESSION[SESSAO]['usuario']['id'] ? "Editou a Senha do Usuário <b>{$user['nome']}</b>" : "Editou a própria Senha";
        Exec::gravaLog('editPass', 'users', $data['id'], $texto, $_SESSION[SESSAO]['usuario']['id']);

        return 'editPass';
    }
}