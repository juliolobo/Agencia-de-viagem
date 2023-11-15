<div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600"><?=$titulo?></h1>
            <div class="text-15 text-light-1"><?=$subtitulo?></div>

          </div>

          <div class="col-auto">

          </div>
        </div>

        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-9">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-12">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Nome completo</label>
                        <input name="nome" type="text" required>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Email</label>
                        <input name="email" type="text" required>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Telefone 1</label>
                        <input name="phone1" type="text" required>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Telefone 2</label>
                        <input name="phone2" type="text" required>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Nível</label>
                        <select name="nivel" id="">
                          <?php foreach($arrNiveis as $ddNivel): ?>
                            <option value="<?=$ddNivel['id']?>"><?=$ddNivel['nome']?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Status</label>
                        <select name="status" id="">
                          <option value="1">Ativo</option>
                          <option value="0">Inativo</option>
                        </select>
                        <!-- <input type="text" required> -->
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Usuário</label>
                        <input name="usuario" type="text" required>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Senha</label>
                        <input name="senha" type="password" required>
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Observação (somente adminstradores conseguem ver)</label>
                        <textarea name="obs" rows="5"></textarea>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="d-inline-block pt-30">

                  <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Salvar
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>