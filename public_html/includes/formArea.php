    <section id="theme_search_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="oneway_search_form">
                                                        <form action="./" id="contact_form_content">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p data-lang-str="form_origem">Origem*</p>
                                                                        <input type="text" name="lastName" value="" class="lastname">
                                                                        <input type="text" name="origem" value="" placeholder="Rio de Janeiro" required>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p data-lang-str="form_destino">Destino*</p>
                                                                        <input type="text" name="destino" value="" placeholder="Paris" required>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p data-lang-str="form_data_ida">Data de ida*</p>
                                                                                <input type="date" name="dataIda" value="<?=$dataIda?>" required>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p data-lang-str="form_data_volta">Data de volta</p>
                                                                                <input type="date" name="dataVolta" value="<?=$dataVolta?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                        <div class="flight_Search_boxed">
                                                                            <p data-lang-str="form_passageiros">Passageiros*</p>
                                                                            <input type="number" name="passageiros" value="" required>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mt-3">
                                                                        <div class="flight_Search_boxed">
                                                                            <p data-lang-str="form_nome">Nome*</p>
                                                                            <input type="text" name="nome" value="" class="name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mt-3">
                                                                        <div class="flight_Search_boxed">
                                                                            <p data-lang-str="form_tel">Telefone*</p>
                                                                            <input type="text" name="tel" value="+55" required>
                                                                            <div class="plan_icon_posation">
                                                                                <i class="fas fa-phone"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
                                                                        <div class="flight_Search_boxed">
                                                                            <p>Email</p>
                                                                            <input type="email" name="email" value="">
                                                                            <div class="plan_icon_posation">
                                                                                <i class="fas fa-envelope"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-6 col-sm-12 col-12 mt-3">
                                                                        <div class="flight_Search_boxed">
                                                                            <p data-lang-str="form_hora">Horário pra contato</p>
                                                                            <input type="time" name="hora" min="09:00" max="18:00" value="17:00">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                <div class="top_form_search_button">
                                                                    <button type="submit" class="btn btn_theme btn_md" data-lang-str="form_enviar">Solicitar Orçamento</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>