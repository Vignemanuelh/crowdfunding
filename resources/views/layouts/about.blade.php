<!doctype html>
<html class="no-js" lang="fr">
@include('partials.head')
<body>

<!-- preloader start -->
@include('partials.preloader')
<!-- preloader end  -->

<!-- header start -->
@include('partials.header')
<!-- header end -->

<main>
    <!-- page title start -->
    <section class="page-title-area bg-overly slider-area slider-2" data-overlay="5" data-background="img/bg/page-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-shape">
                        <img src="img/shape/page-title-shape.png" alt="">
                    </div>
                    <div class="page-title text-center" data-aos="fade-up" data-aos-delay="100">
                        <h1>Tout savoir sur nous</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Accueil</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">À propos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- about start -->
    <section class="about-area fix pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 order-xl-1 order-md-2 order-1">
                    <div class="about-left">
                        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                            <h5>À propos</h5>
                            <h2>Que faisons-nous de vos contributions ?</h2>
                        </div>
                        <div class="about-text-wrapper">
                            <div class="about-text about-text-1 mb-25"  data-aos="fade-up" data-aos-delay="100">
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            </div>
                            <div class="about-text about-text-2 mb-25"  data-aos="fade-up" data-aos-delay="200">
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <span>incididunt</span> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                            <div class="about-text about-text-3 mb-25"  data-aos="fade-up" data-aos-delay="300">
                                <p>Lyorem ipsum dolor sit amet, consectetur <span>adipisicing</span> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation., quis nostrud.</p>
                            </div>
                        </div>
                        <div class="about-btn" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{ route('projects') }}" class="thm-btn thm-btn-2">Faire un don</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 order-xl-2 order-md-1 order-2">
                    <div class="about-right-wrapper">
                        <div class="about-right">
                            <div class="about-shape-bg">
                                <img src="img/shape/about-shape-bg.png" alt="">
                            </div>
                            <div class="about-thumb-big" data-aos="fade-up" data-aos-delay="100">
                                <img src="img/about/about-bg.jpg" alt="">
                            </div>
                            <div class="about-thumb-sml" data-aos="fade-left" data-aos-delay="300">
                                <img src="img/about/about-smale-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="about-right-text" data-aos="fade-right" data-aos-delay="300">
                            <div class="about-text-border">
                                <h1>21<span>+</span></h1>
                                <h3>Years of <br> Experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- counter start -->
    <section class="counter-area pt-120 pb-90" data-overlay="8" data-background="img/bg/about-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="counter-icon mb-25">
                            <img src="img/icon/c01.png" alt="">
                        </div>
                        <div class="counter-text">
                            <h3><span class="counter">12</span>k+</h3>
                            <p>Nombre de volontaires</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30" data-aos="fade-up" data-aos-delay="300">
                        <div class="counter-icon counter-icon-2 mb-25">
                            <img src="img/icon/c02.png" alt="">
                        </div>
                        <div class="counter-text">
                            <h3><span class="counter">8</span>k+</h3>
                            <p>Nombre de contributeurs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30" data-aos="fade-up" data-aos-delay="500">
                        <div class="counter-icon counter-icon-3 mb-25">
                            <img src="img/icon/c03.png" alt="">
                        </div>
                        <div class="counter-text">
                            <h3><span class="counter">10</span>m+</h3>
                            <p>Nombre de personnes secourues</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30" data-aos="fade-up" data-aos-delay="700">
                        <div class="counter-icon counter-icon-4 mb-25">
                            <img src="img/icon/c04.png" alt="">
                        </div>
                        <div class="counter-text">
                            <h3><span class="counter">300</span>+</h3>
                            <p>Pays</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter end -->

    <!-- feature start -->
    <section class="feature-area feature-2 gray-bg pt-120 pb-90">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
                <h5>Caractéristiques principales</h5>
                <h2>Aidez ceux qui sont dans le besoin à travers nous</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="feture-single mb-30">
                            <div class="feature-icon mb-20">
                                <img src="img/icon/f01.png" alt="">
                            </div>
                            <div class="feature-text">
                                <h3>L'eau potable</h3>
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et doloreey.</p>
                            </div>
                            <div class="feature-link">
                                <a href="about.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feuture-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="feture-single active mb-30">
                            <div class="feature-icon mb-20">
                                <img src="img/icon/f02.png" alt="">
                            </div>
                            <div class="feature-text">
                                <h3>Faire un don</h3>
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et doloreey.</p>
                            </div>
                            <div class="feature-link">
                                <a href="about.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-animate" data-aos="fade-up" data-aos-delay="500">
                        <div class="feture-single mb-30">
                            <div class="feature-icon mb-20">
                                <img src="img/icon/f03.png" alt="">
                            </div>
                            <div class="feature-text">
                                <h3>Construire des abris</h3>
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et doloreey.</p>
                            </div>
                            <div class="feature-link">
                                <a href="about.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="feture-single mb-30">
                            <div class="feature-icon mb-20">
                                <img src="img/icon/f04.png" alt="">
                            </div>
                            <div class="feature-text">
                                <h3>Fournir de la nourriture</h3>
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et doloreey.</p>
                            </div>
                            <div class="feature-link">
                                <a href="about.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="feture-single mb-30">
                            <div class="feature-icon mb-20">
                                <img src="img/icon/f05.png" alt="">
                            </div>
                            <div class="feature-text">
                                <h3>Aides aux enfants</h3>
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et doloreey.</p>
                            </div>
                            <div class="feature-link">
                                <a href="about.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-animate" data-aos="fade-up" data-aos-delay="500">
                        <div class="feture-single mb-30">
                            <div class="feature-icon mb-20">
                                <img src="img/icon/f06.png" alt="">
                            </div>
                            <div class="feature-text">
                                <h3>Redonner le sourire à ceux qui l'ont perdu</h3>
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et doloreey.</p>
                            </div>
                            <div class="feature-link">
                                <a href="about.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->
</main>

<!-- footer start -->
@include('partials.footer')
<!-- footer end -->

<!-- JS here -->
@include('partials.scripts')
</body>
</html>
