    <section class="content">
      <form id='addEdit' method="POST" action="">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card card-info cardFile">
              <div class="card-header">
                <h3 class="card-title">Anexar arquivo</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="inputFile">Adicionar imagem (1920 x 400) (JPG, JPEG ou PNG)</label>
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
                      <th>Miniatura</th>
                      <th>Nome do arquivo</th>
                      <th width="5%"></th>
                    </tr>
                  </thead>
                  <tbody id="listFiles">
                    <?php
                    if($arrArquivos):
                      foreach($arrArquivos as $ddArquivo): ?>
                        <tr id="tr<?=$ddArquivo['id']?>">
                          <td title="<?=$ddArquivo['nome']?>">
                            <img src="../assets/img/banner/innerBanner/<?=$ddArquivo['arquivo']?>" class="img-fluid rounded" alt="" width="300">
                          </td>
                          <td><?=mb_strimwidth($ddArquivo['arquivo'], 0, 29, "...")?></td>
                          <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <?=botao('excluir', '#', $ddArquivo['id'], 'topoinnerDel', $ddArquivo['arquivo'])?>
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
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </form>
    </section>