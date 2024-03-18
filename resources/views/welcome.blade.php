<!doctype html>
<html class="no-js" lang="fr">
<!--HEAD-->
@include('partials.head')
<body>

<!-- preloader start -->
@include('partials.preloader')
<!-- preloader end  -->

<!-- header start -->
@include('partials.header')
<!-- header end -->

<main>
    <!-- slider area start -->
    <section class="slider-area slider-2">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                 data-background="/img/bg/slider-bg-03.jpg">
                <div class="container">
                    <div class="slider-wrapper mt-200">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="slider-shape">
                                    <img src="/img/shape/slider-shape-bg-2.png" alt="">
                                </div>
                                <div class="slider-content">
                                    <div class="silder-text">
                                        <div class="slider-caption">
                                            <h5 data-animation="fadeInUp" data-delay=".2s">Apportez votre contribution
                                                aujourd'hui...</h5>
                                            <h1 data-animation="fadeInUp" data-delay=".4s">Soutenez les projets
                                                humanitaires.</h1>
                                            {{--<p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua.</p>--}}
                                        </div>
                                    </div>
                                    <div class="slider-btn">
                                        <a data-animation="fadeInLeft" data-delay=".8s" class="thm-btn"
                                           href="{{ route('projects') }}">Voir les projets</a>
                                        <a data-animation="fadeInRight" data-delay="1s" class="thm-btn border-btn"
                                           href="/login">Se connecter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="slider-thumb d-none d-xl-block" data-animation="fadeInRight"
                                     data-delay=".8s">
                                    <img src="/img/slider/slider01.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center"
                 data-background="/img/bg/slider-bg-03.jpg">
                <div class="container">
                    <div class="slider-wrapper mt-200">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="slider-shape">
                                    <img src="/img/shape/slider-shape-bg-2.png" alt="">
                                </div>
                                <div class="slider-content">
                                    <div class="silder-text">
                                        <div class="slider-caption">
                                            <h5 data-animation="fadeInUp" data-delay=".2s">Apportez votre contribution
                                                aujourd'hui...</h5>
                                            <h1 data-animation="fadeInUp" data-delay=".4s">Laissez votre humanité
                                                s'exprimer</h1>
                                            <p data-animation="fadeInUp" data-delay=".6s">Toute contribution vaut de
                                                l'or, et chacun peut donner selon son coeur ! N'oubliez pas, c'est
                                                l'intention qui compte</p>
                                        </div>
                                    </div>
                                    <div class="slider-btn">
                                        <a data-animation="fadeInLeft" data-delay=".8s" class="thm-btn"
                                           href="{{ route('projects') }}">Faites un geste</a>
                                        <a data-animation="fadeInRight" data-delay="1s" class="thm-btn border-btn"
                                           href="{{ route('login') }}">Connectez-vous</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="slider-thumb d-none d-xl-block" data-animation="fadeInRight"
                                     data-delay=".8s">
                                    <img src="/img/slider/slider01.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- counter start -->
    <section class="counter-area counter-2 gray-bg pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter text-center mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="counter-icon mb-25">
                            <img src="/img/icon/c01.png" alt="">
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
                            <img src="/img/icon/c02.png" alt="">
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
                            <img src="/img/icon/c03.png" alt="">
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
                            <img src="/img/icon/c04.png" alt="">
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

    <!-- about start -->
    <section class="about-area about-2 fix pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="about-thumb" data-aos="fade-right" data-aos-delay="100">
                        <img src="/img/about/about-right.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1">
                    <div class="about-left">
                        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                            <h5>À propos</h5>
                            <h2>Votre contribution vaut de l'or</h2>
                        </div>
                        <div class="about-text-wrapper">
                            <div class="about-text about-text-1 mb-25" data-aos="fade-up" data-aos-delay="100">
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud</p>
                            </div>
                            <div class="about-text about-text-2 mb-25" data-aos="fade-up" data-aos-delay="200">
                                <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <span>incididunt</span> ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation.</p>
                            </div>
                            <div class="about-text about-text-3 mb-25" data-aos="fade-up" data-aos-delay="300">
                                <p>Lyorem ipsum dolor sit amet, consectetur <span>adipisicing</span> elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation., quis nostrud.</p>
                            </div>
                        </div>
                        <div class="about-btn" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{ route('projects')}}" class="thm-btn thm-btn-2">Faites un don</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

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
                                <img src="/img/icon/f01.png" alt="">
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
                                <img src="/img/icon/f02.png" alt="">
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
                                <img src="/img/icon/f03.png" alt="">
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
                                <img src="/img/icon/f04.png" alt="">
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
                                <img src="/img/icon/f05.png" alt="">
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
                                <img src="/img/icon/f06.png" alt="">
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

    <!-- cta start -->
    <section class="cta-area bg-overly pt-120 pb-120" data-overlay="6" data-background="/img/bg/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-wrapper text-center">
                        <div class="cta-text" data-aos="fade-up" data-aos-delay="100">
                            <h2>Devenir volontaire dans l'humanitaire !</h2>
                        </div>
                        <div class="cta-btn" data-aos="fade-up" data-aos-delay="300">
                            <a href="about.html" class="thm-btn">Postuler</a>
                            <a href="{{ route('projects') }}" class="thm-btn thm-btn-3">Faites un don</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->

    <!-- causes start -->
    @include('partials.projects_index')
    {{-- <section class="causes-area gray-bg pt-120 pb-90">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
                <h5>Nos projets</h5>
                <h2>Quelques projets humanitaires</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="causes-single mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="causes-thumb">
                            <img src="/img/causes/causes-01.jpg" alt="">
                        </div>
                        <div class="causes-content">
                            <div class="causes-head clearfix mb-10">
                                <h4><a href="causes-details.html">Food For Israfil</a></h4>
                                <span><i class="ti-location-pin"> </i> Bestory,Feni</span>
                            </div>
                            <div class="causes-text mb-25">
                                <p>Rorem ipsum dolor sit amet, consecteadi pisicing elit, sed do eiusmod temincididunt
                                    ut labore et dolore magna aliqua. Utele enimey.</p>
                            </div>
                            <div class="all-skill-bar">
                                <div class="skill-bar" data-percentage="73%">
                                    <h4 class="progress-title-holder">
                                                <span class="progress-number-mark">
                                                    <span class="percent">73%</span>
                                                </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content" style="width: 73%;"></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="raised">
                                <li>
                                    <h5>Goal</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Rise</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Donation</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('details') }}" class="btn btn-primary text-left">Plus de détails</a>
                                <a href="{{ route('details') }}" class="btn btn-danger text-right">Faire un don</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="causes-single mb-30" data-aos="fade-up" data-aos-delay="300">
                        <div class="causes-thumb">
                            <img src="/img/causes/causes-02.jpg" alt="">
                        </div>
                        <div class="causes-content">
                            <div class="causes-head causes-head-2 clearfix mb-10">
                                <h4><a href="causes-details.html">Food For Wasim</a></h4>
                                <span><i class="ti-location-pin"> </i> Bestory,Feni</span>
                            </div>
                            <div class="causes-text mb-25">
                                <p>Rorem ipsum dolor sit amet, consecteadi pisicing elit, sed do eiusmod temincididunt
                                    ut labore et dolore magna aliqua. Utele enimey.</p>
                            </div>
                            <div class="all-skill-bar all-skill-bar-2">
                                <div class="skill-bar" data-percentage="82%">
                                    <h4 class="progress-title-holder">
                                                <span class="progress-number-mark">
                                                    <span class="percent">82%</span>
                                                </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content" style="width: 82%;"></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="raised">
                                <li>
                                    <h5>Goal</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Rise</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Donation</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('details') }}" class="btn btn-primary text-left">Plus de détails</a>
                                <a href="{{ route('details') }}" class="btn btn-danger text-right">Faire un don</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="causes-single mb-30" data-aos="fade-up" data-aos-delay="500">
                        <div class="causes-thumb">
                            <img src="/img/causes/causes-03.jpg" alt="">
                        </div>
                        <div class="causes-content">
                            <div class="causes-head causes-head-3 clearfix mb-10">
                                <h4><a href="causes-details.html">Food For Rakib</a></h4>
                                <span><i class="ti-location-pin"> </i> Bestory,Feni</span>
                            </div>
                            <div class="causes-text mb-25">
                                <p>Rorem ipsum dolor sit amet, consecteadi pisicing elit, sed do eiusmod temincididunt
                                    ut labore et dolore magna aliqua. Utele enimey.</p>
                            </div>
                            <div class="all-skill-bar all-skill-bar-3">
                                <div class="skill-bar" data-percentage="54%">
                                    <h4 class="progress-title-holder">
                                                <span class="progress-number-mark">
                                                    <span class="percent">54%</span>
                                                </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content" style="width: 54%;"></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="raised">
                                <li>
                                    <h5>Goal</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Rise</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Donation</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('details') }}" class="btn btn-primary text-left">Plus de détails</a>
                                <a href="{{ route('details') }}" class="btn btn-danger text-right">Faire un don</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="causes-single mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="causes-thumb">
                            <img src="/img/causes/causes-04.jpg" alt="">
                        </div>
                        <div class="causes-content">
                            <div class="causes-head clearfix mb-10">
                                <h4><a href="causes-details.html">Food For Israfil</a></h4>
                                <span><i class="ti-location-pin"> </i> Bestory,Feni</span>
                            </div>
                            <div class="causes-text mb-25">
                                <p>Rorem ipsum dolor sit amet, consecteadi pisicing elit, sed do eiusmod temincididunt
                                    ut labore et dolore magna aliqua. Utele enimey.</p>
                            </div>
                            <div class="all-skill-bar">
                                <div class="skill-bar" data-percentage="73%">
                                    <h4 class="progress-title-holder">
                                                <span class="progress-number-mark">
                                                    <span class="percent">73%</span>
                                                </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content" style="width: 73%;"></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="raised">
                                <li>
                                    <h5>Goal</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Rise</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Donation</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('details') }}" class="btn btn-primary text-left">Plus de détails</a>
                                <a href="{{ route('details') }}" class="btn btn-danger text-right">Faire un don</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="causes-single mb-30" data-aos="fade-up" data-aos-delay="300">
                        <div class="causes-thumb">
                            <img src="/img/causes/causes-05.jpg" alt="">
                        </div>
                        <div class="causes-content">
                            <div class="causes-head causes-head-2 clearfix mb-10">
                                <h4><a href="causes-details.html">Food For Wasim</a></h4>
                                <span><i class="ti-location-pin"> </i> Bestory,Feni</span>
                            </div>
                            <div class="causes-text mb-25">
                                <p>Rorem ipsum dolor sit amet, consecteadi pisicing elit, sed do eiusmod temincididunt
                                    ut labore et dolore magna aliqua. Utele enimey.</p>
                            </div>
                            <div class="all-skill-bar all-skill-bar-2">
                                <div class="skill-bar" data-percentage="82%">
                                    <h4 class="progress-title-holder">
                                                <span class="progress-number-mark">
                                                    <span class="percent">82%</span>
                                                </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content" style="width: 82%;"></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="raised">
                                <li>
                                    <h5>Goal</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Rise</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Donation</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('details') }}" class="btn btn-primary text-left">Plus de détails</a>
                                <a href="{{ route('details') }}" class="btn btn-danger text-right">Faire un don</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="causes-single mb-30" data-aos="fade-up" data-aos-delay="500">
                        <div class="causes-thumb">
                            <img src="/img/causes/causes-06.jpg" alt="">
                        </div>
                        <div class="causes-content">
                            <div class="causes-head causes-head-3 clearfix mb-10">
                                <h4><a href="causes-details.html">Food For Rakib</a></h4>
                                <span><i class="ti-location-pin"> </i> Bestory,Feni</span>
                            </div>
                            <div class="causes-text mb-25">
                                <p>Rorem ipsum dolor sit amet, consecteadi pisicing elit, sed do eiusmod temincididunt
                                    ut labore et dolore magna aliqua. Utele enimey.</p>
                            </div>
                            <div class="all-skill-bar all-skill-bar-3">
                                <div class="skill-bar" data-percentage="54%">
                                    <h4 class="progress-title-holder">
                                                <span class="progress-number-mark">
                                                    <span class="percent">54%</span>
                                                </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content" style="width: 54%;"></div>
                                    </div>
                                </div>
                            </div>
                            <ul class="raised">
                                <li>
                                    <h5>Goal</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Rise</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                                <li>
                                    <h5>Donation</h5>
                                    <span class="rate">$6.200</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('details') }}" class="btn btn-primary text-left">Plus de détails</a>
                                <a href="{{ route('details') }}" class="btn btn-danger text-right">Faire un don</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- causes end -->

    <!-- video start -->
    <section class="video-area">
        <div class="container-full">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="video-bg pos-rel">
                        <div class="video-thumb">
                            <img src="/img/bg/video-bg-2.jpg" alt="">
                        </div>
                        <div class="video-icon-wrapper">
                            <a class="popup-video video-icon" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><img
                                    src="/img/icon/play.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video end -->

    <!-- testimonial start -->
    <section class="testimonial-area gray-bg pt-120 pb-150">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
                <h5>Témoignages</h5>
                <h2>Quelques témoignages de nos contributeurs</h2>
            </div>
            <div class="custom-row">
                <div class="testimonial-active" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-4">
                        <div class="testimonial-wrapper text-center">
                            <div class="testimonial-thumb">
                                <img src="/img/testimonial/test01.png" alt="">
                            </div>
                            <div class="client-info mb-15">
                                <h4>Garace Anderson</h4>
                                <span>Founder & CO</span>
                            </div>
                            <div class="text">
                                <p>Rorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor
                                    incididunt ut labore teo dolore magna aliqua. Utey enim ad minim veniamey deryoiy
                                    ention.</p>
                            </div>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="testimonial-wrapper text-center">
                            <div class="testimonial-thumb">
                                <img src="/img/testimonial/test02.png" alt="">
                            </div>
                            <div class="client-info mb-15">
                                <h4>Garace Anderson</h4>
                                <span>Founder & CO</span>
                            </div>
                            <div class="text">
                                <p>Rorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor
                                    incididunt ut labore teo dolore magna aliqua. Utey enim ad minim veniamey deryoiy
                                    ention.</p>
                            </div>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="testimonial-wrapper text-center">
                            <div class="testimonial-thumb">
                                <img src="/img/testimonial/test03.png" alt="">
                            </div>
                            <div class="client-info mb-15">
                                <h4>Garace Anderson</h4>
                                <span>Founder & CO</span>
                            </div>
                            <div class="text">
                                <p>Rorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor
                                    incididunt ut labore teo dolore magna aliqua. Utey enim ad minim veniamey deryoiy
                                    ention.</p>
                            </div>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="testimonial-wrapper text-center">
                            <div class="testimonial-thumb">
                                <img src="/img/testimonial/test02.png" alt="">
                            </div>
                            <div class="client-info mb-15">
                                <h4>Garace Anderson</h4>
                                <span>Founder & CO</span>
                            </div>
                            <div class="text">
                                <p>Rorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor
                                    incididunt ut labore teo dolore magna aliqua. Utey enim ad minim veniamey deryoiy
                                    ention.</p>
                            </div>
                            <div class="rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->

    <!-- gallery start -->
    <section class="gallery-area pt-120 pb-90">
        <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
            <h5>Photo Showcase</h5>
            <h2>Recent Photo Gallery</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery text-center mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="gallery-thumb">
                            <img src="/img/gallery/gallery-01.jpg" alt="">
                        </div>
                        <div class="gallery-content">
                            <div class="content-view">
                                <a class="popup-image" href="/img/gallery/gallery-01.jpg"><i class="ti-plus"></i></a>
                            </div>
                            <h3>Product Name Here</h3>
                            <span>By: Foundy Theme</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery text-center mb-30" data-aos="fade-up" data-aos-delay="300">
                        <div class="gallery-thumb">
                            <img src="/img/gallery/gallery-02.jpg" alt="">
                        </div>
                        <div class="gallery-content">
                            <div class="content-view">
                                <a class="popup-image" href="/img/gallery/gallery-02.jpg"><i class="ti-plus"></i></a>
                            </div>
                            <h3>Product Name Here</h3>
                            <span>By: Foundy Theme</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery text-center mb-30" data-aos="fade-up" data-aos-delay="500">
                        <div class="gallery-thumb">
                            <img src="/img/gallery/gallery-03.jpg" alt="">
                        </div>
                        <div class="gallery-content">
                            <div class="content-view">
                                <a class="popup-image" href="/img/gallery/gallery-03.jpg"><i class="ti-plus"></i></a>
                            </div>
                            <h3>Product Name Here</h3>
                            <span>By: Foundy Theme</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery text-center mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="gallery-thumb">
                            <img src="/img/gallery/gallery-04.jpg" alt="">
                        </div>
                        <div class="gallery-content">
                            <div class="content-view">
                                <a class="popup-image" href="/img/gallery/gallery-04.jpg"><i class="ti-plus"></i></a>
                            </div>
                            <h3>Product Name Here</h3>
                            <span>By: Foundy Theme</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery text-center mb-30" data-aos="fade-up" data-aos-delay="300">
                        <div class="gallery-thumb">
                            <img src="/img/gallery/gallery-05.jpg" alt="">
                        </div>
                        <div class="gallery-content">
                            <div class="content-view">
                                <a class="popup-image" href="/img/gallery/gallery-05.jpg"><i class="ti-plus"></i></a>
                            </div>
                            <h3>Product Name Here</h3>
                            <span>By: Foundy Theme</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery text-center mb-30" data-aos="fade-up" data-aos-delay="500">
                        <div class="gallery-thumb">
                            <img src="/img/gallery/gallery-06.jpg" alt="">
                        </div>
                        <div class="gallery-content">
                            <div class="content-view">
                                <a class="popup-image" href="/img/gallery/gallery-06.jpg"><i class="ti-plus"></i></a>
                            </div>
                            <h3>Product Name Here</h3>
                            <span>By: Foundy Theme</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- news start -->
    <section class="news-area gray-bg pt-120 pb-90">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
                <h5>Latest Stories</h5>
                <h2>Some Of The Recent Stories</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="news-single mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="news-thumb">
                            <a href="news-details.html">
                                <img src="/img/news/news-01.jpg" alt="">
                            </a>
                        </div>
                        <div class="news-content">
                            <div class="news-date">
                                <h4>28</h4>
                                <span>Dec.</span>
                            </div>
                            <div class="news-head">
                                <span><i class="ti-user"></i> Rasalina De Rley</span>
                                <h3><a href="news-details.html">School Students Need Food.</a></h3>
                            </div>
                            <div class="news-text">
                                <p>Rorem ipsum dolor sit amet, consecteadipis icing deiusmod temincididunt ut labore of
                                    marky.</p>
                            </div>
                            <div class="news-btn">
                                <a href="news-details.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-single mb-30" data-aos="fade-up" data-aos-delay="300">
                        <div class="news-thumb">
                            <a href="news-details.html">
                                <img src="/img/news/news-02.jpg" alt="">
                            </a>
                        </div>
                        <div class="news-content news-content-2">
                            <div class="news-date">
                                <h4>28</h4>
                                <span>Dec.</span>
                            </div>
                            <div class="news-head">
                                <span><i class="ti-user"></i> Rasalina De Rley</span>
                                <h3><a href="news-details.html">Pure Water For Everyone</a></h3>
                            </div>
                            <div class="news-text">
                                <p>Rorem ipsum dolor sit amet, consecteadipis icing deiusmod temincididunt ut labore of
                                    marky.</p>
                            </div>
                            <div class="news-btn">
                                <a href="news-details.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-single mb-30" data-aos="fade-up" data-aos-delay="500">
                        <div class="news-thumb">
                            <a href="news-details.html">
                                <img src="/img/news/news-03.jpg" alt="">
                            </a>
                        </div>
                        <div class="news-content news-content-3">
                            <div class="news-date">
                                <h4>23</h4>
                                <span>Jan.</span>
                            </div>
                            <div class="news-head">
                                <span><i class="ti-user"></i> Rasalina De Rley</span>
                                <h3><a href="news-details.html">Be Part Of The Story</a></h3>
                            </div>
                            <div class="news-text">
                                <p>Rorem ipsum dolor sit amet, consecteadipis icing deiusmod temincididunt ut labore of
                                    marky.</p>
                            </div>
                            <div class="news-btn">
                                <a href="news-details.html">Read More <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news end -->
</main>

<!-- footer start -->
@include('partials.footer')
<!-- footer end -->

<!-- JS here -->
@include('partials.scripts')
</body>
</html>
