<!DOCTYPE html>
<html class="no-js" lang="en">

<?php echo $__env->make('element.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('element.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('element.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--=========== About Section Start =========-->
    <section class="tj-about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="about-content-one">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Qui Somme Nous</span>
                            <h2 class="sec-title">
                                Notre mission <br />
                                <span>Disponibilité et Accessibilité</span>
                            </h2>
                            <div class="desc">
                                <p>
                                    TANDIS INVEST a pour mission d'accompagner l'investissement dans des PMEs
                                    et Start-Ups qui déploient leurs services en Afrique, ou permettent de valoriser
                                    l’identité africaine à travers le Monde, et qui sont innovantes, à fort impact
                                    social et plutôt prometteuses dans cet ecosystème. </p>
                            </div>
                        </div>
                        <div class="fun-fact-area">
                            <div class="counter-item">
                                <div class="about-icon">
                                    <i class="flaticon-solar-panel-1"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count">
                                        <span class="odometer" data-count="14000">0</span>+
                                    </div>
                                    <span class="sub-title">Installé dans 2 villes</span>
                                </div>
                            </div>
                            <div class="counter-item">
                                <div class="about-icon">
                                    <i class="flaticon-solar-cell"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="100">0</span>%</div>
                                    <span class="sub-title">Livré partout au Cameroun</span>
                                </div>
                            </div>
                        </div>
                        <div class="tj-about-button d-flex">
                            <a class="tj-primary-btn btn" href="about-us.html">
                                Investir <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="about-image-group">
                        <div class="about-lg-image">
                            <img src="assets/images/banner/ban6.jpg" alt="Image" />
                            <div class="about-circle">
                                <div class="video-play">
                                    <a class="venobox popup-videos-button" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                        <i class="fa-solid fa-play"></i>
                                        <svg class="shape-1" viewBox="0 0 100 100" width="150" height="100">
                                            <defs>
                                                <path id="circle" d="
                                                          M 50, 50
                                                          m -37, 0
                                                          a 37,37 0 1,1 74,0
                                                          a 37,37 0 1,1 -74,0" />
                                            </defs>
                                            <text font-size="16">
                                                <textPath xlink:href="#circle" class="shape-1">
                                                    Tandis . Investement .
                                                </textPath>
                                            </text>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="sec-shape">
            <img src="<?php echo e(asset('assets/images/shape/service-1.svg')); ?>" alt="Shape" />
        </div>
    </section>
    <!--=========== About Section End =========-->


    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading text-center">
                    <span class="sub-title">Nos Phases</span>
                    <h2 class="sec-title">
                        Prévision pour l'année <br />
                        <span>2024</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="card table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Phases</th>
                        <th scope="col">Début</th>
                        <th scope="col">Fin</th>
                        <th scope="col">Montant</th>
                        <th scope="col tj-color-theme-primary">Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th scope="row">Phase 1</th>
                        <td>15 janvier 2024</td>
                        <td>15 février 2024</td>
                        <td>1000.000</td>
                        <td>Terminer</td>
                    </tr>
                    <tr>
                        <th scope="row">Phase 2</th>
                        <td>15 février 2024</td>
                        <td>15 mars 2024</td>
                        <td>1000.000</td>
                        <td>En-cour</td>
                    </tr>
                    <tr>
                        <th scope="row">Phase 3</th>
                        <td>15 mars 2024</td>
                        <td>15 avril 2024</td>
                        <td>1000.000</td>
                        <td>---</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    

    <!--=========== Projet Section Start =========-->


    <section class="tj-service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Nos projets</span>
                        <h2 class="sec-title">
                            Liste des projets en cours<br />
                            <span>2024</span>
                        </h2>
                    </div>
                </div>
            </div>



            <?php $__currentLoopData = $enterprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enterprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">

                        <div class="card h-100 text-center">
                            <img src="<?php echo e(asset('assets/images/banner/ban1.jpg')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($enterprise->name_enterprise); ?></h5>
                                <p class="sec-title">Objectif : <?php echo e($enterprise->objectif); ?></p>
                                <p class="card-text text-success">Montant actuel: <?php echo e($enterprise->montant_actuel); ?></p>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <div class="card-footer d-flex  text-right justify-content-center">
                                    <a href="<?php echo e(route('invest.create', ['enterprise' => $enterprise->id])); ?>"
                                        class="btn btn-success btn-lg btn-block">
                                        Investir </a>
                                    

                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated <?php echo e($enterprise->created_at); ?></small>
                            </div>
                        </div>

                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!--=========== Project Section End =========-->

    <!--=========== Counter Section Start =========-->
    <section class="tj-counter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="counter-content-area">
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-experience"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="48">0</span>+</div>
                                <span class="sub-title">Année d'Experience</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-completed-task"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="239">0</span>+</div>
                                <span class="sub-title">Projets Complets</span>
                            </div>
                        </div>
                        <div class="counter-item-two">
                            <div class="counter-icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="230">0</span>+</div>
                                <span class="sub-title">Clients Contents</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="counter-wrapper">
                        <img src="<?php echo e(asset('assets/images/banner/ban13.jpeg')); ?>" class="img-fluid max-width: 200px;"
                            alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Counter Section End =========-->

    <!--=========== Process Section Start =========-->
    <section class="tj-process-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center">
                        <span class="sub-title">Our Working Process</span>
                        <h2 class="sec-title">
                            Inspiring Interiors Exceptional <br />
                            <span>Of Experiences</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tj-process-item">
                        <img src="<?php echo e(asset('assets/images/service/a1.jpeg')); ?>" alt="Image" />
                        <div class="process-content">
                            <div class="process-icon">
                                <i class="flaticon-renewable-energy"></i>
                            </div>
                            <div class="process-title">
                                <h5 class="title">Charcutterie</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-process-item">
                        <img src="<?php echo e(asset('assets/images/service/a9.jpeg')); ?>" alt="Image" />
                        <div class="process-content">
                            <div class="process-icon">
                                <i class="flaticon-quality"></i>
                            </div>
                            <div class="process-title">
                                <h5 class="title">Research & Analysis</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-process-item">
                        <img src="<?php echo e(asset('assets/images/service/a3.jpeg')); ?>" alt="Image" />
                        <div class="process-content">
                            <div class="process-icon">
                                <i class="flaticon-solar-energy-2"></i>
                            </div>
                            <div class="process-title">
                                <h5 class="title">Renewable Energy</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Process Section End =========-->

    <!--=========== Team Section Start =========-->
    <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content-area">
                        <div class="tj-sec-heading">
                            <span class="sub-title">Notre Equipes et évènements récentes</span>
                            <h2 class="sec-title">
                                Evènements marquantes <br />
                                <span>de 2024</span>
                            </h2>
                        </div>
                        <div class="right-content">
                            <p>
                                Pour mener a bien le projets , les parts sociales representant 40% du capital
                                de l'entreprise on ete mis a la disposition du public .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="<?php echo e(asset('assets/images/team/t1.jpeg')); ?>" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Albert Flores</h5>
                                <span class="sub-title">Technician</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="<?php echo e(asset('assets/images/team/t2.jpeg')); ?>" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Leslie Alexan</h5>
                                <span class="sub-title">Solar Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="<?php echo e(asset('assets/images/team/t3.jpeg')); ?>" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Sony Miltar</h5>
                                <span class="sub-title">Solar Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tj-team-item">
                        <div class="team-image">
                            <img src="<?php echo e(asset('assets/images/team/t6.jpeg')); ?>" alt="Image" />
                        </div>
                        <div class="team-content">
                            <div class="team-auother">
                                <h5 class="title">Marko Daniel</h5>
                                <span class="sub-title">Wind Expert</span>
                            </div>
                            <div class="team-share">
                                <ul class="dot-style team-social">
                                    <li>
                                        <i class="fa-regular fa-share-nodes"></i>
                                        <ul class="dot-style team-social-icon">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Team Section End =========-->

    <!--=========== Testimonial Section Start =========-->
    <section class="tj-testimonial-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="tj-sec-heading">
                        <span class="sub-title">Témoignages</span>
                        <h2 class="sec-title">
                            Avis des clients
                            <br />
                            <span>Experiences</span>
                        </h2>
                    </div>
                    <div class="swiper tj-testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="desc">
                                        <p>
                                            ‘’J'ai commencé à investir en bourse il y a quelques années et j'ai réalisé
                                            des
                                            profits conséquents. Je suis convaincu que l'investissement en bourse est un
                                            excellent moyen de faire fructifier son argent sur le long terme. Bien sûr,
                                            il
                                            est important de se renseigner et de prendre le temps de bien choisir ses
                                            investissements.’’
                                        </p>
                                    </div>
                                    <div class="testimonial-auother">
                                        <div class="auother-image">
                                            <img src="<?php echo e(asset('assets/images/testimonial/te1.jpg')); ?>"
                                                alt="Image" />
                                        </div>
                                        <div class="auother-header">
                                            <h5 class="title">
                                                Richard <span class="active-text">Thomas</span>
                                            </h5>
                                            <span class="sub-title">Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="desc">
                                        <p>
                                            ‘’J'ai investi dans une jeune entreprise il y a un an et je suis très
                                            satisfait
                                            des résultats. L'entreprise est en pleine croissance et je suis convaincu
                                            qu'elle
                                            a un grand potentiel. Je suis ravi d'avoir participé à son développement.’’
                                        </p>
                                    </div>
                                    <div class="testimonial-auother">
                                        <div class="auother-image">
                                            <img src="<?php echo e(asset('assets/images/testimonial/te2.jpg')); ?>"
                                                alt="Image" />
                                        </div>
                                        <div class="auother-header">
                                            <h5 class="title">
                                                Richard <span class="active-text">Thomas</span>
                                            </h5>
                                            <span class="sub-title">Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tj-testimonial-item">
                                    <div class="desc">
                                        <p>
                                            ‘’J'ai souscrit un contrat d'assurance-vie il y a plusieurs années et je
                                            suis très satisfait de mon rendement. C'est un excellent moyen de se
                                            protéger
                                            financièrement et de préparer sa retraite. Je recommande vivement
                                            l'assurance-vie
                                            à tous ceux qui recherchent un placement sûr et fiable.’’
                                        </p>
                                    </div>
                                    <div class="testimonial-auother">
                                        <div class="auother-image">
                                            <img src="<?php echo e(asset('assets/images/testimonial/te3.jpg')); ?>"
                                                alt="Image" />
                                        </div>
                                        <div class="auother-header">
                                            <h5 class="title">
                                                Richard <span class="active-text">Thomas</span>
                                            </h5>
                                            <span class="sub-title">Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-navigation">
                            <div class="testimonial-prev"><i class="flaticon-right-arrow"></i></div>
                            <div class="testimonial-next">
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial-wrapper">
                        <div class="swiper tj-testimonial-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-image">
                                        <img src="<?php echo e(asset('assets/images/testimonial/te1.jpg')); ?>" alt="Image" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-image">
                                        <img src="<?php echo e(asset('assets/images/testimonial/te2.jpg')); ?>" alt="Image" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-image">
                                        <img src="<?php echo e(asset('assets/images/testimonial/te3.jpg')); ?>" alt="Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <img src="<?php echo e(asset('assets/images/icon/test-quote.svg')); ?>" alt="Icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End =========-->

    <!--=========== Faq Section Start =========-->
    
    <!--=========== Faq Section End =========-->

    <!--=========== Blog Section Start =========-->
    
    <!--=========== Blog Section End =========-->

    <!--=========== Video Section Start =========-->
    <section class="tj-video-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-video-area">
                        <div class="video-image">
                            <img src="<?php echo e(asset('assets/images/project/video-image.jpg')); ?>" alt="Image" />
                        </div>
                        <div class="video-box">
                            <div class="circle pulse video-icon">
                                <a class="popup-videos-button" data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="video-shape">
                            <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>"
                                alt="Shape" />
                            <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>"
                                alt="Shape" />
                        </div>
                        <div class="video-shape2">
                            <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>"
                                alt="Shape" />
                            <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-sec-shape">
            <div class="video-shape3">
                <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>" alt="Shape" />
                <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>" alt="Shape" />
            </div>
            <div class="video-shape4">
                <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>" alt="Shape" />
                <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>" alt="Shape" />
            </div>
        </div>
        <div class="video-sec-shape2">
            <div class="video-shape5">
                <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>" alt="Shape" />
                <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>" alt="Shape" />
            </div>
            <div class="video-shape6">
                <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>" alt="Shape" />
                <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>" alt="Shape" />
            </div>
        </div>
    </section>
    <!--=========== Video Section End =========-->

    <?php echo $__env->make('element.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/ubix-group/sites/TandisApp/resources/views/welcome.blade.php ENDPATH**/ ?>