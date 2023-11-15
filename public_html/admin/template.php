<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title?> - Embarque Ideal</title>

  <link rel="apple-touch-icon" sizes="57x57" href="<?=$patch?>favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=$patch?>favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=$patch?>favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=$patch?>favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=$patch?>favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=$patch?>favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?=$patch?>favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=$patch?>favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?=$patch?>favicon/apple-touch-icon.png">

  <link rel="icon" type="image/png" sizes="192x192"  href="<?=$patch?>android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=$patch?>favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=$patch?>favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=$patch?>favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" href="<?=$patch?>favicon.ico?v=1.0">

  <link rel="manifest" href="<?=$patch?>favicon/site.webmanifest">
  <link rel="mask-icon" href="<?=$patch?>favicon/safari-pinned-tab.svg" color="#216ae8">
  <meta name="apple-mobile-web-app-title" content="Embarque Ideal">
  <meta name="application-name" content="Embarque Ideal">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?=$patch?>ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$patch?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=$patch?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=$patch?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=$patch?>plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=$patch?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=$patch?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=$patch?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link href="https://nightly.datatables.net/rowreorder/css/rowReorder.dataTables.css?_=d163871dd21df6b5a0b4985ca66fa6d4.css" rel="stylesheet" type="text/css" />
  <!-- Toastr -->
  <link rel="stylesheet" href="<?=$patch?>plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$patch?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=$patch?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=$patch?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=$patch?>plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?=$patch?>dist/img/EmbarqueIdealLogo.png" alt="Embarque Ideal Logo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php require './includes/header.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php require './includes/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$title?> <?=$pg == 'orcamento' ? '<span id="badgeStatus" class="badge bg-'.$arrStatus[$ddOrcamento['status']]['cor'].'">'.$arrStatus[$ddOrcamento['status']]['nome'].'</span>' : ''?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php require './views/'.$view ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require './includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- Modal de confirmação de exclusão -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="modalExcluirLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalExcluirLabel">Excluir Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete_form" method="post" enctype="multipart/form-data">
        <div class="modal-body" id="modalExcluirBody">
        </div>
        <div class="modal-footer">
          <input type="hidden" name="del_id" id="del_id" />
          <input type="hidden" name="del_action" id="del_action" />
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" name="delbutton" id="delButton" value="Excluir" class="btn btn-danger" />
        </div>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?=$patch?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=$patch?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=$patch?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=$patch?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=$patch?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=$patch?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=$patch?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=$patch?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=$patch?>plugins/moment/moment.min.js"></script>
