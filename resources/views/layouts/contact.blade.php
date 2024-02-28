
<!doctype html>
<html class="no-js" lang="zxx">
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
                        <h1>Contactez-nous</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Accueil</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Contactez-Nous</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- contact info start -->
    <section class="contact-info-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-contact mb-30" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Phone Number</h4>
                            <p>+1255 - 568 - 6523</p>
                            <p>+1255 - 568 - 6523</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-contact mb-30" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-icon contact-icon-2">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email Adress</h4>
                            <p>foundyinfo@gmail.com</p>
                            <p>Info@webmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-contact mb-30" data-aos="fade-up" data-aos-delay="500">
                        <div class="contact-icon contact-icon-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Visit Here</h4>
                            <p>Bowery St., New York, NY 10013,USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info end -->

    <!-- contact form start -->
    <section class="contact-form pb-120">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12">
                    <form class="give-form" action="contact.html#">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <label>Full Name<span>*</span></label>
                                <input type="text" name="fname" placeholder="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label>Mail Address<span>*</span></label>
                                <input type="email" name="email" placeholder="Mail Address">
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label>Phone Number<span>*</span></label>
                                <input type="number" name="number" placeholder="Number">
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <label>Subject<span>*</span></label>
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-xl-12">
                                <label>Your Massage</label>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Massage"></textarea>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-bottom text-center" data-aos="fade-up" data-aos-delay="300">
                                    <div class="form-btn">
                                        <button class="thm-btn thm-btn-3" type="submit">Get in tounch</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form end -->
</main>

<!-- footer start -->
@include('partials.footer')
<!-- footer end -->

<!-- JS here -->
@include('partials.scripts')
</body>
</html>
