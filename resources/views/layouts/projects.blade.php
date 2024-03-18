<!doctype html>
<html class="no-js" lang="fr">
<!--HEAD-->
@include('partials.head')
{{-- @include('partials.dashboard.head') --}}
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
             data-background="/img/bg/page-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-shape">
                        <img src="/img/shape/page-title-shape.png" alt="">
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
   @include('partials.projects_index')
    <!-- causes end -->
</main>

<!-- footer start -->
@include('partials.footer')
<!-- footer end -->
<!-- JS here -->
@include('partials.scripts')
</body>
</html>
