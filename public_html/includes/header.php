    <header class="main_header_arae">
        <!-- Top Bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 d-none">
                        <div class="alert alert-info" role="alert" id="translatoin-incomplete">
                            Incomplete translation
                        </div>
                        <div class="alert alert-danger" role="alert" id="translatoin-unavailable">
                            Language unavailable
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100091613476387" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/embarqueideal" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://wa.me/5512978501637" target="_blank"><span>+55 12 97850-1637</span></a></li>
                            <li><a href="mailto:contato@embarqueideal.com"><span>contato@embarqueideal.com</span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-others-options">
                            <li>
                                <div class="dropdown language-option">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="lang-name"></span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu">
                                        <a class="dropdown-item translate-pt-br" name="btn-translate" href="#" data-lang="pt-br"><span class="fi fi-br"></span> Português</a>
                                        <a class="dropdown-item translate-en" name="btn-translate" href="#" data-lang="en"><span class="fi fi-us"></span> Inglês</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="./">
                                <img src="assets/img/logo-p.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="./">
                            <img src="assets/img/logo.png" alt="logo" id="logoSticky">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <?php foreach($arrMenu as $menu): ?>
                                <li class="nav-item">
                                    <a href="/<?=$menu['arquivo'] == 'home' ? '' : $menu['arquivo']?>" data-lang-str="menu<?=$menu['arquivo']?>" class="nav-link <?=$pg==$menu['arquivo'] ? 'active' : ''?>">
                                        <?=$menu['nome']?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>