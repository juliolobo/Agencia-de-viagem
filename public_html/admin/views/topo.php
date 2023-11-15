    <section class="content">
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card card-info cardFile">
              <div class="card-header">
                <h3 class="card-title">Imagem do Topo da Home</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col mb-5">
                    <img src="../assets/img/banner/home/<?=$arrTopo[0]['arquivo']?>" class="img-fluid rounded" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="titulo">Titulo</label>
                      <input type="text" name="titulo" id="titulo" class="form-control" value="<?=$arrTopo[0]['titulo']?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="subtitulo">SubTitulo</label>
                      <input type="text" name="subtitulo" id="subtitulo" class="form-control" value="<?=$arrTopo[0]['subtitulo']?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="inputFile">Imagem do topo (1920 x 920) (JPG, JPEG ou PNG)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="customFile">
                          <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </form>
    </section>