<header class="main-header header-2">
    <div class="header-bottom-area">
        <div class="header-bottom-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.html"><img src="/assets/media/logos/logo-c-blue.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">Accueil</a></li>
                                    <li><a href="{{ route('about') }}">À propos</a></li>
                                    <li><a href="{{ route('projects') }}">Projets</a></li>
                                    <li><a href="team.html">Notre équipe</a></li>
                                    <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <div class="header-right d-none d-lg-block">
                            <div class="header-btn f-right">
                                <a class="thm-btn thm-btn-3" href="{{ route('login') }}">Se connecter</a>
                            </div>
                            {{--
                            <div class="icon cart-icon f-right">
                                <a href="index-2.html#">
                                    <i class="ti-shopping-cart">
                                        <span class="cart-number">0</span>
                                    </i>
                                </a>
                            </div>
                            <div class="icon search-box f-right">
                                <a href="index-2.html#"><i class="ti-search"></i></a>
                                <div class="search-overlay search-popup"></div>
                            </div>
                            --}}

                        </div>
                    </div>
                </div>
            </div>
            <!-- info bar start -->
            <div class="btn-menu-main">
                <div class="crose mb-40">
                    <button><i class="ti-close"></i></button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.html">
                        <img src="/img/logo/logo-2.png" alt="">
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="sidebar-content mb-45">
                        <h4>About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a class="thm-btn" href="index-2.html#">Contact us</a>
                    </div>
                    <div class="contact-list mb-30">
                        <div class="sidebar-title">
                            <h4>Contact us</h4>
                        </div>
                        <ul class="footer-info">
                            <li>
                                <div class="sidebar-address mt-20">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <p>Bowery St, New York, 1013, USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-address mt-20">
                                    <span><i class="fas fa-phone-alt"></i></span>
                                    <p>+1255 - 568 - 6523</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-address mt-20">
                                    <span><i class="fas fa-envelope-open-text"></i></span>
                                    <p>information@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-social mt-20">
                        <a href="index-2.html#"><i class="fab fa-facebook-f"></i></a>
                        <a href="index-2.html#"><i class="fab fa-twitter"></i></a>
                        <a href="index-2.html#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="index-2.html#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- info bar end -->

            <!-- header search start -->
            <div class="header-form">
                <div class="bg-lay">
                    <div class="cross">
                        <i class="ti-close"></i>
                    </div>
                </div>
                <form class="form-container">
                    <input type="text" placeholder="Input Your Search" name="name">
                    <button type="submit">Search</button>
                </form>
            </div>
            <!-- header search end -->
        </div>
    </div>
</header>
