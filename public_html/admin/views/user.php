
<?php
$permEdit = true;

if(isset($_GET['id'])):
    $permEdit = $_SESSION[SESSAO]['usuario']['id'] == $_GET['id'] ? true : false;
endif;

if($permEdit || in_array($_SESSION[SESSAO]['usuario']['id'], [1, 99])) {
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title"><?=$subtitulo?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id='addEdit' method="POST" action="./actions/usersAction.php">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="nome">Nome completo *</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe o nome" value="<?=isset($ddUser['nome']) ? $ddUser['nome'] : ''?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Informe o email" value="<?=isset($ddUser['email']) ? $ddUser['email'] : ''?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone1">Telefone 1 *</label>
                            <input type="tel" name="phone1" class="form-control telMask" id="phone1" placeholder="xx xxxxx-xxxx" value="<?=isset($ddUser['phone1']) ? $ddUser['phone1'] : ''?>" required>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone2">Telefone 2</label>
                            <input type="tel" name="phone2" class="form-control telMask" id="phone2" placeholder="xx xxxxx-xxxx" value="<?=isset($ddUser['phone2']) ? $ddUser['phone2'] : ''?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nível de acesso</label>
                            <select class="form-control" name="nivel" id="nivel">
                              <?php foreach($arrNiveis as $ddNivel): ?>
                                <option value="<?=$ddNivel['id']?>" <?=isset($ddUser['nivel']) && $ddUser['nivel'] == $ddNivel['id'] ? 'selected' : ''?>><?=$ddNivel['nome']?></option>
                              <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1" <?=isset($ddUser['status']) && $ddUser['status'] == 1 ? 'selected' : ''?>>Ativo</option>
                                <option value="0" <?=isset($ddUser['status']) && $ddUser['status'] == 0 ? 'selected' : ''?>>Inativo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="login">Nome de usuário *</label>
                            <input type="text" name="login" class="form-control" id="login" placeholder="Nome de usuário para acesso ao sistema" value="<?=isset($ddUser['login']) ? $ddUser['login'] : ''?>" required>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="senha">Senha *</label>
                            <input type="password" name="senha" class="form-control" id="senha" autocomplete="off" placeholder="<?=isset($ddUser['id']) ? 'Digite uma senha apenas se quiser alterar"' : 'Senha para acesso ao sistema" required'?>>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="nome">Observação</label>
                            <textarea name="obs" class="form-control" rows="5" placeholder="Somente administradores conseguem ver..."> <?=isset($ddUser['obs']) ? $ddUser['obs'] : ''?> </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <?php if(isset($ddUser['id'])): ?>
                    <input type="hidden" name="id" value="<?=$ddUser['id']?>">
                    <input type="hidden" name="action" value="editUsuario">
                <?php else: ?>
                    <input type="hidden" name="action" value="addUsuario">
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="javascript:history.back()" class="btn btn-default float-right">Cancelar</a>
            </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
<?php }else{
    echo 'deu bom';
}