<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?=$title?> - Embarque Ideal </title>

    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" href="./favicon.ico?v=1.0">

    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#216ae8">
    <meta name="apple-mobile-web-app-title" content="Embarque Ideal">
    <meta name="application-name" content="Embarque Ideal">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- navber css -->
    <link rel="stylesheet" href="assets/css/navber.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!-- Flags Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.9.2/css/flag-icons.min.css" />
    <!-- Toastr -->
    <link rel="stylesheet" href="assets/toastr/toastr.min.css">
    <style>
        /* --Banner Area-- */
        #home_one_banner {
            background-image: url("./assets/img/banner/home/<?=$bannerTopo[0]['arquivo']?>");
            padding: 370px 0 280px 0;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #common_banner {
            background-image: url('<?=$bannerTop?>');
        }
    </style>
</head>

<body>
    <!-- preloader Area -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <img class="animation__shake" src="./assets/img/EmbarqueIdealLogo.png" alt="Embarque Ideal Logo" height="100" width="100">
            </div>
        </div>
    </div>
    
    <!-- Header Area -->
    <?php include './includes/header.php'; ?>

    <?php require './views/'.$view ?>

    <!-- Footer  -->
    <?php include './includes/footer.php' ?>
    
    <div class="go-top" title="Ir para o topo" alt="Ir para o topo">
        <i class="fa-solid fa-plane-up"></i>
        <i class="fa-solid fa-plane-up"></i>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalDeObrigado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pedido de orçamento enviado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h1 class="text-success mb-3"><i class="fa-regular fa-circle-check orcaSucess"></i></h1>
        <p>Seu pedido de orçamento foi registrado com sucesso!<br>Em breve um de nossos consultores entrará em contato.</p>
      </div>
    </div>
  </div>
</div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v17.0&appId=855718292651145&autoLogAppEvents=1" nonce="2MBv10oO"></script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>
    <script src="assets/js/form-dropdown.js"></script>
    <!-- Toastr -->
    <script src="assets/toastr/toastr.min.js"></script>
    <script src="assets/js/translate.js"></script>
    <script>
        $(function () {
            var modalDeObrigado = new bootstrap.Modal(document.getElementById('modalDeObrigado'))

            $("#contact_form_content").on( "submit", function( event ) {
            event.preventDefault();
            var formulario = $(this);
            var dataForm = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: dataForm,
                success: function(data) {
                    data = JSON.parse(data);
                    alerta(data.tipo, data.msg);

                    if(data.tipo == 'success'){
                        formulario[0].reset()
                    }
                }
                });
            });

            function alerta(tipo, msg) {
                if(tipo == 'success'){
                    // toastr.success(msg);
                    modalDeObrigado.show();
                }else if(tipo == 'error'){
                    toastr.error(msg);
                }
            };

            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });
    </script>
</body>

</html>