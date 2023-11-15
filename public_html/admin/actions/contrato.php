<?php
namespace app\Models;

require_once '../../../vendor/autoload.php';
require '../../../app/functions.php';

$ddOrcamento = Exec::readid('orcamentos', $id);
?>
<html>
<head>
    <style>
        @page {
            margin: 40px;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: "Open Sans", sans-serif;
        }
        .corpo {
            width: 640px;
            margin: auto;
        }
        h3 {
            text-align: center;
        }
        h4 {
            text-align: left;
        }
        p {
            text-align: justify;
        }
        table, td, th {
            border: 1px solid;
            text-align: center;
            padding: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table.semBordas, table.semBordas td, table.semBordas th {
            border: 0;
        }
        .esquerda tr td {
            text-align: left;
            padding-left: 10px;
        }
        .direita {
            text-align: right !important;
        }
        .assinatura {
            width: 50%;
            border-top: 1px solid #000;
            margin: 70px auto;
            text-align: center;
        }
        .cinza1 {
            background-color: #C0C0C0;
        }
        .cinza2 {
            background-color: #E4E4E4;
        }
        .lilas {
            color: #7842a1;
        }
        .verde {
            color: #52a745;
            font-weight: 600;
        }
        .bg-verde {
            background-color: #ecffec;
        }
        .break { page-break-before: always; }
        .br1 {
            border-right: 1px solid #C0C0C0 !important;
        }
        .bt1 {
            border-top: 1px solid #C0C0C0 !important;
        }
        .titulo {
            padding-top: 25px;
            padding-bottom: 25px;
        }
        th > h3, td > h3 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="corpo">
        <h3>CONTRATO DE PRESTAÇÃO DE SERVIÇOS EMBARQUE IDEAL</h3>
        <h4>1. DA PARTE CONTRATADA</h4>
        <p><b>Embarque Ideal - MEI</b>, Micro Empresário Individual, CNPJ nº 43.226.226/0001-18, sediada na Rua Barão do Rio Branco nº 95, Bloco B, Campinho, Guaratinguetá-SP CEP 12502-250.</p>
        
        <h4>1.1. CONTRATANTE</h4>
        <p><b>CLIENTE:</b> <?=$ddOrcamento['nome']?></p>

        <p>As partes acima mencionadas ajustam entre si, o que abaixo segue:</p>
        <h4>2. DO OBJETO</h4>
        <p>Realizar a Intermediação pela <b>CONTRATADA</b> dos serviços de turismo, conforme tabela a seguir.</p>
        <table>
            <tr class="cinza1">
                <td colspan="4"><b><?=$ddOrcamento['pass_int_qtd']?> Passagem(s) Aérea Internacional</b></td>
            </tr>
            <tr class="cinza2">
                <td>Origem</td>
                <td>Destino</td>
                <td>Data de Ida</td>
                <td>Data de Volta</td>
            </tr>
            <tr>
                <td><?=$ddOrcamento['pass_int_origem'] ?: '-'?></td>
                <td><?=$ddOrcamento['pass_int_destino'] ?: '-'?></td>
                <td><?=mysql_to_data($ddOrcamento['pass_int_data_ida'])?></td>
                <td><?=mysql_to_data($ddOrcamento['pass_int_data_volta'])?></td>
            </tr>
            <tr class="cinza2">
                <td>Bagagem de 10kg</td>
                <td>Bagagem de 23kg</td>
                <td>Seguro viagem</td>
                <td>Assessoria</td>
            </tr>
            <tr>
                <td><?=$ddOrcamento['pass_int_bag10k']?></td>
                <td><?=$ddOrcamento['pass_int_bag23k']?></td>
                <td> - </td>
                <td> - </td>
            </tr>
            <tr class="cinza1">
                <td colspan="4"><b><?=$ddOrcamento['pass_nac_qtd']?> Passagem(s) Aérea Nacional</b></td>
            </tr>
            <tr class="cinza2">
                <td>Origem</td>
                <td>Destino</td>
                <td>Data de Ida</td>
                <td>Data de Volta</td>
            </tr>
            <tr>
                <td><?=$ddOrcamento['pass_nac_origem'] ?: '-'?></td>
                <td><?=$ddOrcamento['pass_nac_destino'] ?: '-'?></td>
                <td><?=mysql_to_data($ddOrcamento['pass_nac_data_ida'])?></td>
                <td><?=mysql_to_data($ddOrcamento['pass_nac_data_volta'])?></td>
            </tr>
            <tr class="cinza2">
                <td>Bagagem de 10kg</td>
                <td>Bagagem de 23kg</td>
                <td>Seguro viagem</td>
                <td>Assessoria</td>
            </tr>
            <tr>
                <td><?=$ddOrcamento['pass_nac_bag10k']?></td>
                <td><?=$ddOrcamento['pass_nac_bag23k']?></td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr class="cinza1">
                <td colspan="4"><b><?=$ddOrcamento['pass_rod_qtd']?> Passagem(s) Rodoviária</b></td>
            </tr>
            <tr class="cinza2">
                <td>Origem</td>
                <td>Destino</td>
                <td>Data de Ida</td>
                <td>Data de Volta</td>
            </tr>
            <tr>
                <td><?=$ddOrcamento['pass_rod_origem'] ?: '-'?></td>
                <td><?=$ddOrcamento['pass_rod_destino'] ?: '-'?></td>
                <td><?=mysql_to_data($ddOrcamento['pass_rod_data_ida'])?></td>
                <td><?=mysql_to_data($ddOrcamento['pass_rod_data_volta'])?></td>
            </tr>
            <tr class="cinza2">
                <td colspan="2">Seguro viagem</td>
                <td colspan="2">Assessoria</td>
            </tr>
            <tr>
                <td colspan="2">-</td>
                <td colspan="2">-</td>
            </tr>
        </table>
        
        <h4>3. DO PREÇO</h4>
        <p>Os serviços contratados totalizam o valor de R$ <?=$ddOrcamento['total']?>, já inclusas as taxas de embarque, as taxas de serviços devida à <b>CONTRATADA</b>, o Seguro viagem e as bagagens descritos na tabela abaixo.</p>
        <table class="esquerda">
            <tr>
                <td>Passagem Aérea Internacional (<?=$ddOrcamento['pass_int_qtd']?>)</td>
                <td><?=$ddOrcamento['pass_int_preco']?></td>
            </tr>
            <tr>
                <td>Passagem Aérea Nacional (<?=$ddOrcamento['pass_nac_qtd']?>)</td>
                <td><?=$ddOrcamento['pass_nac_preco']?></td>
            </tr>
            <tr>
                <td>Passagem Rodoviária (<?=$ddOrcamento['pass_rod_qtd']?>)</td>
                <td><?=$ddOrcamento['pass_rod_preco'] ?: ' - '?></td>
            </tr>
            <tr>
                <td>Bagagem de 10kg</td>
                <td><?=$ddOrcamento['pass_int_bag10k'] > $ddOrcamento['pass_nac_bag10k'] ? $ddOrcamento['pass_int_bag10k'] : $ddOrcamento['pass_nac_bag10k']?></td>
            </tr>
            <tr>
                <td>Bagagem de 23kg</td>
                <td><?=$ddOrcamento['pass_int_bag23k'] > $ddOrcamento['pass_nac_bag23k'] ? $ddOrcamento['pass_int_bag23k'] : $ddOrcamento['pass_nac_bag23k']?></td>
            </tr>
            <tr>
                <td>Seguro viagem</td>
                <td><?=!$ddOrcamento['seguro'] ? 'Incluso' : ''?></td>
            </tr>
            <tr>
                <td>Assessoria</td>
                <td><?=!$ddOrcamento['assessoria'] ? 'Incluso' : ''?></td>
            </tr>
            <tr>
                <td>Taxas</td>
                <td><?=!$ddOrcamento['taxas'] ? 'Incluso' : ''?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?=$ddOrcamento['total']?></td>
            </tr>
        </table>
        <h4>3.1. FORMA DE PAGAMENTO</h4>
        <p>Pagamento no valor de <?=$ddOrcamento['total']?></p>

        <h4>3.1.1. DO PAGAMENTO PARCELADO</h4>
        <p>Em parceria com as instituições financeiras nos casos de pagamento em cartão de crédito, financiamento bancário e parcelamento via pix, o <b>CONTRATANTE</b> declara sua ciência de que lhe foram apresentadas as condições, inclusive no caso de cobrança de juros, os quais são de integral e exclusiva responsabilidade da instituição emissora do cartão de crédito ou ofertante do financiamento bancário, sendo o parcelamento via pix livre de cobrança de juros.</p>

        <h4>3.1.2. PAGAMENTO</h4>
        <p>Ficará o CONTRATANTE encarregado de enviar à CONTRATADA comprovante de transferência, PIX, ou depósito bancário, comprovando então que o convencionado fora devidamente cumprido.</p>
        
        <p class="break"></p>

        <h4>DADOS BANCÁRIOS</h4>
        <p>
            Banco: 290 PAGBANK<br>
            Agência: 0001<br>
            Conta Corrente: 41319801-1<br>
            CPF/CNPJ: 43.226.226/0001-18<br>
            Nome do Recebedor: Anderson Sato da Silva<br>
            CHAVE PIX: Telefone (12) 97850-1637<br><br>

            Banco: 341 ITAU<br>
            Agência: 8166<br>
            Conta Corrente: 99376-9<br>
            CPF/CNPJ: 43.226.226/0001-18<br>
            Nome do Recebedor: CD Tour (o banco ITAU ainda não atualizou o nome fantasia da agencia o mesmo tem prezo de 20 dias para ser atualizado)<br>
            CHAVE PIX: Telefone (12) 97405-0693
        </p>

        <h4>3.1.3. INFORMAÇÕES DE PAGAMENTO</h4>
        <p>Fica o CONTRATANTE ciente de que os dados bancários para pagamento são únicos e exclusivos os que constam acima, sendo certo que qualquer pagamento efetuado para terceiro e/ou com dados divergentes aos acima informados, é de inteira responsabilidade do CONTRATANTE.</p>

        <h4>3.2. CESSÃO DO CRÉDITO</h4>
        <p>Fica a CONTRATADA, desde logo, autorizada pelo CONTRATANTE a cederem o crédito decorrente da operação de parcelamento para instituições financeiras de sua confiança, as quais ficarão sub-rogadas plenamente no direito de receber o valor das parcelas, da forma que vier a ser definida no ato do parcelamento.</p>

        <h4>4. DA ALTERAÇÃO, RESCISÃO, NÃO COMPARECIMENTO E REEMBOLSO</h4>
        <p><b>4.1</b> A critério do CONTRATANTE, poderão ocorrer as hipóteses de “Alteração da Contratação Inicial”, “Rescisão” e “Não Comparecimento”, cujas definições e regras estão estabelecidas no quadro abaixo, levando em consideração que as alterações de voos e  datas de embarque podem modificar o valor da passagem que será acrescido além da multa disposta.</p>

        <table>
            <tr class="cinza1">
                <th></th>
                <th>Prazo de Início da Viagem</th>
                <th>Multa</th>
            </tr>
            <tr>
                <td>Alteração da Contratação Inicial</td>
                <td>Até 1 (um) dia do início</td>
                <td>15%</td>
            </tr>
            <tr>
                <td>Rescisão</td>
                <td>8 (oito) dias ou mais do início</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>Não Comparecimento</td>
                <td>Com reembolso</td>
                <td>30%</td>
            </tr>
        </table>

        <p><b>4.2.</b> Após iniciada a viagem, NÃO HAVERÁ a devolução de valores pagos caso o CONTRATANTE desista da continuidade do fluxo da prestação de serviços, em qualquer fase ou etapa após o seu início.</p>

        <h4>4.3. CONDIÇÕES COMERCIAIS ESPECÍFICAS DAS COMPANHIAS BRASILEIRAS “GOL”, “AZUL” E “LATAM”</h4>
        <p>EM SE TRATANDO DE TRANSPORTE AÉREO DAS COMPANHIAS “GOL”, “AZUL” E “LATAM”, AO INVÉS DA APLICAÇÃO DAS MULTAS DESCRITAS NO QUADRO DA CLÁUSULA 4.1, SERÃO PRATICADAS AS CONDIÇÕES DETERMINADAS PELA COMPANHIA AÉREA. SENDO ASSIM, O CONTRATANTE ESTÁ CIENTE QUE A <b>EMBARQUE IDEAL</b>, NA QUALIDADE DE INTERMEDIÁRIA DA CONTRATAÇÃO DO TRANSPORTE AÉREO, ASSUME A OBRIGAÇÃO DE REPASSE DAS TAXAS E MULTAS ÀS COMPANHIAS AÉREAS.</p>

        <p><b>4.4.</b> AS TAXAS E MULTAS COBRADAS PELAS COMPANHIAS AÉREAS ESTÃO APRESENTADAS NAS CONDIÇÕES GERAIS DO BILHETE NO SITE DE CADA COMPANHIA. NA FALTA SERÁ APLICADO O PERCENTUAL ACORDADO PELAS PARTES.</p>
        
        <h4>4.5. REEMBOLSO PELO CANCELAMENTO DOS SERVIÇOS CONTRATADOS, POR MOTIVOS DIVERSOS</h4>
        <p>O CANCELAMENTO DOS SERVIÇOS CONTRATADOS, SOLICITADO PELA CONTRATANTE, POR QUESTÕES DE PREFERENCIA DE UMA COMPANHIA AÉREA ESPECÍFICA, POR QUESTÕES DE MILHAGENS OU ALTERAÇÕES NA DATA E HORA DO VÔO, TERÃO OS SEUS VALORES REEMBOLSADOS EM UM PERÍODO MÁXIMO DE ATÉ 60 DIAS UTEIS.</p>

        <h4>5. DAS VIAGENS E PACOTES DE VIAGENS COM PREÇOS PROMOCIONAIS</h4>
        <p><b>5.1</b> AS VIAGENS E PACOTES DE VIAGENS AÉREOS COM PREÇOS PROMOCIONAIS (COM DESCONTO), PODERÃO SOFRER ATRASOS E/OU ALTERAÇÕES NOS DIAS E HORÁRIOS DE SEUS RESPECTIVOS VÔOS. PARA PREVENIR TAIS SITUAÇÕES, RECOMENDA-SE A AQUISIÇÃO DO BILHETE DE VIAGEM OU DO PACOTE DE VIAGEM COM PELO MENOS 30 DIAS DE ANTECEDÊNCIA.</p>

        <h4>6. CONDIÇÕES COMERCIAIS ESPECÍFICAS DE SEGURO VIAGEM</h4>
        
        

        <p>Nas Solicitações de Seguro Viagem quando não for cortesia, a rescisão ou alteração de tal, devem ser realizadas pelo CONTRATANTE no prazo máximo de 01 (um) dia de antecedência ao início da vigência da cobertura. APÓS ESSE PRAZO, CONFORME DETERMINADO PELO FORNECEDOR, O CONTRATANTE NÃO POSSUIRÁ DIREITO A QUALQUER REEMBOLSO DO PREÇO PAGO, BEM COMO NÃO SERÁ POSSÍVEL REALIZAR QUALQUER ALTERAÇÃO.</p>
    
        <p><b>6.1.</b> Respeitado o prazo máximo de 01 (um) dia de antecedência ao início da vigência do seguro, A ÚNICA ALTERAÇÃO PERMITIDA é para solicitação de aumento de cobertura e limites superiores aos originalmente contratados, conforme opções ofertadas pelo fornecedor, e mediante o pagamento da diferença de preço.</p>
    
        <p><b>6.2.</b> O <b>CONTRATANTE</b> PODE DESISTIR DA AQUISIÇÃO DO SEGURO VIAGEM EM ATÉ 7 (SETE) DIAS CORRIDOS CONTADOS DA EMISSÃO DO BILHETE OU DO EFETIVO PAGAMENTO DO PRÊMIO, O QUE OCORRER POR ÚLTIMO, COM O REEMBOLSO INTEGRAL DO VALOR PAGO. APÓS ESSE PRAZO, LIMITADO A 02 (DOIS) DIAS DO INÍCIO DA COBERTURA, CASO O <b>CONTRATANTE</b> VENHA A SOLICITAR A RESCISÃO DA CONTRATAÇÃO DO SEGURO, HAVERÁ A APLICAÇÃO DA MULTA DE 10% (DEZ POR CENTO) SOBRE O PREÇO TOTAL DO SEGURO VIAGEM ADQUIRIDO.</p>
    
        <p><b>6.3.</b> <b>ATENÇÃO</b>: O SEGURO VIAGEM NÃO É UM SEGURO SAÚDE! LEIA ATENTAMENTE AS CONDIÇÕES CONTRATUAIS, OBSERVANDO SEUS DIREITOS E OBRIGAÇÕES, BEM COMO O LIMITE DO CAPITAL SEGURADO CONTRATADO PARA CADA COBERTURA.</p>
    
        <p><b>6.3.1.</b> APÓLICES COM COBERTURA DE CANCELAMENTO TOTAL APENAS SÃO VÁLIDAS CASO A CONTRATAÇÃO DO SEGURO SEJA FEITA PELO CONTRATANTE ANTES OU NO MESMO DIA DA AQUISIÇÃO DO SERVIÇO DE VIAGEM SEGURADO, TAIS COMO BILHETE AÉREO E HOSPEDAGEM.</p>
    
        <p><b>6.3.2.</b> CONSTA EM ANEXO A APOLICE DO SEGURO VIAGEM.</p>
    
        <h4>7. PROTEÇÃO DE DADOS PESSOAIS</h4>
    
        <p><b>7.1.</b> Para os fins deste Contrato, são considerados:</p>
    
        <p><b>7.1.1.</b> <b>"Dados Pessoais"</b>: qualquer informação relativa a uma pessoa natural identificada ou identificável. A definição de Dados Pessoais contempla a definição de Dados Pessoais Sensíveis;</p>
    
        <p><b>7.1.2.</b> <b>"Dados Pessoais Sensíveis"</b>: qualquer informação relativa a origem racial ou étnica, convicção religiosa, opinião política, filiação a sindicato ou organização de caráter religioso, filosófico ou político, referente à saúde ou vida sexual, dados genéricos ou biométricos, de uma pessoa identificada ou identificável;</p>

        <p><b>7.1.3.</b> <b>"Tratamento"</b>: qualquer operação ou conjunto de operações efetuadas com Dados Pessoais ou com conjunto de Dados Pessoais, por meios automatizados ou não, tais como a coleta, produção, recepção, classificação, utilização, acesso, reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento, eliminação, avaliação ou controle da informação, modificação, comunicação, transferência, difusão ou extração;</p>

        <p><b>7.1.4.</b> <b>"LGPD"</b> significa a Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/2018);</p>

        <p><b>7.1.5.</b> <b>"Titular dos Dados"</b> significa a pessoa natural a quem se referem os Dados Pessoais que são objeto de Tratamento. Para fins deste Contrato, o Titular dos Dados é o indivíduo que irá usufruir dos Serviços prestados pela <b>EMBARQUE IDEAL</b>.</p>
    
        <p><b>7.2.</b> A <b>EMBARQUE IDEAL</b> se compromete, no exercício dos seus direitos e deveres, em razão do presente Contrato, a cumprir a legislação aplicável sobre privacidade e proteção de Dados Pessoais, inclusive, sempre e quando aplicáveis, a Constituição Federal, o Código de Defesa do Consumidor, o Código Civil, o Marco Civil da Internet, a LGPD, e demais normas setoriais ou gerais sobre o tema ("Legislação Aplicável"). </p>
    
        <p><b>7.3.</b> A <b>EMBARQUE IDEAL</b> se compromete a tratar os Dados Pessoais relacionados ao objeto do Contrato para fins da prestação dos Serviços, o que inclui, mas não se limita ao Tratamento de Dados para (i) intermediação com os terceiros envolvidos na prestação dos Serviços, tais como companhias aéreas, hotéis, dentre outros; (ii) processamento de pagamentos e repasse aos terceiros envolvidos na prestação dos Serviços e (iii) atendimento ao Titular dos Dados antes, durante e após a prestação dos Serviços. Além das finalidades relacionadas   diretamente   com    a    prestação    dos    Serviços, a EMBARQUE IDEAL poderá realizar atividades de Tratamento com base em seu legítimo interesse ou em outras hipóteses permitidas por lei, respeitados os direitos do Titular dos Dados e a Legislação Aplicável. Em relação aos Dados Pessoais tratados em razão do presente Contrato, a <b>EMBARQUE IDEAL</b> garante a possibilidade de exercício dos direitos garantidos nos termos da Legislação Aplicável, em especial o acesso ao s Dados Pessoais, a correção de Dados Pessoais incompletos, inexatos ou desatualizados; e a eliminação de certos Dados Pessoais nas hipóteses estabelecidas na Legislação Aplicável.</p>
    
        <p><b>7.4.</b> A EMBARQUE IDEAL se compromete a adotar medidas de segurança, técnicas e administrativas aptas a proteger os Dados Pessoais de acessos não autorizados e de situações acidentais ou ilícitas de destruição, perda, alteração, comunicação ou qualquer forma de tratamento inadequado ou ilícito.</p>
    
        <p><b>7.5.</b> O término do Tratamento dos Dados Pessoais ocorrerá quando a finalidade para qual o Dado Pessoal foi coletado for alcançada ou ocorrer o fim do período de Tratamento;<br>o Titular dos Dados solicitar a exclusão de seus dados nas hipóteses estabelecidas na Legislação Aplicável; ou houver uma determinação legal neste sentido. Nos casos de término de Tratamento de Dados Pessoais, ressalvadas as hipóteses estabelecidas pela Legislação Aplicável ou pelo presente Contrato, a <b>Embarque Ideal</b> se compromete a eliminar os Dados Pessoais do Titular dos Dados.</p>
    
        <p><b>7.6.</b> No caso de um Titular dos Dados ser uma criança, nos termos da Legislação Brasileira, o signatário deste Contrato declara que é um dos pais ou responsável legal pela criança e que, por meio deste, consente com o Tratamento de Dados Pessoais a ser realizado pela <b>EMBARQUE IDEAL</b> para as finalidades aqui mencionadas. As Partes reconhecem que a <b>EMBARQUE IDEAL</b> não poderá prestar os seus Serviços para o referido Titular dos Dados sem o consentimento em relação ao Tratamento de Dados Pessoais, ficando a prestação dos Serviços condicionada a tal autorização. Assim, a negativa do consentimento ou a revogação do consentimento antes do término do Contrato entre as Partes impossibilitará a <b>EMBARQUE IDEAL</b> de iniciar ou continuar a prestação dos Serviços para o referido Titular dos Dados.</p>
    
        <h4>8. FORÇA MAIOR</h4>
    
        <p><b>8.1.</b> O CONTRATANTE está ciente e de acordo que as obrigações assumidas nesse documento podem sofrer alterações, cancelamentos e remarcações em razão de Força Maior. Entende-se como força maior os acontecimentos relacionados a fatos independentes da vontade humana e que impeçam o cumprimento das obrigações acordadas entre as partes, como eventos naturais (terremotos, maremotos, incêndios, furacões, tempestades, avalanches, inundações, surtos, epidemias e pandemias e etc), greves, guerras, revoluções, embargos comerciais, resoluções da Organização Mundial do Comércio (OMC) impedindo a comercialização de um determinado tipo de mercadoria ou em caso de surtos, epidemias e pandemias devidamente confirmadas.</p>
    
        <p><b>8.1.1.</b> Em caso de força maior as contratadas garantem que cumprirão as determinações legais e buscarão soluções amigáveis e satisfatórias para ambas as partes.</p>
    
        <p class="break"></p>

        <h4>9. ACEITAÇÃO AOS TERMOS DO CONTRATO</h4>

        <p><b>9.1.</b> O <b>CONTRATANTE</b> declara conhecer e aceitar integralmente todas as cláusulas deste contrato e das condições gerais cujas definições foram expostas ao <b>CONTRATANTE</b> na Agência de Viagens, tendo lido e solicitado esclarecimento de todas suas dúvidas junto à <b>CONTRATADA</b>. O Anexo “Declaração de Porte de Documentos” e o Anexo “Apolice de seguro Viagem” tambem são parte integrante do contrato e devem ser lidos e assinado pelo <b>CONTRATANTE</b>.</p>
    
        <p>E por estarem assim, justas e contratadas, firmam as partes o presente instrumento em 02 vias de igual forma e teor.</p>

        <div class="assinatura">CONTRATANTE</div>
        <div class="assinatura">CONTRATADO</div>

        <h4>Telefones Úteis</h4>
        <p>Para informações, dúvidas sobre os serviços contratados ou cancelamentos e alterações em seu contrato (alterações e/ou exclusão em seus serviços), entre em contato com a <b>EMBARQUE IDEAL</b> no telefone +55 (12) 97850-1637.</p>

        <p class="break"></p>

        <h3>DECLARAÇÃO DE PORTE DE DOCUMENTOS</h3>
        <p>Eu declaro ter sido informado pela <b>AGÊNCIA DE VIAGENS</b> que para realizar a viagem é necessário que eu e meus acompanhantes apresentemos os seguintes documentos:</p>
        
        <h3>EMBARQUE VIAGENS NACIONAIS</h3>
        <p>RG original (ou cópia autenticada), em bom estado e que identifique com clareza o seu portador, com data de emissão inferior a dez anos.</p>
        <p>- <b>menores de dezesseis anos viajando acompanhado de pessoa sem vínculo de parentesco:</b> Necessária apresentação de autorização escrita, assinada por ambos os pais, pelo guardião ou tutor, com firma reconhecida por autenticidade ou semelhança. Em adição, é necessária a apresentação de RG original ou, na falta deste, da Certidão de Nascimento original. A Certidão de Nascimento só será aceita para menores de 12 anos, e acima dessa idade é obrigatória a apresentação do RG original.</p>
        <p>- <b>menores de dezesseis anos viajando desacompanhado:</b> Será necessária autorização judicial quando a criança viajar desacompanhada dos pais, do guardião ou do tutor, de parente ou de pessoa autorizada (pelos pais, guardião ou tutor) para fora da Comarca onde reside. Em adição, é necessária a apresentação de RG original ou, na falta deste, da Certidão de Nascimento original. A Certidão de Nascimento só é aceita para menores de 12 anos, e acima dessa idade é obrigatória a apresentação do RG original.</p>
    
        <h3>EMBARQUE VIAGENS INTERNACIONAIS</h3>
        <p>- <b>Destinos: Argentina, Chile, Paraguai, Uruguai, Bolívia, Peru, Colômbia e Equador:</b> Passaporte válido (com 6 meses de validade mínima na data de embarque) ou RG original e em bom estado e que identifique com clareza o seu portador, com data de emissão inferior a dez anos. <b>Para qualquer outro destino, que não sejam os acima informados:</b> Passaporte válido (com 6 meses de validade mínima na data de embarque), vistos consulares e exigências adicionais de	acordo com	o país visitado, inclusive para conexões e escalas. Recomendamos consulta ao consulado do país.</p>
        <p>- <b>Criança ou adolescente viajando em companhia somente de um dos pais:</b> O outro deverá autorizar por escrito, com firma reconhecida, por autenticidade ou semelhança, ou por escritura pública (Resolução CNJ 131/2011). Recomendamos que o passageiro porte 03 (três) vias originais dessa autorização.</p>
        <p>- <b>Criança ou adolescente viajando desacompanhado ou em companhia de terceiros maiores, capazes e de nacionalidade brasileira:</b> Deverá os pais, tutor ou guardião autorizarem a viagem (assinatura de ambos os pais) com firma reconhecida, por autenticidade ou semelhança, ou por escritura pública (Resolução CNJ 131/2011). Recomendamos que o passageiro porte 03 (três) vias originais dessa autorização. Caso o terceiro seja estrangeiro, é necessária autorização judicial.</p>
        <p>- <b>Seguro Viagem:</b> Em viagens para países da Europa é obrigatório que o cliente possua um seguro de viagem contratado (Tratado de Schengen). O cliente que não contratar o seguro poderá ser deportado do país visitado. A não aquisição de um Seguro de viagem, por opção do cliente, isenta a <b>CONTRATADA</b> de responsabilidade por qualquer fato que ocorrer durante a viagem, inclusive se não conseguir ingressar no destino contratado ou se for deportado.</p>
        <p>Recomendamos que o cliente adquira um seguro viagem, independentemente do destino contratado, pois em caso de necessidade médica durante a viagem a <b>CONTRATADA</b> não se responsabilizam pela prestação desses serviços.</p>
        <p>- <b>Febre Amarela:</b> Alguns países exigem certificado de vacinação contra febre amarela, esta vacina deve ser tomada em até 10 (dez) dias antes do embarque e somente serão aceitos os certificados internacionais de vacinação. Favor consultar diretamente o consulado do país a fim de verificar esta e outras eventuais exigências.</p>
        <p>- <b>Tríplice Viral:</b> O Ministério da Saúde, seguindo orientação da Organização Pan- Americana da Saúde (OPA), recomenda que viajantes para o exterior estejam vacinados contra sarampo, caxumba e rubéola. Viajantes não vacinados devem receber a vacina <b>pelo menos 15 dias antes da partida.</b></p>
    
        <h4>*Atenção:</h4>
        <p><b>1.</b> No caso de um dos pais ser falecido, há a necessidade de apresentação da Certidão de Óbito no momento do embarque;</p>
        <p><b>2.</b> Vínculo de Parentesco. Apenas são considerados parentes o pai, a mãe, o irmão, a irmã, os avós, os bisavós, os tios (irmão ou irmã de um dos pais do menor), desde que sejam maiores de idade e que comprovem, através de certidões de nascimento, o parentesco;</p>
        <p><b>3.</b> O novo passaporte brasileiro (de cor azul) não registra a filiação do passageiro, dessa maneira, deve-se apresentar o RG original e em bom estado e que identifique com clareza o seu portador junto com o passaporte;</p>
        <p><b>4.</b> Hospedagem. Menores de 18 anos necessitam estar acompanhados dos pais ou de seu responsável (guardião ou tutor ). Caso um dos pais estiver ausente, recomendamos que o cônjuge ausente autorize a hospedagem. Quando o menor for se hospedar desacompanhado dos pais ou responsável, é necessário que eles autorizem essa hospedagem;</p>
        <p><b>5.</b> A OBTENÇÃO DOS VISTOS É DE RESPONSABILIDADE EXCLUSIVA DOS PASSAGEIROS, BEM COMO A CONSULTA JUNTO AO CONSULADO DE CADA PAÍS A SER VISITADO ( INCLUSIVE PARA CONEXÕES E ESCALAS) QUANTO A EXIGÊNCIAS ADICIONAIS, COMO, POR EXEMPLO, A NECESSIDADE DE AUTORIZAÇÃO DOS PAIS TRADUZIDA PARA O INGLÊS OU OUTRA LÍNGUA, BEM COMO SEU RECONHECIMENTO JUNTO AO ÓRGÃO COMPETENTE DO PAÍS; </p>
        <p><b>6.</b> As autorizações aqui mencionadas devem estar acompanhadas de fotocópia autenticada do RG de quem autorizou; </p>
        <p><b>7.</b> Sempre que houver necessidade de obter autorização de viagem, recomenda-se que o interessado procure com antecedência o Juízo da Infância e da Juventude local, a fim de confirmar se a documentação necessária está adequada, evitando-se contratempos de última hora. A falta de qualquer um dos documentos obrigatórios acima mencionados, seja no embarque ou em qualquer outra etapa da viagem, é de única e exclusiva responsabilidade do(s) passageiro(s), nada podendo ser reclamado ou exigido da <b>CONTRATADA</b>, inclusive em casos de deportação ou por ser impedido de ingressar no destino contratado. </p>
        <p>Declaro que eu e meus acompanhantes fomos informados pela <b>AGÊNCIA DE VIAGENS</b> que toda e qualquer situação decorrente de documentação rejeitada, impedimentos de fronteiras e ações dos órgãos de imigração nos aeroportos, portos e postos de fronteira, para os roteiros nacionais, internacionais e marítimos, são de minha total responsabilidade, eximindo a <b>CONTRATADA</b>, de todo e qualquer direito, que eventualmente pudesse ter, incluindo danos materiais e morais. Tenho conhecimento de que se houver deportação, tal ato é de soberania do país a ser visitado, não podendo a <b>CONTRATADA</b> interferir nas decisões locais de imigração.</p>

        <p class="break"></p>
        
        <table class="semBordas">
            <thead>
              <tr>
                <th colspan="3">SEGURO VIAGEM</th>
              </tr>
            </thead>
            <tbody>
              <tr class="cinza2">
                <td class="br1">MTA 30 Mundo 10 Mil Covid</td>
                <td class="br1">MTA 60 Mundo 10 Mil Covid</td>
                <td>IL60 Mundo com Covid 1</td>
              </tr>
              <tr>
                <td class="br1">Too</td>
                <td class="br1">Too</td>
                <td>Aig</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">My Travel Assist</td>
                <td class="br1">My Travel Assist</td>
                <td>Intermac AIG</td>
              </tr>
              <tr>
                <td colspan="3">Idade Permitida</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">0 a 64</td>
                <td class="br1">0 a 64</td>
                <td>0 a 64</td>
              </tr>
            </tbody>
        </table>
        <br><br>

        <table class="semBordas">
            <thead>
              <tr class="cinza2">
                <th colspan="3" class="titulo"><h3>Coberturas</h3></th>
              </tr>
              <tr class="cinza2">
                <th colspan="3" class="lilas"><h3>Assistência Médica</h3></th>
              </tr>
            </thead>
            <tbody>
              <tr class="cinza2 bt1">
                <td colspan="3">Despesas médicas e hospitalares em viagem</td>
              </tr>
              <tr class="bg-verde">
                <td class="br1">US$ 30.000</td>
                <td class="br1 verde">US$ 60.000</td>
                <td class="verde">US$ 60.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Assistencia médica enfermidade</td>
              </tr>
              <tr>
                <td class="br1">US$ 30.000</td>
                <td class="br1 verde">US$ 60.000</td>
                <td class="verde">US$ 60.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Despesas odontológicas</td>
              </tr>
              <tr>
                <td class="br1">US$ 200</td>
                <td class="br1 verde">US$ 600</td>
                <td>US$ 500</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Pre existencia</td>
              </tr>
              <tr>
                <td class="br1">sim</td>
                <td class="br1">sim</td>
                <td class="verde">US$ 60.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Despesas farmacêuticas</td>
              </tr>
              <tr>
                <td class="br1">US$ 200</td>
                <td class="br1 verde">US$ 600</td>
                <td>US$ 400</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Esporte</td>
              </tr>
              <tr>
                <td class="br1">sim</td>
                <td class="br1">sim</td>
                <td class="verde">US$ 60.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Gravidez</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td class="verde">US$ 60.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Traslado médico</td>
              </tr>
              <tr>
                <td class="br1">US$ 20.000</td>
                <td class="br1">US$ 30.000</td>
                <td class="verde">US$ 40.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Prorrogação de estadia</td>
              </tr>
              <tr>
                <td class="br1">US$ 400</td>
                <td class="br1 verde">US$ 600</td>
                <td>US$ 500</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Fisioterapia</td>
              </tr>
              <tr>
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Traslado em caso de acidente ou doença</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td>não</td>
              </tr>
            </tbody>
        </table>

        <table class="semBordas">
            <thead>
              <tr class="cinza2">
                <th colspan="3" class="lilas"><br><h3>Seguro</h3></th>
              </tr>
            </thead>
            <tbody>
              <tr class="bt1">
                <td colspan="3">Invalidez permanente total ou parcial por acidente em viagem</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">R$ 10.000</td>
                <td class="br1 verde">R$ 20.000</td>
                <td>US$ 15.000</td>
              </tr>
              <tr class="bt1">
                <td colspan="3">Morte acidental em viagem</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">R$ 10.000</td>
                <td class="br1 verde">R$ 20.000</td>
                <td>US$ 15.000</td>
              </tr>
              <tr>
                <td colspan="3">Roubo ou furto qualificado de bens eletrônicos</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr>
                <td colspan="3">Franquia a pagar para usar o seguro</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr>
                <td colspan="3">Retorno antec. do acompanhantepor roubo em domicílio ou comercial</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr>
                <td colspan="3"><h3 class="lilas">Assistência Especial</h3></td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Assistência Juridica</td>
              </tr>
              <tr>
                <td class="br1">US$ 1.000</td>
                <td class="br1">US$ 1.000</td>
                <td class="verde">US$ 1.200</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Hospedagem de acompanhantede hotel para familiar em caso de internação</td>
              </tr>
              <tr>
                <td class="br1">US$ 400</td>
                <td class="br1">US$ 500</td>
                <td class="verde">US$ 1.500</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Acompanhamento menores</td>
              </tr>
              <tr>
                <td class="br1">sim</td>
                <td class="br1">sim</td>
                <td class="verde">US$ 1.500</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Perda documento</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td class="verde">sim</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Mensagem urgente</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td class="verde">sim</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Translado familiar</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td>não</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Transporte aereo familiar</td>
              </tr>
              <tr>
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Acompanhamento idoso</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td>não</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Serviço de reserva de hotel para familiar em caso de internação</td>
              </tr>
              <tr>
                <td class="br1">sim</td>
                <td class="br1">sim</td>
                <td class="verde">US$ 500</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Concierge</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td class="verde">sim</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Translado executivo</td>
              </tr>
              <tr>
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
            </tbody>
        </table>

        <table class="semBordas">
            <thead>
              <tr class="cinza2">
                <th colspan="3" class="lilas"><br><h3>Bagagem</h3></th>
              </tr>
            </thead>
            <tbody>
              <tr class="bt1">
                <td colspan="3">Atraso de bagagem (superior 8h)</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">US$ 100</td>
                <td class="br1 verde">US$ 300</td>
                <td>US$ 200</td>
              </tr>
              <tr class="bt1">
                <td colspan="3">Perda de bagagem em viagem</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">US$ 400</td>
                <td class="br1 verde">US$ 1.200</td>
                <td>US$ 750</td>
              </tr>
              <tr>
                <td colspan="3">Localização bagagens</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td class="verde">sim</td>
              </tr>
              <tr>
                <td colspan="3">Estrago bagagens</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr>
                <td colspan="3"><h3 class="lilas">Cancelamento</h3></td>
              </tr>
              <tr class="cinza2 bt1">
                <td colspan="3">Atraso de voo (superior 8h)</td>
              </tr>
              <tr>
                <td class="br1">US$ 100</td>
                <td class="br1 verde">US$ 300</td>
                <td>US$ 200</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Cancelamento de viagem</td>
              </tr>
              <tr>
                <td class="br1">US$ 500</td>
                <td class="br1 verde">US$ 1.000</td>
                <td class="verde">US$ 1.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Interrupção de viagem</td>
              </tr>
              <tr>
                <td class="br1">US$ 200</td>
                <td class="br1 verde">US$ 700</td>
                <td>US$ 500</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Retorno do segurado</td>
              </tr>
              <tr>
                <td class="br1 verde">sim</td>
                <td class="br1 verde">sim</td>
                <td class="verde">sim</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3"><br><h3 class="lilas">Financeiro</h3></td>
              </tr>
              <tr class="bt1">
                <td colspan="3">Fianças e despesas legais</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">US$ 2.500</td>
                <td class="br1 verde">US$ 2.500</td>
                <td>não</td>
              </tr>
              <tr>
                <td colspan="3">Fianças e despesas legais</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">não</td>
                <td class="br1">não</td>
                <td class="verde">US$ 2.500</td>
              </tr>
              <tr>
                <td colspan="3">Capitalização</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr>
                <td colspan="3"><br><h3 class="lilas">Repatriação</h3></td>
              </tr>
              <tr class="cinza2 bt1">
                <td colspan="3">Regresso sanitário</td>
              </tr>
              <tr>
                <td class="br1">US$ 20.000</td>
                <td class="br1">US$ 30.000</td>
                <td class="verde">US$ 40.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Traslado de corpo</td>
              </tr>
              <tr>
                <td class="br1">US$ 20.000</td>
                <td class="br1">US$ 20.000</td>
                <td class="verde">US$ 40.000</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Retorno antec. do acompanhante</td>
              </tr>
              <tr>
                <td class="br1">US$ 1.500</td>
                <td class="br1 verde">US$ 2.000</td>
                <td>US$ 1.500</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Retorno do segurado</td>
              </tr>
              <tr>
                <td class="br1">US$ 1.500</td>
                <td class="br1 verde">US$ 2.000</td>
                <td>não</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3">Repatriação administrativa</td>
              </tr>
              <tr>
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr class="cinza2">
                <td colspan="3"><br><h3 class="lilas">Adicionais</h3></td>
              </tr>
              <tr class="bt1">
                <td colspan="3">Adicionais Despesas médicas e hospitalares por Covid em viagem</td>
              </tr>
              <tr class="cinza2">
                <td class="br1">US$ 10.000</td>
                <td class="br1">US$ 10.000</td>
                <td class="verde">US$ 60.000</td>
              </tr>
              <tr>
                <td colspan="3">Traslado de corpo</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
              <tr>
                <td colspan="3">Indenização por Hospitalização COVID-19 (Carência 2 Dias / Máximo 15 dias)</td>
              </tr>
              <tr class="cinza2">
                <td class="br1 verde">não</td>
                <td class="br1 verde">não</td>
                <td class="verde">não</td>
              </tr>
            </tbody>
        </table>
    </div>
</body>
</html>