<script src="<?=$patch?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=$patch?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=$patch?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=$patch?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=$patch?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=$patch?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=$patch?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=$patch?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=$patch?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=$patch?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://nightly.datatables.net/rowreorder/js/dataTables.rowReorder.js?_=d163871dd21df6b5a0b4985ca66fa6d4"></script>
<script src="<?=$patch?>plugins/jszip/jszip.min.js"></script>
<script src="<?=$patch?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=$patch?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=$patch?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=$patch?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=$patch?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- InputMask -->
<script src="<?=$patch?>plugins/moment/moment.min.js"></script>
<script src="<?=$patch?>plugins/inputmask/jquery.mask.min.js"></script>
<script src="<?=$patch?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Toastr -->
<script src="<?=$patch?>plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$patch?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$patch?>dist/js/demo.js"></script>
<!-- bs-custom-file-input -->
<script src="<?=$patch?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(function() {
<?php
if($pg == 'dashboard'){ 
  if(isset($_GET['erro']) && $_GET['erro'] == 'naoAutorizado'):
?>
  alerta('error', 'Você não está autorizado a acessar a página solicitada!');
<?php
  endif;
?>
    'use strict'
    
  /* Chart.js Charts */
  // Sales chart
  var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');

  var salesChartData = {
    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    datasets: [
      {
        label: 'Orçamentos solicitados',
        backgroundColor: 'rgba(56, 163, 184, 1)',
        borderColor: 'rgba(50, 145, 165, 1)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [<?=$chart[1][1]?>,
               <?=$chart[2][1]?>,
               <?=$chart[3][1]?>,
               <?=$chart[4][1]?>,
               <?=$chart[5][1]?>,
               <?=$chart[6][1]?>,
               <?=$chart[7][1]?>,
               <?=$chart[8][1]?>,
               <?=$chart[9][1]?>,
               <?=$chart[10][1]?>,
               <?=$chart[11][1]?>,
               <?=$chart[12][1]?>
              ]
      },
      {
        label: 'Propostas Aceitas',
        backgroundColor: 'rgba(63, 166, 75, 1)',
        borderColor: 'rgba(57, 149, 67, 1)',
        pointRadius: false,
        pointColor: 'rgba(210, 214, 222, 1)',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [<?=$chart[1][5]?>,
               <?=$chart[2][5]?>,
               <?=$chart[3][5]?>,
               <?=$chart[4][5]?>,
               <?=$chart[5][5]?>,
               <?=$chart[6][5]?>,
               <?=$chart[7][5]?>,
               <?=$chart[8][5]?>,
               <?=$chart[9][5]?>,
               <?=$chart[10][5]?>,
               <?=$chart[11][5]?>,
               <?=$chart[12][5]?>
              ]
      },
      {
        label: 'Propostas Recusadas',
        backgroundColor: 'rgba(212, 52, 65, 1)',
        borderColor: 'rgba(190, 47, 58, 1)',
        pointRadius: false,
        pointColor: 'rgba(210, 214, 222, 1)',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [<?=$chart[1][4]?>,
               <?=$chart[2][4]?>,
               <?=$chart[3][4]?>,
               <?=$chart[4][4]?>,
               <?=$chart[5][4]?>,
               <?=$chart[6][4]?>,
               <?=$chart[7][4]?>,
               <?=$chart[8][4]?>,
               <?=$chart[9][4]?>,
               <?=$chart[10][4]?>,
               <?=$chart[11][4]?>,
               <?=$chart[12][4]?>
              ]
      }
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: true
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  })

  // Donut Chart
  var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
  var pieData = {
    labels: [
      'Orçamentos solicitados',
      'Propostas Aceitas',
      'Propostas Recusadas'
    ],
    datasets: [
      {
        data: [<?=$pieChart[1]?>, <?=$pieChart[5]?>, <?=$pieChart[4]?>],
        backgroundColor: ['#17a2b8', '#28a745', '#dc3545']
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: true
    },
    maintainAspectRatio: false,
    responsive: true
  }
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  // eslint-disable-next-line no-unused-vars
  var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'pie',
    data: pieData,
    options: pieOptions
  })
