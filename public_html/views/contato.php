    <?php include './includes/innerTop.php'; ?>

    <!-- Contact Area -->
    <section id="contact_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2 data-lang-str="contato_titulo">Fale Conosco</h2>
                    </div>
                </div>
            </div>
            <div class="contact_main_form_area_two">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact_left_top_heading">
                            <h3 data-lang-str="contato_subtitulo">Você tem alguma dúvida? Entre em contato conosco.</h3>
                        </div>
                        <div class="contact_form_two">
                            <form action="./contato" id="contact_form_content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="lastName" class="form-control bg_input lastname" placeholder="Last name*">
                                            <input type="text" name="nome" class="form-control bg_input name" placeholder="Nome*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control bg_input" placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="tel" name="tel" class="form-control bg_input" placeholder="Telefone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="mensagem" class="form-control bg_input" rows="5" placeholder="Mensagem*" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn_theme btn_md" data-lang-str="contato_enviar">Enviar mensagem</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_two_left_wrapper">
                                <div class="contact_detais_item">
                                    <h4 data-lang-str="contato_whats">Whatsapps de contato</h4>
                                    <h3><a href="https://wa.me/5512978501637" target="_blank">+55 12 97850-1637</a></h3>
                                    <h3><a href="https://wa.me/5521998236845" target="_blank">+55 21 99823-6845</a></h3>
                                    <h3><a href="https://wa.me/5521977024440" target="_blank">+55 21 97702-4440</a></h3>
                                </div>
                                <div class="contact_detais_item">
                                    <h4 data-lang-str="contato_sac">Whatsapps de SAC</h4>
                                    <h3><a href="https://wa.me/5511997246436" target="_blank">+55 11 99724-6436</a></h3>
                                </div>
                                <div class="contact_detais_item">
                                    <h4 data-lang-str="contato_email">Email de contato</h4>
                                    <h3><a href="mailto:contato@embarqueideal.com">contato@embarqueideal.com</a></h3>
                                </div>
                                <div class="contact_detais_item">
                                    <h4 data-lang-str="contato_horario">Horário de contato</h4>
                                    <h3 data-lang-str="contato_segasex">Segunda a Sexta</h3>
                                    <h3>08:00 as 18:00</h3>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>