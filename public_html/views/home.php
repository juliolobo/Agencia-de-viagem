    <!-- Banner Area -->
    <section id="home_one_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_one_text">
                        <h1 style="color:#0d3984;text-shadow: 0.01em 0.01em #fff"><?=$bannerTopo[0]['titulo']?></h1>
                        <h3 style="color:#fff;text-shadow: 0.05em 0.05em #0d3984"><?=$bannerTopo[0]['subtitulo']?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
    <?php include './includes/formArea.php' ?>
    
    <!-- About Area -->
    <section id="about_two_area" class="section_padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="about_two_left">
                        <div class="about_two_left_top">
                            <h2 data-lang-str="home_ajuda">Te ajudamos a fazer da sua viajem um momento inesquecível!</h2>
                            <p data-lang-str="home_realizar">
                                Realizar viagens com serviços completos, sem precisar se preocupar com passagens, reserva de hotéis, traslado e outras questões burocráticas? Com a <b>Embarque Ideal</b> isso é possível.</p>
                        </div>
                        <div class="about_two_left_middel">
                            <div class="about_two_item">
                                <div class="about_two_item_icon">
                                    <img src="assets/img/icon/about-1.png" alt="icon">
                                </div>
                                <div class="about_two_item_text">
                                    <h3 data-lang-str="home_escolha">A escolha do seu destino</h3>
                                    <p data-lang-str="home_descubra">Descubra seu destino ideal com nosso suporte personalizado. Transforme sonhos em roteiros inesquecíveis!</p>
                                </div>
                            </div>
                            <div class="about_two_item">
                                <div class="about_two_item_icon">
                                    <img src="assets/img/icon/about-2.png" alt="icon">
                                </div>
                                <div class="about_two_item_text">
                                    <h3 data-lang-str="home_compras">Compras das suas passagens</h3>
                                    <p data-lang-str="home_garanta">Garanta viagens sem complicações! Nossa agência cuida das passagens para você viajar com tranquilidade e conforto.</p>
                                </div>
                            </div>
                            <div class="about_two_item">
                                <div class="about_two_item_icon">
                                    <img src="assets/img/icon/about-3.png" alt="icon">
                                </div>
                                <div class="about_two_item_text">
                                    <h3 data-lang-str="home_opcoes">Milhares de opções para viajar</h3>
                                    <p data-lang-str="home_milhares">Escolha entre milhares opções de destinos e hotéis o de sua preferência. Se precisar de ajuda, solicite um orçamento!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="about_two_left_img">
                        <img src="assets/img/common/about_two.png" alt="img">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- imagination Area -->
    <section id="go_beyond_area" class="section_padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="heading_left_area">
                        <h2 data-lang-str="home_rolando">O que tá rolando <span>no Instagram?</span></h2>
                        <h5 data-lang-str="home_siga">Siga pra não perder as novidades</h5>
                        <h5><a href="http://instagram.com/embarqueideal" target="_blank" rel="noopener noreferrer">@EmbarqueIdeal</a></h5>
                    </div>
                </div>
              <?php foreach($objImages as $image): ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="imagination_boxed">
                        <a href="<?=$image->permalink?>" target="_blank">
                            <img src="<?=$image->media_url?>" data-bs-toggle="tooltip" data-bs-placement="top" alt="<?=$image->caption?>" title="<?=$image->caption?>">
                        </a>
                    </div>
                </div>
              <?php 
                    $countImages++;
                    if($countImages == 3)
                        break;
                    endforeach;
              ?>
            </div>
        </div>
    </section>

    <!-- Clients review Area -->
    <section id="home_Three_client" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home_client_wrpper">
                        <h4 data-lang-str="home_depoimentos">Depoimentos</h4>
                        <h2 data-lang-str="home_depoimentos_texto">O que nossos clientes estão dizendo</h2>
                        <div class="home-two-quote">
                            <img src="assets/img/icon/quote.png" alt="img">
                            <h3 data-lang-str="home_servicos">Serviços incríveis</h3>
                        </div>
                        <div class="home_two_client_slider  owl-theme owl-carousel">
                            <div class="client_two_content">
                                <p>Minha viagem organizada pela Embarque Ideal foi incrível! Desde a escolha do destino até os detalhes da hospedagem, tudo foi perfeito. Recomendo a todos.</p>
                                <div class="client_two_author">
                                    <h5>Clara Oliveira</h5>
                                </div>
                            </div>
                            <div class="client_two_content">
                                <p>Estou impressionado com a atenção e o profissionalismo da Embarque Ideal. Minha viagem fluiu sem problemas, graças à organização impecável deles. Mal posso esperar para viajar com eles novamente!
                                </p>
                                <div class="client_two_author">
                                    <h5>Rafael Costa</h5>
                                </div>
                            </div>
                            <div class="client_two_content">
                                <p>Serviço excepcional! A equipe da agência cuidou de todos os detalhes, proporcionando uma experiência livre de estresse.
                                </p>
                                <div class="client_two_author">
                                    <h5>Mariana Santos</h5>
                                </div>
                            </div>
                            <div class="client_two_content">
                                <p>"Minha melhor viagem até agora, graças à Embarque Ideal. Suas sugestões de atividades locais deram um toque especial à jornada!
                                </p>
                                <div class="client_two_author">
                                    <h5>Pedro Silva</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_three_client_right">
                        <img src="assets/img/fotos/explorador.png" alt="img" class="rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>