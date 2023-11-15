<?php

$fileToken = '../app/Jobs/insta_token.txt';
$current_token = file_get_contents($fileToken);
$fileImages = 'instaImages.json';
$arrImages  = [];
$fileVideos = 'instaVideos.json';
$arrVideos  = [];


if($_GET['action'] == 'refreshToken') {
    $result = '<h1>Erro ao gerar atualizar token</h1>';
    $url     = "https://graph.instagram.com/refresh_access_token";
    $arrData = ['grant_type' => 'ig_refresh_token', 'access_token' => $current_token];
    
    $content = json_decode(consulta($url, $arrData));

    if(isset($content->access_token)){
        file_put_contents($fileToken, $content->access_token);
        echo $content->access_token;
    } else {
        echo 'falta access_token';
        var_dump($content);
    }
} elseif($_GET['action'] == 'getMedia') {
    $result = '<h1>Erro ao gerar arquivos</h1>';
    $url     = "https://graph.instagram.com/me/media";
    $arrData = [
        'access_token' => $current_token,
        'fields' => 'media_url,media_type,caption,permalink'
    ];

    $content = json_decode(consulta($url, $arrData));

    if(is_array($content->data)){
        foreach($content->data as $data){
            if($data->media_type === 'VIDEO') {
                $data->caption = $data->caption ?: 'Embarque Ideal';
                $arrVideos[] = $data;
            }elseif($data->media_type === 'IMAGE') {
                $data->caption = $data->caption ?: 'Embarque Ideal';
                $arrImages[] = $data;
            }
        }
    
        $fileImages = fopen('../app/Jobs/' . $fileImages,'w');
        fwrite($fileImages, json_encode($arrImages));
        fclose($fileImages);
        
        $fileVideos = fopen('../app/Jobs/' . $fileVideos,'w');
        fwrite($fileVideos, json_encode($arrVideos));
        fclose($fileVideos);

        $result = '<h1>Lista baixada</h1>';
    }
    
    echo $result;
}

function consulta($url, $arrData)
{
    $querystring = http_build_query($arrData);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $url."?".$querystring);
    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
    $response = curl_exec($ch);
    
    curl_close($ch);

    return $response;
}