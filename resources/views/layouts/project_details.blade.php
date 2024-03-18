
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
    <section class="page-title-area bg-overly slider-area slider-2" data-overlay="5" data-background="/img/bg/page-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-shape">
                        <img src="/img/shape/page-title-shape.png" alt="">
                    </div>
                    <div class="page-title text-center" data-aos="fade-up" data-aos-delay="100">
                        <h1>Détails du projet</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Accueil</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Details du projet</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- causes details start -->
    <section class="causes-details pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="causes-dtls-content mb-40">
                        <div style="height: :700px" class="d-flex align-items-center mx-2 row">
                            <div class="h-100 col-4" data-aos="fade-up" data-aos-delay="100">
                                <img  style="height:50vh; width:90%; border-radius: 5%" src="{{ asset($project->image) }}" alt="image ">
                            </div>
                            <div class="h-100 col-8">
                                <div class="causes-dtls-text pb-15 mb-25" data-aos="fade-up" data-aos-delay="100">
                                    <h2>{{ $project->title }}</h2>
                                    <p>{{ $project->description }}</p>
                                </div>
                                <ul class="border-bottom pb-2 d-flex justify-content-between mx-2 raised">
                                    <li>
                                        <h5>Start Date</h5>
                                        <span class="rate">{{ $project->start_date }}</span>
                                    </li>
                                    <li>
                                        <h5>End Date</h5>
                                        <span class="rate">{{ $project->end_date }}</span>
                                    </li>
                                    <li>
                                        <h5>Goal</h5>
                                        <span class="rate">{{$project->financial_goal." "}} CFA</span>
                                    </li>
                                    <li>
                                        <h5>Fonds collectés</h5>
                                        <span class="rate">{{ $project->fund_collected." " }}CFA</span>
                                    </li>
                                </ul>
                            </div>
                        </div>




                        <div class="donate-amount mb-35" data-aos="fade-up" data-aos-delay="100">
                            <div class="donate-title mt-2 mb-35">
                                <h3>Donate now</h3>
                                <p><span>1</span> Choose your donate amount</p>
                            </div>
                            <div class="custom-donate mt-30 mb-30">
                                <span><span>$</span></span>
                                <input type="text" placeholder="$250">
                            </div>
                            <ul class="amount mb-30">
                                <li>$100.00</li>
                                <li class="active">$250.00</li>
                                <li>$500.00</li>
                                <li>$1000.00</li>
                                <li>Custom Amount</li>
                            </ul>
                        </div>
                        <div class="give-payment-mode-select" data-aos="fade-up" data-aos-delay="100">
                            <h3>Select Payment Method</h3>
                            <div class="give-payment-mode-wrap">
                                <ul class="give-gateway-radio-list">
                                    <li class="give-gateway-option-selected">
                                        <input type="radio" name="payment-mode" class="give-gateway" id="give-gateway-manual-232-1" value="manual" checked="checked">

                                        <label for="give-gateway-manual-232-1" class="give-gateway-option" id="give-gateway-option-manual"> Test Donation</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment-mode" class="give-gateway" id="give-gateway-offline-232-1" value="offline">

                                        <label for="give-gateway-offline-232-1" class="give-gateway-option" id="give-gateway-option-offline"> Offline Donation</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="payment-mode" class="give-gateway" id="give-gateway-paypal-232-1" value="paypal">

                                        <label for="give-gateway-paypal-232-1" class="give-gateway-option" id="give-gateway-option-paypal"> PayPal</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form class="give-form" action="causes-details.html#" data-aos="fade-up" data-aos-delay="100">
                            <div class="form-title">
                                <h3>personal Info !</h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <label>First Name<span>*</span></label>
                                    <input type="text" name="fname" placeholder="Your Name">
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label>Last Name<span>*</span></label>
                                    <input type="email" name="lname" placeholder="Your Email">
                                </div>
                                <div class="col-xl-12">
                                    <label>Mail Address<span>*</span></label>
                                    <input type="email" name="email" placeholder="Mail Address">
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-bottom d-flex flex-wrap align-items-center justify-content-between w-100">
                                        <div class="form-btn mb-30">
                                            <button class="thm-btn thm-btn-3" type="submit">Donate Now</button>
                                        </div>
                                        <div class="form-rate mb-30">
                                            <p>Total Donation <span>$250</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="causes-dtls-thumb mb-30 mt-20" data-aos="fade-up" data-aos-delay="100">
                            <img src="/img/causes/details/causes-dtls-02.jpg" alt="">
                        </div> --}}
                        {{-- <div class="text mb-35" data-aos="fade-up" data-aos-delay="100">
                            <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <blockquote data-aos="fade-up" data-aos-delay="100">
                            <p>Rorem ipsum dolor sit amet, consectetur adipisicing sedeiusmotempor incididunt ut labore et dolore magna aliqua. Ut enaminiveni amqunostrud exercitation derker.ore et dolore magna aliqua. Ut enim ad miniveniam.</p>
                            <cite><a href="causes-details.html#">Mohammad Wasim Mia</a></cite>
                        </blockquote> --}}
                        <div class="text mt-40" data-aos="fade-up" data-aos-delay="100">
                            <h4>Our Mission</h4>
                            <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.Rorem ipsum dolor sit amet, consectetur adipisicingsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.magna aliqua. dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <div class="causes-video pos-rel mb-30 mt-30" data-aos="fade-up" data-aos-delay="100">
                            <div class="video-thumb">
                                <img src="/img/causes/details/causes-dtls-video.jpg" alt="">
                            </div>
                            <a class="popup-video video-icon" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><img src="/img/icon/play.png" alt=""></a>
                        </div>
                        <div class="text" data-aos="fade-up" data-aos-delay="100">
                            <h4>Our Goal</h4>
                            <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.Rorem ipsum dolor sit amet, consectetur adipisicingsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.magna aliqua. dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>

