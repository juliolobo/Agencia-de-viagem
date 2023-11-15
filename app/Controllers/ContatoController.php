<?php

namespace app\Models;
require_once '../../vendor/autoload.php';

$bannerTop = innerBanner();

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
        }elseif($_POST['email'] == '' || strlen($_POST['email']) < 3){
            $retorno['msg']  = 'O <b>email</b> precisa ter no mínimo 3 caracteres!';
        }elseif($_POST['tel'] == '' || strlen($_POST['tel']) < 3){
            $retorno['msg']  = 'O <b>telefone</b> precisa ter no mínimo 3 caracteres!';
        }
    
        if(conta_e_valida($retorno)){
            $retorno['tipo'] = 'error';
        }else{
            $fields = [
                'nome',
                'email',
                'tel',
                'mensagem',
            ];
    
            $params = [
                $_POST['nome'], 
                $_POST['email'],
                $_POST['tel'], 
                $_POST['mensagem']
            ];
    
            if(Exec::create('contato', $fields, $params)){
                $retorno = [
                    'msg'  => 'Mensagem enviada com sucesso!',
                    'tipo' => 'success'
                ];

                $nome     = addslashes($_POST['nome']);
                $email    = addslashes($_POST['email']);
                $telefone = addslashes($_POST['tel']);
                $mensagem = addslashes($_POST['mensagem']);
            
                $mail['to'] = "contato@embarqueideal.com";
                $mail['subject'] = "Contato pelo site";
                $mail['body'] = "Nome: ".$nome. "\r\n".
                        "Email: ".$email. "\r\n".
                        "Telefone: ".$telefone. "\r\n".
                        "Mensagem: ".$mensagem;
                $mail['header'] = "From:{$mail['to']}"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();
            
                // echoArray($mail);
                mail($mail['to'], $mail['subject'], $mail['body'], $mail['header']);
                // if(mail($to,$subject,$body,$header)){
                //     echo "Email enviado com Sucesso!";
                // }else{
                //     echo "O email não pode ser enviado";
                // }
                // die();
            }
        }
    }
    echo json_encode($retorno);
    die();
}

$title    = 'Fale Conosco';

$view = 'contato.php';