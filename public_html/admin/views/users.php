        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?=$subtitulo?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-6">
                    <a href="<?=$urlBase?>/user" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Adicionar usuário</a>
                  </div>
                  <div class="col-6">
                    <!-- <label class="float-right mt-1"><input type="checkbox" id="showInactive"> Exibir usuários inativos</label> -->
                    <div class="form-group float-right">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="showInactive">
                        <label class="custom-control-label" for="showInactive">Exibir inativos</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th width="20%">Nome</th>
                          <th width="20%">Nome de Usuário</th>
                          <th width="20%">Email</th>
                          <th width="20%">Telefone(s)</th>
                          <th width="20%">Nível</th>
                          <th>status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($arrUsers as $ddUser): ?>
                        <tr id="tr<?=$ddUser['id']?>" <?=$ddUser['status'] ? '' : 'style="background-color: rgba(0,0,0,.05)"'?>>
                          <td><?=$ddUser['nome']?></td>
                          <td><?=$ddUser['login']?></td>
                          <td><?=$ddUser['email']?></td>
                          <td><?=$ddUser['phone1']?><?=$ddUser['phone2'] ? ' / '.$ddUser['phone2'] : '' ?></td>
                          <td><?=$arrNiveis[$ddUser['nivel']]['nome']?></td>
                          <td><?=$arrStatus[$ddUser['status']]?></td>
                          <td>
                            <div class="btn-group">
                              <?=botao('editar', './user/'.$ddUser['id'])?>
                              <?=botao('excluir', '#', $ddUser['id'], 'usersDel', $ddUser['nome'])?>
                            </div>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                        <tr>
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