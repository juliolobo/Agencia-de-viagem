    <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5 data-lang-str="rodape_help">Podemos te ajudar?</h5>
                    </div>
                    <div class="footer_first_area">
                        <div class="footer_inquery_area">
                            <h5 data-lang-str="rodape_whats">Entre em contato pelo Whatsapp</h5>
                            <h3><a href="https://wa.me/5512978501637" target="_blank">+55 12 97850-1637</a></h3>
                            <h3><a href="https://wa.me/5521998236845" target="_blank">+55 21 99823-6845</a></h3>
                            <h3><a href="https://wa.me/5521977024440" target="_blank">+55 21 97702-4440</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                    <div class="fb-page mx-auto text-center" data-href="https://www.facebook.com/profile.php?id=100091613476387" data-tabs="timeline" data-width="" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=100091613476387" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100091613476387">Embarque Ideal</a></blockquote></div>
                    
                    <div class="mx-auto text-center mt-3">
                        <div class="footer_heading_area">
                            <h5 data-lang-str="rodape_siga">Siga a gente nas redes sociais!</h5>
                        </div>
                        <ul class="soical_icon_footer justify-content-center">
                            <li><a href="https://www.facebook.com/profile.php?id=100091613476387" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/embarqueideal" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Menu</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <?php foreach($arrMenu as $menu): ?>
                            <li class="nav-item">
                                <a href="/<?=$menu['arquivo'] == 'home' ? '' : $menu['arquivo']?>">
                                    <?=$menu['nome']?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<div class="copyright_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                <div class="copyright_left">
                    <p>Copyright © <?=date('Y')?> <span data-lang-str="rodape_copy">Todos os direitos reservados</span></p>
                </div>
            </div>
            <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                <div class="copyright_right">
                    <img src="assets/img/common/logo.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>