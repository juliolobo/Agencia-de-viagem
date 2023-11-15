<?php
    $msg = "";
    $msg = (isset($_GET['msg'])) ? $_GET['msg'] : $msg;
	$mensagem = "";
	switch($msg) {
		case "erro1": $mensagem="Usuário DESATIVADO"; break;
		case "erro2": $mensagem="Você não está autorizado a Acessar o painel"; break;
		case "erro3": $mensagem="Senha incorreta"; break;
		case "erro4": $mensagem="Usuário não encontrado"; break;
		case "logout": $mensagem="Você foi deslogado do sistema"; break;
		case "logoutok": $mensagem="Você deslogou do sistema"; break;
	}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Embarque Ideal - Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="./plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="dist/img/EmbarqueIdealLogo.png" alt="Embarque Ideal Logo" style="width: 100px;">
    <a href="./index2.html" style="color: #216ae8;"><b>Embarque</b> Ideal</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça o login para acessar o sistema</p>

      <form action="./logar.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="usuario" class="form-control" placeholder="Nome de usuário">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa-solid fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Toastr -->
<script src="./plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<?php
  $msg = "";
  if(isset($_GET['msg']) && !empty($_GET['msg'])){
      $msg = addslashes($_GET['msg']);
?>
<script>
  var msg = '<?=$msg?>';
  if(msg!=''){
    toastr.error('<?=$mensagem?>')
  }
</script>
<?php } ?>
</body>
</html>
