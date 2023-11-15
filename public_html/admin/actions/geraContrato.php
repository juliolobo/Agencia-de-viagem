<?php
namespace app\Models;

use Dompdf\Dompdf;

require '../../../vendor/autoload.php';

$dompdf = new Dompdf();

global $id;
$id = $_GET['id'];

ob_start();
require "./contrato.php";
$dompdf->loadHtml(ob_get_clean());

$dompdf->setPaper("A4");

$dompdf->render();
// $dompdf->stream("teste.pdf", ["Attachment" => false]);

$output = $dompdf->output();
$ddFile['name'] = 'contrato-'.$id.'-'.date('Ymds').'.pdf';
file_put_contents('../../arquivos/'.$ddFile['name'], $output);


$ddFile['size'] = filesize('../../arquivos/'.$ddFile['name']) / 1024;
$ddFile['uuid'] = guidv4();

$fileId = Exec::create('orcamento_arquivos', ['nome', 'uuid', 'orcamento_id', 'tipo', 'tamanho'], [$ddFile['name'], $ddFile['uuid'], $id, 'pdf', $ddFile['size']]);
Exec::gravaLog('addArquivo', 'orcamento_arquivos', $fileId, "Anexou o arquivo <b>{$ddFile['name']}</b>", $_SESSION[SESSAO]['usuario']['id']);

$retorno = [
    'msg' => 'Arquivo enviado com sucesso!',
    'tipo' => 'success',
    'linha' => '<tr id="tr'.$fileId.'">
                    <td>
                        <i class="fa-solid fa-file-pdf"></i> 
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
    'link' => URLRAIZ.'arquivos/'.$ddFile['name']
];
echo json_encode($retorno);