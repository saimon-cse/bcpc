@extends('welcome')

@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="home">
        <div id="carouselExample" class="carousel slide image-shade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active c-item" data-bs-interval="3000">
                    <img src="{{ asset('../assets/img/events/ev-all.jpg') }}" class="d-block w-100 c-img overlay"
                        alt="..." style="height: 100vh;width:auto;">
                </div>
                <div class="carousel-item c-item" data-bs-interval="3000">
                    <img src="{{ asset('../assets/img/events/ev1.jpg') }}" style="height: 100vh;width:auto;"
                        class="d-block w-100 c-img" alt="...">
                </div>
                <div class="carousel-item c-item" data-bs-interval="3000">
                    <img src="{{ asset('../assets/img/events/ev2.jpg') }}" style="height: 100vh;width:auto;"
                        class="d-block w-100 c-img" alt="...">
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- <div class="home-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text " style="font-size: 3rem"><strong>BSMRU Computer and Programming Club</strong></h1>

                        <!--<a class="main-button icon-button" href="#">Get Started!</a>-->
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container " >
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <div class="carousel-caption animated">

                            <h1 class="slider-title  animated fadeInDown" style="animation-delay: 0.5s; animation-duration: 2s; margin-top: -23%">
                                <strong>BSMRU COMPUTER & PROGRAMMING CLUB</strong>
                            </h1>

                            <div class="slider-description animated fadeInDown"
                                style="animation-delay: 0.5s; animation-duration: 2s;">
                                <p class=""> <strong>Upgrade Yourself</strong></p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <!-- End Hero -->

    <main id="main">





        <!-- ======= Portfolio Section ======= -->

        <section id="portfolio" class="portfolio">
            <div class="container">
                <br><br><br>
                <div class="row">
                    <div class="section-title col-lg-9 col-md-9 col-sm-9" data-aos="fade-up">
                        <h2 style="margin-left: 30%">Events </h2>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><a href="#" class="btn-more" style="margin-left: 80px" data-aos="fade-up">More Events</a></div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            {{-- <li data-filter="*" class="filter-active">All</li> --}}
                            <li data-filter=".filter-program" class="filter-active">Programming</li>
                            <li data-filter=".filter-hackathon">Hackathon</li>
                            <li data-filter=".filter-robotics">Robotics</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-others">Others</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-program">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/events/ev1.jpg') }}" class="img-fluid" alt="" style="height: 300px">
                            <div class="portfolio-info">
                                <h4>NCPC 2024</h4>
                                <p>06 March 2024</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/events/ev1.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="NCPC 2024"><i class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-program">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/events/ev2.jpg') }}" class="img-fluid" alt="" style="height: 300px">
                            <div class="portfolio-info">
                                <h4>SUST IUPC 2024</h4>
                                <p>19 February 2024</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/events/ev2.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="SUST IUPC 2024"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-program">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/events/ev3.jpg') }}" class="img-fluid" alt="" style="height: 300px">
                            <div class="portfolio-info">
                                <h4>CoU IUPC 2024</h4>
                                <p>24 November 2024</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/events/ev3.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="CoU IUPC 2024"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-program">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/events/ev-all.jpg') }}" class="img-fluid" alt="" style="height: 300px">
                            <div class="portfolio-info">
                                <h4>BCPC Inauguration</h4>
                                <p>02 November 2024</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/events/ev3.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="BCPC Inauguration"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-program">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/events/ev-all.jpg') }}" class="img-fluid" alt="" style="height: 300px">
                            <div class="portfolio-info">
                                <h4>BCPC Inauguration</h4>
                                <p>02 November 2024</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/events/ev3.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="BCPC Inauguration"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-program">
                        <a href="#">
                            <img src="{{ asset('assets/img/events/see-more.png') }}" class="img-fluid" alt="" style="height: 300px;margin-left:60px">
                        </a>
                    </div>

