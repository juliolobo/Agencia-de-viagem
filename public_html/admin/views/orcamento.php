    <section class="content">
      <form id='addEdit' method="POST" action="">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Dados do Orçamento <?=$teste?></h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="nome">Nome*</label>
                  <input type="text" name="nome" id="nome" class="form-control" value="<?=$ddOrcamento['nome']?>" required>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="origem">Origem*</label>
                          <input type="text" id="origem" class="form-control" value="<?=$ddOrcamento['origem']?>" disabled>
                          <input type="hidden" name="origem" value="<?=$ddOrcamento['origem']?>">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="destino">Destino*</label>
                          <input type="text" id="destino" class="form-control" value="<?=$ddOrcamento['destino']?>" disabled>
                          <input type="hidden" name="destino" value="<?=$ddOrcamento['destino']?>">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-5">
                      <div class="form-group">
                          <label for="dataIda">Data de ida*</label>
                          <input type="text" id="dataIda" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['data_ida'])?>" disabled>
                          <input type="hidden" name="dataIda" value="<?=$ddOrcamento['data_ida']?>">
                      </div>
                  </div>
                  <div class="col-5">
                      <div class="form-group">
                          <label for="dataVolta">Data de volta</label>
                          <input type="text" id="dataVolta" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['data_volta'])?>" disabled>
                          <input type="hidden" name="dataVolta" value="<?=$ddOrcamento['data_volta']?>">
                      </div>
                  </div>
                  <div class="col-2">
                      <div class="form-group">
                          <label for="passageiros">Passageiros*</label>
                          <input type="number" id="passageiros" class="form-control" value="<?=$ddOrcamento['passageiros']?>" disabled>
                          <input type="hidden" name="passageiros" value="<?=$ddOrcamento['passageiros']?>">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                      <div class="form-group">
                          <label for="tel">Telefone</label>
                          <input type="text" name="tel" id="tel" class="form-control" value="<?=$ddOrcamento['tel']?>">
                      </div>
                  </div>
                  <div class="col-5">
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" id="email" class="form-control" value="<?=$ddOrcamento['email']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="hora">Hora</label>
                          <input type="text" id="hora" class="form-control" value="<?=$ddOrcamento['hora']?>" disabled>
                          <input type="hidden" name="hora" value="<?=$ddOrcamento['hora']?>">
                      </div>
                  </div>
                </div>

                <hr>
                
                <h4><i class="fa-solid fa-plane-up"></i> Viagem Aérea Internacional</h4>
                <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_origem">Origem</label>
                          <input type="text" name="pass_int_origem" id="pass_int_origem" class="form-control" value="<?=$ddOrcamento['pass_int_origem']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_destino">Destino</label>
                          <input type="text" name="pass_int_destino" id="pass_int_destino" class="form-control" value="<?=$ddOrcamento['pass_int_destino']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_data_ida">Data de ida</label>
                          <input type="text" name="pass_int_data_ida" id="pass_int_data_ida" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['pass_int_data_ida'])?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_data_volta">Data de volta</label>
                          <input type="text" name="pass_int_data_volta" id="pass_int_data_volta" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['pass_int_data_volta'])?>">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_qtd">Passagens</label>
                          <input type="number" name="pass_int_qtd" id="pass_int_qtd" class="form-control" value="<?=$ddOrcamento['pass_int_qtd']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_bag10k">Bagagem 10kg</label>
                          <input type="number" name="pass_int_bag10k" id="pass_int_bag10k" class="form-control" value="<?=$ddOrcamento['pass_int_bag10k']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_bag23k">Bagagem 23kg</label>
                          <input type="number" name="pass_int_bag23k" id="pass_int_bag23k" class="form-control" value="<?=$ddOrcamento['pass_int_bag23k']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_int_preco">Valor</label>
                          <input type="text" name="pass_int_preco" id="pass_int_preco" class="form-control precoMask somaValores" value="<?=$ddOrcamento['pass_int_preco']?>">
                      </div>
                  </div>
                </div>
                <h4><i class="fa-solid fa-plane"></i> Viagem Aérea Nacional</h4>
                <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_origem">Origem</label>
                          <input type="text" name="pass_nac_origem" id="pass_nac_origem" class="form-control" value="<?=$ddOrcamento['pass_nac_origem']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_destino">Destino</label>
                          <input type="text" name="pass_nac_destino" id="pass_nac_destino" class="form-control" value="<?=$ddOrcamento['pass_nac_destino']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_data_ida">Data de ida</label>
                          <input type="text" name="pass_nac_data_ida" id="pass_nac_data_ida" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['pass_nac_data_ida'])?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_data_volta">Data de volta</label>
                          <input type="text" name="pass_nac_data_volta" id="pass_nac_data_volta" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['pass_nac_data_volta'])?>">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_qtd">Passagens</label>
                          <input type="number" name="pass_nac_qtd" id="pass_nac_qtd" class="form-control" value="<?=$ddOrcamento['pass_nac_qtd']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_bag10k">Bagagem 10kg</label>
                          <input type="number" name="pass_nac_bag10k" id="pass_nac_bag10k" class="form-control" value="<?=$ddOrcamento['pass_nac_bag10k']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_bag23k">Bagagem 23kg</label>
                          <input type="number" name="pass_nac_bag23k" id="pass_nac_bag23k" class="form-control" value="<?=$ddOrcamento['pass_nac_bag23k']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_nac_preco">Valor</label>
                          <input type="text" name="pass_nac_preco" id="pass_nac_preco" class="form-control precoMask somaValores" value="<?=$ddOrcamento['pass_nac_preco']?>">
                      </div>
                  </div>
                </div>
                <h4><i class="fa-solid fa-bus"></i> Viagem Rodoviária</h4>
                <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_rod_origem">Origem</label>
                          <input type="text" name="pass_rod_origem" id="pass_rod_origem" class="form-control" value="<?=$ddOrcamento['pass_rod_origem']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_rod_destino">Destino</label>
                          <input type="text" name="pass_rod_destino" id="pass_rod_destino" class="form-control" value="<?=$ddOrcamento['pass_rod_destino']?>">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_rod_data_ida">Data de ida</label>
                          <input type="text" name="pass_rod_data_ida" id="pass_rod_data_ida" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['pass_rod_data_ida'])?>" maxlength="10">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_rod_data_volta">Data de volta</label>
                          <input type="text" name="pass_rod_data_volta" id="pass_rod_data_volta" class="form-control dataMask" value="<?=mysql_to_data($ddOrcamento['pass_rod_data_volta'])?>" maxlength="10">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_rod_qtd">Passagens</label>
                          <input type="number" name="pass_rod_qtd" id="pass_rod_qtd" class="form-control" value="<?=$ddOrcamento['pass_rod_qtd']?>">
                      </div>
                  </div>
                  <div class="col-3">
                  </div>
                  <div class="col-3">
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="pass_rod_preco">Valor</label>
                          <input type="text" name="pass_rod_preco" id="pass_rod_preco" class="form-control precoMask somaValores" value="<?=$ddOrcamento['pass_rod_preco']?>">
                      </div>
                  </div>
                </div>
                <h4><i class="fa-solid fa-clipboard-list"></i> Outros detalhes</h4>
                <div class="row">
                  <div class="col-3">
                      <div class="form-group">
                          <label for="seguro">Seguro</label>
                          <input type="text" name="seguro" id="seguro" class="form-control precoMask somaValores" value="<?=$ddOrcamento['seguro']?>" placeholder="0 para incluso">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="assessoria">Assessoria</label>
                          <input type="text" name="assessoria" id="assessoria" class="form-control precoMask somaValores" value="<?=$ddOrcamento['assessoria']?>" placeholder="0 para incluso">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="taxas">Taxas</label>
                          <input type="text" name="taxas" id="taxas" class="form-control precoMask somaValores" value="<?=$ddOrcamento['taxas']?>" placeholder="0 para incluso">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="total">Total</label>
                          <input type="text" name="total" id="total" class="form-control precoMask valorTotal" value="<?=$ddOrcamento['total']?>">
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="form-group">
                        <label for="obs">Observações</label>
                        <textarea name="obs" id="obs" class="form-control" rows="5"><?=$ddOrcamento['obs']?></textarea>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                          <?php foreach($arrStatus as $ddStatus): ?>
                            <option value="<?=$ddStatus['id']?>" <?=$ddOrcamento['status'] == $ddStatus['id'] ? 'selected' : ''?>><?=$ddStatus['nome']?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                  </div>
                  <div class="col-2">
                  </div>
                  <div class="col-4">
                    <a class="btn btn-info btn-block mt-4 geraContrato" data-orcamento="<?=$ddOrcamento['id']?>"><i class="fa-solid fa-file-contract"></i> Gerar contrato</a>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="card card-info cardFile">
              <div class="card-header">
                <h3 class="card-title">Anexar arquivo</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="form-group">
                      <label for="nameFile">Nome do arquivo</label>
                      <input type="text" name="nameFile" id="nameFile" class="form-control" value="">
                      <input type="hidden" name="orcamentoId" id="orcamentoId" value="<?=$ddOrcamento['id']?>">
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="form-group">
                      <label for="inputFile">Arquivo a ser enviado</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputFile">
                          <label class="custom-file-label" for="inputFile">Escolher arquivo</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id='sendFile'>Enviar</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nome do arquivo</th>
                      <th>Tamanho</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id="listFiles">
                    <?php
                    if($arrArquivos):
                      foreach($arrArquivos as $ddArquivo): ?>
                        <tr id="tr<?=$ddArquivo['id']?>">
                          <td title="<?=$ddArquivo['nome']?>">
                            <i class="fa-solid fa-file<?=array_key_exists($ddArquivo['tipo'], $fileType) ? '-'.$fileType[$ddArquivo['tipo']] : ''?>"></i> 
                            <?=mb_strimwidth($ddArquivo['nome'], 0, 29, "...")?>
                          </td>
                          <td><?=round($ddArquivo['tamanho'], 4)?> KB</td>
                          <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <?=botao('download', URLRAIZ.'download/'.$ddArquivo['uuid'])?>
                              <?=botao('excluir', '#', $ddArquivo['id'], 'fileDel', $ddArquivo['nome'])?>
                              <?=botao('copiar', '#', $ddArquivo['uuid'])?>
                            </div>
                          </td>
                        </tr>
                        <?php
                      endforeach;
                    else:
                    ?>
                      <tr class="text-center" id="noFile">
                        <td colspan="3">Sem Arquivos</td>
                      </tr>
                    <?php
                    endif;
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row pb-3">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-secondary mr-2">Cancelar</a>
            <input type="submit" value="Salvar alterações" class="btn btn-primary">
          </div>
        </div>
      </form>
    </section>