<!DOCTYPE html>
<html class="no-js" lang="en">

  <?php echo $__env->make('element.head' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<body>
    
    <?php echo $__env->make('element.header' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('element.slider' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
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
                                        Tandis est une societe de production de transformation , distribution et commercialisation des produits avicoles

                                        Nous sommes ume entreprise qui compte revolutionner le secteur avicole africain et plus precisement camerounais . La cherte de la vie et en particulier celle des produits comme la volaille est l'element declencheur du projet ( Nous voulons faire rayonner l'activite avicole camerounaise qui connais de nos jour de nombreuses difficultes.)
                                    </p>
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
                                                        Solar Energy . Solar Energy .
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
                        <th scope="col text-bg-primary">Statut</th>
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
                        <td >15 février 2024</td>
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
                                Solar Renewable Services for <br />
                                <span>A Greener World</span>
                            </h2>
                        </div>
                    </div>
                </div>



                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="btn btn-primary">Another link</a>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>



                <div class="row">
                    <div class="col-lg-6">
                        <div class="tj-service-item-two">
                            <div class="service-icon-box">
                                <div class="service-icon hover-shape-border">
                                    <i class="flaticon-environmental"></i>
                                    <div class="icon-shape">
                                        <span class="border-shadow shadow-1"></span>
                                        <span class="border-shadow shadow-2"></span>
                                        <span class="border-shadow shadow-3"></span>
                                    </div>
                                </div>
                                <div class="item-shape">
                                    <img src="<?php echo e(asset('assets/images/shape/shape-1.svg')); ?>" alt="Shape" />
                                </div>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Hydropower Plants</a></h4>
                                <div class="desc">
                                    <p>
                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary, making words,
                                    </p>
                                </div>
                                <div class="read-more">
                                    <a class="link" href="service-details.html">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tj-service-item-two">
                            <div class="service-icon-box">
                                <div class="service-icon hover-shape-border">
                                    <i class="flaticon-save-energy"></i>
                                    <div class="icon-shape">
                                        <span class="border-shadow shadow-1"></span>
                                        <span class="border-shadow shadow-2"></span>
                                        <span class="border-shadow shadow-3"></span>
                                    </div>
                                </div>
                                <div class="item-shape">
                                    <img src="<?php echo e(asset('assets/images/shape/shape-1.svg')); ?>" alt="Shape" />
                                </div>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Fossil Resources</a></h4>
                                <div class="desc">
                                    <p>
                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary, making words,
                                    </p>
                                </div>
                                <div class="read-more">
                                    <a class="link" href="service-details.html">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tj-service-item-two">
                            <div class="service-icon-box">
                                <div class="service-icon hover-shape-border">
                                    <i class="flaticon-hydropower"></i>
                                    <div class="icon-shape">
                                        <span class="border-shadow shadow-1"></span>
                                        <span class="border-shadow shadow-2"></span>
                                        <span class="border-shadow shadow-3"></span>
                                    </div>
                                </div>
                                <div class="item-shape">
                                    <img src="<?php echo e(asset('assets/images/shape/shape-1.svg')); ?>" alt="Shape" />
                                </div>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Maximize Green Resources</a></h4>
                                <div class="desc">
                                    <p>
                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary, making words,
                                    </p>
                                </div>
                                <div class="read-more">
                                    <a class="link" href="service-details.html">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tj-service-item-two">
                            <div class="service-icon-box">
                                <div class="service-icon hover-shape-border">
                                    <i class="flaticon-green-energy"></i>
                                    <div class="icon-shape">
                                        <span class="border-shadow shadow-1"></span>
                                        <span class="border-shadow shadow-2"></span>
                                        <span class="border-shadow shadow-3"></span>
                                    </div>
                                </div>
                                <div class="item-shape">
                                    <img src="<?php echo e(asset('assets/images/shape/shape-1.svg')); ?>" alt="Shape" />
                                </div>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Future with Green Energy</a></h4>
                                <div class="desc">
                                    <p>
                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary, making words,
                                    </p>
                                </div>
                                <div class="read-more">
                                    <a class="link" href="service-details.html">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== Service Section End =========-->

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
                                    <span class="sub-title">Years Experience</span>
                                </div>
                            </div>
                            <div class="counter-item-two">
                                <div class="counter-icon">
                                    <i class="flaticon-completed-task"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="239">0</span>+</div>
                                    <span class="sub-title">Projects Completed</span>
                                </div>
                            </div>
                            <div class="counter-item-two">
                                <div class="counter-icon">
                                    <i class="flaticon-customer-service"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="230">0</span>+</div>
                                    <span class="sub-title">Happy Customers</span>
                                </div>
                            </div>
                            <div class="counter-item-two">
                                <div class="counter-icon">
                                    <i class="flaticon-timeline"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="380">0</span>+</div>
                                    <span class="sub-title">Awards Milestones</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="counter-wrapper">
                            <img src="<?php echo e(asset('assets/images/banner/ban13.jpeg')); ?>" class="img-fluid max-width: 200px;" alt="Image" />
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
                                <span class="sub-title">Our Team</span>
                                <h2 class="sec-title">
                                    Inspiring Interiors Exceptional <br />
                                    <span>Of Experiences</span>
                                </h2>
                            </div>
                            <div class="right-content">
                                <p>
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse fugiat quo
                                    voluptas nulla pariatur?"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tj-team-item">
                            <div class="team-image">
                                <img src="<?php echo e(asset('assets/images/team/team-1.jpg')); ?>" alt="Image" />
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
                                <img src="<?php echo e(asset('assets/images/team/team-2.jpg')); ?>" alt="Image" />
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
                                <img src="<?php echo e(asset('assets/images/team/team-3.jpg')); ?>" alt="Image" />
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
                                <img src="<?php echo e(asset('assets/images/team/team-4.jpg')); ?>" alt="Image" />
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
                            <span class="sub-title">Testimonial</span>
                            <h2 class="sec-title">
                                Check Our Clients <br />
                                <span>Feedback</span>
                            </h2>
                        </div>
                        <div class="swiper tj-testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="desc">
                                            <p>
                                                ‘’Lorem Ipsum is not simply random text. It has roots in a piece of
                                                classical Latin literature from 45 BC, making it over 2000 years
                                                old. Richard McClintock, a Latin professor at Hampden’’
                                            </p>
                                        </div>
                                        <div class="testimonial-auother">
                                            <div class="auother-image">
                                                <img src="<?php echo e(asset('assets/images/testimonial/testi-small-1.png')); ?>" alt="Image" />
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
                                                ‘’Lorem Ipsum is not simply random text. It has roots in a piece of
                                                classical Latin literature from 45 BC, making it over 2000 years
                                                old. Richard McClintock, a Latin professor at Hampden’’
                                            </p>
                                        </div>
                                        <div class="testimonial-auother">
                                            <div class="auother-image">
                                                <img src="<?php echo e(asset('assets/images/testimonial/testi-small-2.png')); ?>" alt="Image" />
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
                                                ‘’Lorem Ipsum is not simply random text. It has roots in a piece of
                                                classical Latin literature from 45 BC, making it over 2000 years
                                                old. Richard McClintock, a Latin professor at Hampden’’
                                            </p>
                                        </div>
                                        <div class="testimonial-auother">
                                            <div class="auother-image">
                                                <img src="<?php echo e(asset('assets/images/testimonial/testi-small-3.png')); ?>" alt="Image" />
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
                                            <img src="<?php echo e(asset('assets/images/testimonial/testi-big-1.jpg')); ?>" alt="Image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-image">
                                            <img src="<?php echo e(asset('assets/images/testimonial/testi-big-2.jpg')); ?>" alt="Image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-image">
                                            <img src="<?php echo e(asset('assets/images/testimonial/testi-big-3.jpg')); ?>" alt="Image" />
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
        <section class="tj-faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-sec-heading-four text-center">
                            <span class="sub-title">Our FAQ</span>
                            <h2 class="sec-title">Frequently Asked <span>Question</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion" id="ItemOne">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. What is Included in your Services?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#ItemOne">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. What Warranties do I Have For Installation?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#ItemOne">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3. How fast I get my Order?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#ItemOne">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        4. What are the advantages of solar energy?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#ItemOne">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="ItemTwo">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        5. How Much do Energy Panels Cost?
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#ItemTwo">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        6. How Mech Energy Can a Solar Panel Generate?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#ItemTwo">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        7. What are the advantages of solar energy?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#ItemTwo">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        8. What is Included in your Services?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#ItemTwo">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        9. Majority have do Energy Panels Cost?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#ItemTwo">
                                    <div class="accordion-body">
                                        <strong>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in.</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== Faq Section End =========-->

        <!--=========== Blog Section Start =========-->
        <section class="tj-blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-content-area">
                            <div class="tj-sec-heading-four">
                                <span class="sub-title">Recent Blog Article</span>
                                <h2 class="sec-title">Latest Story <span>From Blog</span></h2>
                            </div>
                            <div class="blog-desc">
                                <p>
                                    Lorem Ipsum has been the industry's standard text ever since the 1500s,
                                    unchanged.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tj-blog-item">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="<?php echo e(asset('assets/images/blog/blog-1.jpg')); ?>" alt="Image" /></a>
                            </div>
                            <div class="blog-text-area">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> Dec 1, 2023</li>
                                        <li><i class="flaticon-chat"></i> Comment (1)</li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <h5 class="title">
                                        <a href="blog-details.html">Winds of Change in the Tubine Service Industry</a>
                                    </h5>
                                    <div class="tj-blog-button d-flex">
                                        <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tj-blog-item">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="<?php echo e(asset('assets/images/blog/blog-2.jpg')); ?>" alt="Image" /></a>
                            </div>
                            <div class="blog-text-area">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> May 7, 2023</li>
                                        <li><i class="flaticon-chat"></i> Comment (1)</li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <h5 class="title">
                                        <a href="blog-details.html">Saw Scond Earth Do Grass Very Hot Wathers</a>
                                    </h5>
                                    <div class="tj-blog-button d-flex">
                                        <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tj-blog-item">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="<?php echo e(asset('assets/images/blog/blog-3.jpg')); ?>" alt="Image" /></a>
                            </div>
                            <div class="blog-text-area">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="flaticon-calendar"></i> Jan 5, 2023</li>
                                        <li><i class="flaticon-chat"></i> Comment (1)</li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <h5 class="title">
                                        <a href="blog-details.html">Heaced Maece Nasera Tortor Convallis Dise Ann
                                            Enget</a>
                                    </h5>
                                    <div class="tj-blog-button d-flex">
                                        <a class="tj-secondary-btn btn" href="blog-details.html">Read More <i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>" alt="Shape" />
                                <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>" alt="Shape" />
                            </div>
                            <div class="video-shape2">
                                <img class="shape-1" src="<?php echo e(asset('assets/images/shape/shape-2.svg')); ?>" alt="Shape" />
                                <img class="shape-2" src="<?php echo e(asset('assets/images/shape/shape-3.svg')); ?>" alt="Shape" />
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

        <?php echo $__env->make('element.footer' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /home/ubix-group/sites/TandisApp/resources/views/welcome.blade.php ENDPATH**/ ?>