{{-- <div class="col-lg-4 col-md-6 portfolio-item">
    <img src="assets/img/events/see-more.png" alt="">
</div> --}}



                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= About Us Section ======= -->
        <div class="row content">
            <section id="about" class="about col-lg-5">
                <div class="container">
                    <br><br><br>
                    <div class="section-title" data-aos="fade-up">
                        <h2>About</h2>
                    </div>

                    <div class="row content">
                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                            <p style="margin-left: 80px; text-align: justify;text-justify: inter-word;">
                                BCPC - BSMRU Computer and Programming Club aims to build a user-friendly competitive
                                environment and ready-to-go helping community to help foster the soft and hard skill needed
                                in the era of technological revolution. Whether you are a beginner who does not know
                                anything about computer and programming or an expert, we have place for everyone to improve.
                            </p>
                            <a href="https://www.facebook.com/bcpc.bsmru" class="btn-learn-more" style="margin-left: 80px">Learn More</a>

                        </div>
                    </div>

                </div>
            </section>
            <!-- End About Us Section -->

            <!--Inner gap between about section and notice-->
            <div class="col-1"></div>
            <!--End of Inner gap between about section and notice-->

            <!-- ======= Notice Section ======= -->
            <section id="notices" class="about col-lg-5">
                <div class="container">
                    <br><br><br>
                    <div class="section-title" data-aos="fade-up">
                        <h2>Notices</h2>
                    </div>

                    <div class="feature col-lg-11">

                        {{-- <div class="feature-icon"><p><b>Notice 1</b></p></div> --}}
                        <div class="feature-content" data-aos="fade-up">
                            <h5><a href="#">All the Team member have to be present at 10:30</a></h5>
                            <p><i>28 Feb 2024</i></p><br>
                        </div>
                        <div class="feature-content" data-aos="fade-up">
                            <h5><a href="#">All the Team member have to be present at 10:30</a></h5>
                            <p><i>28 Feb 2024</i></p><br>
                        </div>

                        {{-- <div class="d-flex justify-content-center"> --}}
                        <a href="#" target="_blank"> <button type="button" class="btn btn-primary view-all "
                                data-aos="fade-up">View all</button></a>
                        {{-- </div> --}}

                    </div>

                </div>
            </section>
            <!-- End Notice Section -->
        </div>

        <!-- ======= Services Section ======= -->
        <br><br><br><br>
        <section id="services" class="services">
            <div class="container">
                <br><br>
                <div class="section-title" data-aos="fade-up">
                    <h2>Courses</h2>

                </div>

                <section id="more-services" class="more-services">
                    <div class="container">

                      <div class="row">

                        <div class="col-md-6 d-flex align-items-stretch mt-4">
                          <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                              <h5 class="card-title"><a href="">Alpha Batch </a></h5>
                              <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch mt-4">
                          <div class="card" style='background-image: url("assets/img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                              <h5 class="card-title"><a href="">Beta Batch</a></h5>
                              <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </section><!-- End More Services Section -->

            </div>
        </section><!-- End Services Section -->





        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg" style="scroll-margin-top: 100px;">
            <div class="container">
                <br><br><br><br>
                <div class="section-title" data-aos="fade-up">
                    <h2>Executive Body</h2>
                    {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> --}}
                </div>

                <div class="row">

                    <div class="col-lg-3 row-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/core-panel.png" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Core Panel</h4>
                                <span>President, Vice-President, Tresurer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/core-panel.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Executive Team</h4>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/core-panel.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Designer Team</h4>
                                {{-- <span>CTO</span> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/team/core-panel.png" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Programming Wing</h4>
                                {{-- <span>Accountant</span> --}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->



        <!-- ======= Contact Section ======= -->

        <br><br><br>
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about" style="">
                            <h3>BSMRU Computer and Programming Club</h3>
                            <p style="text-align: justify;text-justify: inter-word;padding-right: 45px ">BCPC - BSMRU Computer and Programming
                                Club aims to build a user-friendly competitive environment and ready-to-go helping community
                                to help foster the soft and hard skill needed in the era of technological revolution.
                                Whether you are a beginner who does not know anything about computer and programming or an
                                expert, we have place for everyone to improve.</p>
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/bcpc.bsmru" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200" >
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>Temporary Campus(Gurudayal College)<br>Kishoreganj, Bangladesh</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>bcpc@bsmru.ac.bd</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+8801304946141</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <br><br><br>
@endsection
