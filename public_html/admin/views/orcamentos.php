        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?=$subtitulo?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-6">
                    <a href="<?=$urlBase?>/orcamento" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass-plus"></i> Adicionar orçamento</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <table id="orcamentos" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th width="20%">Nome</th>
                          <th width="20%">Origem</th>
                          <th width="20%">Destino</th>
                          <th width="20%">Telefone(s)</th>
                          <th width="15%">Data do pedido</th>
                          <th>status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($arrOrcamentos as $ddOrcamento): ?>
                        <tr>
                          <td><?=$ddOrcamento['id']?></td>
                          <td><?=$ddOrcamento['nome']?></td>
                          <td><?=$ddOrcamento['origem']?></td>
                          <td><?=$ddOrcamento['destino']?></td>
                          <td><?=telToWhats($ddOrcamento['tel'])?></td>
                          <td><?=mysql_to_data($ddOrcamento['dt_cadastro'], 1)?></td>
                          <td><span class="badge bg-<?=$arrStatus[$ddOrcamento['status']]['cor']?>"><?=$arrStatus[$ddOrcamento['status']]['nome']?></span></td>
                          <td>
                            <div class="btn-group">
                              <?=botao('editar', './orcamento/'.$ddOrcamento['id'])?>
                              <?=botao('excluir', '#', $ddOrcamento['id'], 'usersDel', $ddOrcamento['nome'])?>
                            </div>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th width="20%">Nome</th>
                          <th width="20%">Nome de Usuário</th>
                          <th width="20%">Email</th>
                          <th width="20%">Telefone(s)</th>
                          <th width="20%">Nível</th>
                          <th>status</th>
                          <th></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>