<?php }elseif($pg == 'orcamento'){ ?>
  bsCustomFileInput.init();
  
  $('#sendFile').click(function( event ) {
    var formData = new FormData();
    formData.append('inputFile', $('#inputFile')[0].files[0]);
    formData.append('nameFile', $('#nameFile').val());
    formData.append('orcamentoId', $('#orcamentoId').val());

    $.ajax({
          url : './arquivo',
          type : 'POST',
          data : formData,
          processData: false,
          contentType: false,
          success : function(data) {
            data = JSON.parse(data);
            alerta(data.tipo, data.msg);

            if(data.tipo == 'success'){
              $('#inputFile').val('');
              $('#nameFile').val('');
              $('.custom-file-label').text('Escolher arquivo');
              
              $('#noFile').fadeOut("normal", function() {
                $('#noFile').remove();
              });
              $('#listFiles').fadeIn("normal", function() {
                $('#listFiles').append(data.linha);
              });
            }
          }
    });
  });

  $(document).on('click', '.copiarLink', function(){
    var textToCopy = $(this).data('action');
    var temp = $("<input>");
    $("body").append(temp);
    temp.val(textToCopy).select();
    document.execCommand("copy");
    temp.remove();
    
    toastr.info('Link copiado com sucesso!');
  });

  $(".precoMask").mask('#0,00', {reverse: true});

  $('.somaValores').on( "blur", function() {
    var total = 0;
    $('.somaValores').each(function(){
      var valor = parseFloat($(this).val().replace('.', '').replace(',', '.'));
      if (!isNaN(valor)) total += valor;
    });
    var totalDecimal = total.toLocaleString("en",{useGrouping: false,minimumFractionDigits: 2});
    $(".valorTotal").val(totalDecimal.toString().replace('.', ','));
  });

  $('.geraContrato').click(function(){
    var id = $(this).data('orcamento');
    $.get("<?=URLRAIZ?>admin/actions/geraContrato.php", { id: id })
    .done(function( data ) {
      data = JSON.parse(data);
      alerta(data.tipo, 'Contrato gerado com sucesso!');

      $('#listFiles').fadeIn("normal", function() {
        $('#listFiles').append(data.linha);
      });

      $("<a>").prop({
            target: "_blank",
            href: data.link
        })[0].click();
    })
  });

<?php } ?>

    var table = $('#example2').DataTable({
      "rowReorder"     : true,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json',
      },
      "order": [[ 5, 'asc' ], [ 0, 'asc' ]],
      "paging": true,
      "lengthChange": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $('#showInactive').change( function() {
      table.draw();
    });

    $('[data-mask]').inputmask();
    $('.telMask').mask('00 00000-0000', {reverse: false});
    $('.dataMask').mask("00/00/0000", {placeholder: "__/__/____"});

    $("#addEdit").on( "submit", function( event ) {
      event.preventDefault();
      var formulario = $(this);
      var dataForm = $(this).serialize();
      $.ajax({
        type: "POST",
        // url: $(this).attr('action')+'?debug=true',
        url: $(this).attr('action'),
        data: dataForm,
        success: function(data) {
          data = JSON.parse(data);
          alerta(data.tipo, data.msg);
          // console.log(data);
          atualizaStatus()

          if(data.tipo == 'success' && data.codAlerta != 'editOk'){
            formulario[0].reset()
          }
        }
		  });
    });

    function atualizaStatus(){
      var value = $("#status option:selected").val();
      var text  = $("#status option:selected").text();

      $.get( "<?=URLRAIZ?>admin/actions/getStatus.php", function(data) {
        var obj = JSON.parse(data);

        $('#badgeStatus').removeClass();
        $('#badgeStatus').addClass('badge');
        $('#badgeStatus').addClass('bg-'+obj[value]['cor']);
        $('#badgeStatus').text(obj[value]['nome']);

      });
    }
    
    function fileValidation() {
        var fileInput =
            document.getElementById('file');
          
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
          
        if (!allowedExtensions.exec(filePath)) {
            alert('Envie somente JPG, JPEG ou PNG');
            fileInput.value = '';
            return false;
        }
    }
    
    function alerta(tipo, msg) {
      if(tipo == 'success'){
        toastr.success(msg);
      }else if(tipo == 'error'){
        toastr.error(msg);
      }else if(tipo == 'info'){
        toastr.info(msg);
      }
    };

    $('#modalExcluir').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var id     = button.data('id');
      var action = button.data('action');
      var nome   = button.data('nome');
      
      var modal = $(this);
      modal.find('#del_id').val(id);
      modal.find('#del_action').val(action);
      $("#modalExcluirBody").html('<p>Deseja excluir <br /><strong>' + nome + ' ?</strong>')
    });

    //----------------- Modal de Excluir ----------------//
    $(document).on('submit', '#delete_form', function(event){
        event.preventDefault()
        var del_id     = $('#del_id').val();
        var del_action = $('#del_action').val();
        var action     = del_action.substring(0, del_action.length - 3) + 'Action';
        var row        = '#tr'+del_id;

        var formData = {
          'action': del_action,
          'del_id': del_id
        };

        $.ajax({
          url  : "<?=URLRAIZ?>admin/actions/"+action+".php",
          type : "POST",
          data : formData,
          success:function(response){
            if(response == 'delOk' || response == 'delFileOk'){
              $('#modalExcluir').modal('hide');
              $('#listFiles > '+row).fadeOut("normal", function() {
                $('#listFiles > '+row).remove();
              });
              if(response == 'delOk'){
                toastr.success('Cadastro excluído com sucesso.');
              }else if(response == 'delFileOk'){
                toastr.success('Arquivo excluído com sucesso.');
              }
            }
          },
          error: function (err) {
            $('#modalExcluir').modal('hide');
            toastr.error('Houve um erro ao excluir o cadastro.')
          },
        })
    });

  });

  $.fn.dataTable.ext.search.push(
      function( settings, searchData, index, rowData, counter ) {
        var data = rowData[5];
        var complete = false;

        if (data !== "Inativo") {
          complete = true;
        }

        var ShowAll = $('#showInactive').is(':checked');

        if (ShowAll || complete)
        {
            return true;
        }

        return false;
      }
  );
</script>
</body>
</html>
