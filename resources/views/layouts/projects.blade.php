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
    <!-- page title start -->
    <section class="page-title-area bg-overly slider-area slider-2" data-overlay="5"
             data-background="img/bg/page-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-shape">
                        <img src="img/shape/page-title-shape.png" alt="">
                    </div>
                    <div class="page-title text-center" data-aos="fade-up" data-aos-delay="100">
                        <h1>Projets humanitaires</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Accueil</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Explorez nos projets
                                    humanitaires
                                </li>
                            </ol>
                        </nav>
                        <p class="text-light">Chosissez un projet et donnez votre contribution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- causes start -->
    <section class="causes-area gray-bg pt-120 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="causes-single mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="causes-thumb">
                            <img src="img/causes/causes-01.jpg" alt="">
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
                            <img src="img/causes/causes-02.jpg" alt="">
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
                            <img src="img/causes/causes-03.jpg" alt="">
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
                            <img src="img/causes/causes-04.jpg" alt="">
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
                            <img src="img/causes/causes-05.jpg" alt="">
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
                            <img src="img/causes/causes-06.jpg" alt="">
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
                            <img src="img/causes/causes-07.jpg" alt="">
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
                            <img src="img/causes/causes-08.jpg" alt="">
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
                            <img src="img/causes/causes-09.jpg" alt="">
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
                                    <h5>Objectif</h5>
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
            <div class="row">
                <div class="col-12">
                    <div class="pagination-wrapper text-center mt-35" data-aos="fade-up" data-aos-delay="100">
                        <ul>
                            <li><a href="causes.html#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="causes.html#">01</a></li>
                            <li class="active"><a href="causes.html#">02</a></li>
                            <li><a href="causes.html#">03</a></li>
                            <li><a href="causes.html#"><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="causes.html#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- causes end -->
</main>

<!-- footer start -->
@include('partials.footer')
<!-- footer end -->
<!-- JS here -->
@include('partials.scripts')
</body>
</html>