{{--
                <div class="col-xl-4 col-lg-4">
                    <div class="widget mb-40" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="widget-header">Catagories</h3>
                        <ul class="widget-wrapper">
                            <li>
                                <a class="d-flex justify-content-between" href="causes-details.html#">
                                    <span><i class="fas fa-angle-double-right"></i>Charity</span>
                                    <span>08</span>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between" href="causes-details.html#">
                                    <span><i class="fas fa-angle-double-right"></i>Donation</span>
                                    <span>134</span>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between" href="causes-details.html#">
                                    <span><i class="fas fa-angle-double-right"></i>Food & Water</span>
                                    <span>45</span>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between" href="causes-details.html#">
                                    <span><i class="fas fa-angle-double-right"></i>Kids in Africa</span>
                                    <span>456</span>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-between" href="causes-details.html#">
                                    <span><i class="fas fa-angle-double-right"></i>Donation</span>
                                    <span>46</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget mb-40" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="widget-header">Most Popular Post</h3>
                        <ul class="post">
                            <li class="d-flex align-items-center">
                                <div class="widget-post-thumb">
                                    <a href="news-details.html"><img src="/img/news/news-widget/img1.jpg" alt="blog"></a>
                                </div>
                                <div class="widget-post-content">
                                    <a href="news-details.html">Lorem ipsum dolor, sit amet consectetur adipisicing.</a>
                                    <div class="widget-posts-meta">Fabruary 08, 2021</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="widget-post-thumb">
                                    <a href="news-details.html"><img src="/img/news/news-widget/img2.jpg" alt="blog"></a>
                                </div>
                                <div class="widget-post-content">
                                    <a href="news-details.html">Lorem, ipsum dolor sit amet consectetur adipisicing.</a>
                                    <div class="widget-posts-meta">January 03, 2021</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="widget-post-thumb">
                                    <a href="news-details.html"><img src="/img/news/news-widget/img3.jpg" alt="blog"></a>
                                </div>
                                <div class="widget-post-content">
                                    <a href="news-details.html">Lorem ipsum dolor sit amet consectetur.</a>
                                    <div class="widget-posts-meta">August 19, 2021</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget instagram mb-40" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="widget-header">Photo Showcase</h3>
                        <ul>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-01.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-02.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-03.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-04.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-05.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-06.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-07.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-08.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="causes-details.html#"><img src="/img/instagram/ins-09.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- causes details end -->
</main>

<!-- footer start -->
@include('partials.footer')
<!-- footer end -->

<!-- JS here -->
@include('partials.scripts')
</body>
</html>
