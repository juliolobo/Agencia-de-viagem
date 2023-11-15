<?php
namespace app\Models;
// require_once '../../config/define.php';

/**
 * @author Julio Lobo
 */

class Exec {
    public static function login($usuario, $senha){
        $ddAdm = self::readid('users', 99);
        $sql = 'SELECT * FROM users WHERE login = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $usuario);
        $stmt->execute();
        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($senha, $resultado['senha'])):
                if($resultado['nivel'] >= 1):
                    if($resultado['status'] == 1):
                        //Tudo OK Loga o usuário
                        return $resultado;
                    else:
                        //Caso o usuário esteja desativado
                        $erro = [
                            "status" => 0,
                            "coderro" => 1,
                        ];
                        return $erro;
                    endif;
                else:
                    //Caso o usuário não tenha nível acima de 5
                    $erro = [
                        "status" => 0,
                        "coderro" => 2,
                    ];
                    return $erro;
                endif;
            //Verifica a senha do Admin
            elseif(password_verify($senha, $ddAdm['senha'])):
                if($resultado['nivel'] >= 5):
                    if($resultado['status'] == 1):
                        //Tudo OK Loga o usuário
                        return $resultado;
                    else:
                        //Caso o usuário esteja desativado
                        $erro = [
                            "status" => 0,
                            "coderro" => 1,
                        ];
                        return $erro;
                    endif;
                else:
                    //Caso o usuário não tenha nível acima de 5
                    $erro = [
                        "status" => 0,
                        "coderro" => 2,
                    ];
                    return $erro;
                endif;
            else:
                //Caso o usuário esteja correto mas a senha não
                $erro = [
                    "status" => 0,
                    "coderro" => 3,
                ];
                return $erro;
            endif;         
        else:
            //Caso o usuário não seja encontrado
            $erro = [
                "status" => 0,
                "coderro" => 4,
            ];
            return $erro;
        endif;
    }

    public static function create($tabela, $fields, $params) {
        $campos="";
        for ($i = 0; $i < count($fields); $i++) {
            $campos.=", ".$fields[$i];
        }
        $campos = substr($campos,2);

        $parame="";
        for ($i = 0; $i < count($params); $i++) {
            $parame.="', '".$params[$i];
        }
        $parame = substr($parame,2);
        $parame = $parame."'";

        $sql = "INSERT INTO $tabela ($campos) VALUES ($parame)";
        // return $sql;die;
        
        $stmt = Conexao::getConn()->prepare($sql);
        $lastId = $stmt->execute() ? Conexao::getConn()->lastInsertId() : false;
        return $lastId;
    }

    public static function readid($tabela, $id) {
        $sql = "SELECT * FROM $tabela WHERE id = $id";

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        return $stmt->rowCount() > 0 ? $stmt->fetch(\PDO::FETCH_ASSOC) : false;
    }

    public static function select($tabela, $fields = "*", $add = ""){
        if(strlen($add)>0) $add = " ".$add;
        $sql = 'SELECT '.$fields.' FROM '.$tabela.''.$add.'';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() == 1):
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        elseif($stmt->rowCount() > 1):
            foreach($stmt->fetchAll(\PDO::FETCH_ASSOC) as $rg):
                $resultado[$rg['id']] = $rg;
            endforeach;
            return $resultado;
        else:
            return [];
        endif;
    }
    
    public static function getArrList($tabela, $campo = "", $filtro = "", $idCampo = "id", $retorno='unico') {
        $sql = "SELECT " . $idCampo . "," . $campo . "
                FROM   " . $tabela . "
                " . $filtro;
        // echoArray($sql);exit;
        $stmt = Conexao::getConn()->prepare($sql);        
        $stmt->execute();
        $rs = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $arrLista = array();
        if($retorno=="unico"){
            foreach($rs as $keyCampo => $ddCampo) {
                $arrRetorno[$ddCampo[$idCampo]] = $ddCampo;
            }
        }else{
            foreach($rs as $keyCampo => $ddCampo) {
                $arrRetorno[$idCampo][] = $ddCampo;
            }
        }
        
        return (count($arrRetorno) > 0) ? $arrRetorno : false;
    }
    
    public static function getConfigs() {
        $tabelaConfig = 'configuracoes';
        $sql = "SELECT chave, valor FROM   " . $tabelaConfig;
        $stmt = Conexao::getConn()->prepare($sql);        
        $stmt->execute();
        $rs = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $arrLista = array();
        
        foreach($rs as $idCampo => $campo) {
            $arrLista['chave'][] = $campo['chave'];
            $arrLista['valor'][] = $campo['valor'];
        }

        foreach($arrLista['chave'] as $idLista => $ddLista){
            $arrRetorno[$ddLista] = $arrLista['valor'][$idLista];
        }
        
        return (count($arrRetorno) > 0) ? $arrRetorno : false;
    }
    
    public static function getPermissoes($idPermissao) {
        $tabelaConfig = 'permissoes';
        $sql = "SELECT * FROM   " . $tabelaConfig . " WHERE id_niveis = ".$idPermissao;

        $stmt = Conexao::getConn()->prepare($sql);        
        $stmt->execute();
        $rs = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $arrLista = array();

        foreach($rs as $idCampo => $ddCampo) {
            $arrLista[$ddCampo['id_menu']] = $ddCampo;
        }
        
        return (count($arrLista) > 0) ? $arrLista : false;
    }

    public static function list($tabela, $filtro = "", $campos = "*", $campoId = "") {
        $sql = "SELECT " . $campos . " 
                FROM   " . $tabela . "
                " . $filtro;
        // echo $sql;
        // die();
        $stmt = Conexao::getConn()->prepare($sql);        
        $stmt->execute();

        $arrLista = array();
        while ($rg = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
            foreach ($rg as $campo => $valor) {
                if($campoId){
                    $arrLista[$valor[$campoId]] = $valor;
                }else{
                    $arrLista[$valor['id']] = $valor;
                }
            }
        }
        return (count($arrLista) > 0) ? $arrLista : false;
    }
    
    public static function update($tabela, $fields, $params=null, $where=null) {
        $retorno = false;
        $fields_T="";
        for($i=0; $i<count($fields); $i++) $fields_T.=", $fields[$i] = '$params[$i]'";
        $fields_T = substr($fields_T,2);

        $sql = "UPDATE $tabela SET $fields_T";
        if(isset($where)) $sql .= " WHERE $where";
        //echo $sql;
        
        $stmt = Conexao::getConn()->prepare($sql);

        if($stmt->execute()){
            $retorno = 'Atualizado com sucesso!';
        }

        return $retorno ?: false;
    }

    public static function count($tabela, $fields="*", $add="") {
        if(strlen($add)>0) $add = " ".$add;
        $sql = "SELECT $fields FROM $tabela$add";
        // echo $sql;

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        $resultado = $stmt->rowCount();
        return $resultado;
    }

    public static function delete($tabela, $id) {
        $sql = "DELETE FROM $tabela WHERE id = $id";
        $stmt = Conexao::getConn()->prepare($sql);
        return $stmt->execute() ? 'delOk' : 'delError';
    }

    public static function clear($tabela, $filtro = '') {
        $sql = "DELETE FROM $tabela $filtro";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
    }

    public static function desactivate($tabela, $id) {
        $sql = "UPDATE $tabela SET status = 0 WHERE id = $id";
        $stmt = Conexao::getConn()->prepare($sql);
        //echo $sql;die;
        return $stmt->execute() ? 'delOk' : 'delError';
    }

    public static function lastId($tabela){
        $sql = "SELECT MAX(id) FROM $tabela";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        $id = $stmt->fetch();
        return $id[0];
    }

    public static function calcPercent($base, $valor){
        $retorno = $valor / $base * 100;
        return $retorno;
    }

    public static function gravaLog($evento, $ref, $refId, $texto, $usuarioId){
        $sql = "INSERT INTO logs (ref, ref_id, usuario_id, evento, texto)
                VALUES (
                    '{$ref}', 
                    '{$refId}', 
                    '{$usuarioId}',
                    '{$evento}',
                    '{$texto}'
                    )";

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        $lastId = Conexao::getConn()->lastInsertId();
        return $lastId;
    }
}