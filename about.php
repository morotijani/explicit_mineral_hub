<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'About us - ';
   $navClass = "navbar-light w-100";
   include  __DIR__ . '/system/inc/head.php';
   include  __DIR__ . '/system/inc/topnav.php';
?>

    <div class="pattern-square"></div>
    <section class="bg-light py-5 py-lg-8 bg-opacity-50" style="background-image: url(<?= PROOT; ?>assets/media/back.jpeg); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div>
                        <h1 class="mb-0">About us</h1>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= PROOT; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class="pattern-square"></div>
    <!--Who we are start-->
    <section class="mb-7 py-xl-9 py-5">
        <div class="container pb-xl-9 pb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 col-md-12">
                    <div class="me-xl-8">
                        <h1 class="mb-3">Who we are</h1>
                        <p class="lead mb-4">Established In Ghana Since 2010.</p>
                        <p class="mb-6 me-xl-6">
                        We are a registered Ghanaian company established in 2010 under the government of Ghana Act 1962(N0. 151). We provide expert consultancy in exploration, mining as well as Gold trading within Ghana and beyond. We have established ourselves strategically to assist mining groups around the globe with practical skill to improve the mining industry.
                        </p>
                        <p class="mb-6 me-xl-6">
                        M. Enterprise Ghana (MEG) Limited support investors (both domestic and foreign) in gold exploration, mining, purchasing and supply. We are among the leading mining services industries in West-Africa with our head office in Konongo, Ashanti Region of Ghana. We have a huge base of satisfied clients within Africa and other continents at large.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <figure>
                        <img src="<?= PROOT; ?>assets/media/back-4.jpg" alt="career" class="img-fluid rounded-3" />
                    </figure>
                </div>
            </div>
        </div>
        <div class="container">
            <div
                class="swiper-container swiper"
                id="swiper-1"
                data-pagination-type=""
                data-speed="400"
                data-space-between="100"
                data-pagination="true"
                data-navigation="false"
                data-autoplay="true"
                data-autoplay-delay="3000"
                data-breakpoints='{"480": {"slidesPerView": 2}, "768": {"slidesPerView": 3}, "1024": {"slidesPerView": 5}}'>
                <div class="swiper-wrapper pb-6">
                    <div class="swiper-slide">
                        <figure class="text-center">
                            <img src="<?= PROOT; ?>assets/media/client-01.png" width="100" alt="logo" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="text-center">
                            <img src="<?= PROOT; ?>assets/media/client-02.png" width="100" alt="logo" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="text-center">
                            <img src="<?= PROOT; ?>assets/media/client-03.png" width="100" alt="logo" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="text-center">
                            <img src="<?= PROOT; ?>assets/media/client-04.png" width="100" alt="logo" />
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="text-center">
                            <img src="<?= PROOT; ?>assets/media/client-02.png" width="100" alt="logo" />
                        </figure>
                    </div>
                    <!-- Add more slides as needed -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-navigation">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Who we are end-->

    <!--Visualize & plan start-->
    <section class="my-xl-7 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-12" data-cue="slideInLeft">
                    <div data-cue="fadeIn">
                        <small class="text-warning text-uppercase ls-md fw-semibold">Our Mission</small>
                        <div class="mb-5 mt-4">
                            <h2 class="mb-3">Build the perfect workflow for every project.</h2>
                            <p class="mb-0 lead">M. Enterprise Ghana Ltd (MEG) has a focus to provide excellent and reliable services to its cherished clients across the globe.</p>
                        </div>

                        <ul class="list-unstyled mb-5">
                            <li class="mb-2 d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">We aspire to be the industry leader that provides quality service that exceeds the expectations of our clients and all other stakeholders.</span>
                            </li>
                            <li class="mb-2 d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">We seek to be the number one destination for exploration, mining and Gold trading consultant across the globe.</span>
                            </li>
                        </ul>

                        <a href="javascript:;" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 col-12" data-cue="slideInRight">
                    <div class="position-relative rellax" data-rellax-percentage="1" data-rellax-speed="0.8" data-disable-parallax-down="md">
                        <figure>
                           <img src="<?= PROOT; ?>assets/media/back-7.jpg" alt="landing" class="img-fluid rounded-4" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Visualize & plan end-->

    <!--Collaborate start-->
    <section class="my-xl-7 py-5">
        <div class="container pb-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-1" data-cue="slideInLeft">
                    <div class="position-relative rellax mb-7 mb-lg-0" data-rellax-percentage="1" data-rellax-speed="0.8" data-disable-parallax-down="md">
                        <figure>
                            <img src="<?= PROOT; ?>assets/media/back-8.jpg" alt="landing" class="img-fluid rounded-4" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 col-12 order-lg-2" data-cue="slideInRight">
                    <div class="mt-md-5">
                        <small class="text-warning text-uppercase ls-md fw-semibold">What We Do</small>
                        <div class="mb-5 mt-4">
                            <h2 class="mb-3">We supply mining equipment and logistics for Alluvial Prospecting.</h2>
                            <p class="lead mb-0">We work with individuals, groups and companies in the mining sector to boost their confidence in the Gold trade within the sector.</p>
                        </div>
                        <ul class="list-unstyled mb-5">
                           <li class="mb-2 d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">Based on our understanding of the regional geology of Ghana and the resilient social license achieved by our team of expertise, we assist our client to locate and access potential mining areas for prospective investments.</span>
                           </li>
                           <li class="mb-2 d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">We deliver technical services in all forms of mineral exploration to delineate resource estimates and mine development.</span>
                           </li>
                           <li class="mb-2 d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <span class="ms-2">We give guidance on mining activities and assist companies to source for requisite equipment for profitable mining operations.</span>
                           </li>
                        </ul>

                        <a href="javascript:;" class="icon-link icon-link-hover">
                           <span>Learn More</span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Collaborate end-->

    <!--Forword together start-->
    <section class="my-lg-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="mb-0">Our Objectives</h2>
                        <p>Our principles that keep us moving forward together.</p>
                    </div>
                </div>
            </div>
            <div class="row g-lg-7 gy-5">
                <div class="col-lg-4 col-md-4">
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-rocket-takeoff text-warning" viewBox="0 0 16 16">
                            <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z" />
                            <path
                                d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z" />
                            <path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z" />
                        </svg>
                    </div>

                    <h4>Resource for Success and Development</h4>
                    <p class="">MEG strive to source foreign and local Partnership to enhance and promote Mining in West Africa, as a tool for Development.</p>
                    <p class="mb-0">To attract private foreign investors to enter into joint-venture agreements with Gold mining firms in Africa.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gem text-warning" viewBox="0 0 16 16">
                           <path
                              d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
                        </svg>
                    </div>

                    <h4>Optimize Operations</h4>
                    <p class="">To acquire potential Gold Concessions in the West African Sub-region with Ghana as the main concentration.</p>
                    <p class="">To be a conduit of lucrative information dissemination to investors.</p>
                    <p class="mb-0">To improve continuously our operations within the West Africa Sub region.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bullseye text-warning" viewBox="0 0 16 16">
                           <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                           <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                           <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                           <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </div>

                    <h4>Health and Environmental Sustainability</h4>
                    <p class="mb-0">MEG to be a preferred entity noted for environmental and safety friendly practices with respect to the MDG goal 7, ensuring environmental sustainability.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Forword together end-->

         <!--Team member start-->
         <!-- <section class="py-lg-9 py-5 bg-warning">
            <div class="container">
               <div class="row g-5">
                  <div class="col-md-3 col-6">
                     <div class="text-center">
                        <h2 class="text-white-stable">2011</h2>
                        <h5 class="text-white-stable mb-0">Founded</h5>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="text-center">
                        <h2 class="text-white-stable">425+</h2>
                        <h5 class="text-white-stable mb-0">Projects Shipped</h5>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="text-center">
                        <h2 class="text-white-stable">55+</h2>
                        <h5 class="text-white-stable mb-0">Team Members</h5>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="text-center">
                        <h2 class="text-white-stable">4.9</h2>
                        <h5 class="text-white-stable mb-0">Clutch Rating</h5>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!--Team member end-->

    <!--Behind the block start-->
    <section class="mb-lg-9 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 xol-12">
                    <div class="text-center mb-7">
                        <small class="text-uppercase ls-md fw-semibold">Meet Our Team</small>
                        <h2 class="mt-3">Our Leadership Team</h2>
                        <p class="mb-0">We have personnel with over 10 years’ experience in the area of mining services and Gold trading. Our experts are in the field of Business Management, Geological Engineering and science, Mineral Engineering, Geodetic Engineering and Information Technology.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6 col-12">
                    <figure class="mb-4 zoom-img">
                        <img src="<?= PROOT; ?>assets/media/team/Suleiman-Imam-Mohammed.png" alt="team" class="rounded-3 img-fluid" style="height: 300px;" />
                    </figure>
                    <div class="mb-4">
                        <h4 class="mb-1"><a href="#team1Modal" data-bs-toggle="modal" data-bs-target="#team1Modal" class="text-reset">Imam Suleiman Mohammed</a></h4>
                        <span class="fs-6">CEO</span>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="team1Modal" tabindex="-1" aria-labelledby="team1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="card">
                                    <div class="row align-items-center">
                                        <div class="col-xl-4 col-lg-5 col-md-6 overflow-hidden d-none d-lg-block">
                                            <img src="<?= PROOT; ?>assets/media/team/Suleiman-Imam-Mohammed-long.png" class="img-fluid rounded-start-md-3 rounded-top-md-0 rounded-top-3" alt="testimonials" />
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-12">
                                            <div class="card-body p-4 px-xl-0">
                                                <div class="mb-6 text-inverse">
                                                    <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="30" alt="ipsum" />
                                                </div>
                                                <p class="card-text lead mb-7">
                                                    Suleiman is a Highly accomplished CEO with 15+ years of experience leading and scaling
                                                    businesses in a variety of industries, including Mining, Entrepreneurship, and
                                                    Commodity Trading. Proven track record of driving growth, improving efficiency, and
                                                    maximizing profits. A well versed in assessing risk, developing solutions, and
                                                    implementing positive changes to achieve sustainability and growth in challenging
                                                    market conditions. Adept at building and strengthening business and investor
                                                    relationships.
                                                </p>

                                                <h5 class="mb-0">Imam Suleiman Mohammed</h5>
                                                <small class="text-body-tertiary">Chief Executive Officers profile</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span>
                        <a href="#!" class="btn btn-instagram btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>
                    </span>
                    <span>
                        <a href="#!" class="btn btn-twitter btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path
                                 d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                           </svg>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <figure class="mb-4 zoom-img">
                        <img src="<?= PROOT; ?>assets/media/team/Isaac-Osei-Appah.JPG" alt="team" class="rounded-3 img-fluid"  style="height: 300px;" />
                    </figure>
                    <div class="mb-4">
                        <h4 class="mb-1"><a href="#!" data-bs-toggle="modal" data-bs-target="#team2Modal" class="text-reset">Isaac Osei Appah</a></h4>
                        <span class="fs-6">Head of Administration</span>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="team2Modal" tabindex="-1" aria-labelledby="team2ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="card">
                                    <div class="row align-items-center">
                                        <div class="col-xl-4 col-lg-5 col-md-6 overflow-hidden d-none d-lg-block">
                                            <img src="<?= PROOT; ?>assets/media/team/Isaac-Osei-Appah-long.JPG" class="img-fluid rounded-start-md-3 rounded-top-md-0 rounded-top-3" alt="testimonials" />
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-12">
                                            <div class="card-body p-4 px-xl-0">
                                                <div class="mb-6 text-inverse">
                                                    <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="30" alt="ipsum" />
                                                </div>
                                                <p class="card-text lead mb-7">
                                                    Isaac Osei Appah is an experienced administrative and operations professional with a strong competency in procurement, stock management, workforce coordination, and organizational systems improvement. With a career spanning retail, customer-service-driven industries, and mining-sector operations, he has established himself as a dependable, execution-focused leader with a consistent record of operational enhancement, resource management, and administrative efficiency.
                                                </p>

                                                <h5 class="mb-0">Isaac Osei Appah</h5>
                                                <small class="text-body-tertiary">Head of Administration</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span>
                        <a href="#!" class="btn btn-instagram btn-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>
                    </span>
                    <span>
                        <a href="#!" class="btn btn-twitter btn-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <figure class="mb-4 zoom-img">
                        <img src="<?= PROOT; ?>assets/media/team/Alhassan-Mohammed.png" alt="team" class="rounded-3 img-fluid"  style="height: 300px;" />
                    </figure>
                    <div class="mb-4">
                        <h4 class="mb-1"><a href="#!" data-bs-toggle="modal" data-bs-target="#team3Modal" class="text-reset">Alhassan Mohammed</a></h4>
                        <span class="fs-6">Head of Explorations</span>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="team3Modal" tabindex="-1" aria-labelledby="team3ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="card">
                                    <div class="row align-items-center">
                                        <div class="col-xl-4 col-lg-5 col-md-6 overflow-hidden d-none d-lg-block">
                                            <img src="<?= PROOT; ?>assets/media/team/Alhassan-Mohammed.png" class="img-fluid rounded-start-md-3 rounded-top-md-0 rounded-top-3" alt="testimonials" />
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-12">
                                            <div class="card-body p-4 px-xl-0">
                                                <div class="mb-6 text-inverse">
                                                    <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="30" alt="ipsum" />
                                                </div>
                                                <p class="card-text lead mb-7">
                                                    Alhassan Mohammed is a seasoned mining professional with more than two decades of hands-on and leadership experience in the exploration and development of mineral resources. As Director of Explorations at M. Enterprise Ghana Ltd, he provides strategic oversight for all exploration programs, ensuring technical excellence, operational efficiency, and alignment with the company’s long-term growth objectives.
                                                    <br>
                                                    His expertise is deeply rooted in underground mining operations, where he has accumulated extensive field experience across multiple geological environments. Alhassan is recognized for his strong command of underground mapping, orebody modelling, drilling supervision, reserve estimation, and the design of exploration strategies that optimise resource discovery while upholding strict safety and environmental standards
                                                </p>

                                                <h5 class="mb-0">Alhassan Mohammed</h5>
                                                <small class="text-body-tertiary">Head of Explorations</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <span>
                        <a href="#!" class="btn btn-instagram btn-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>
                    </span>
                     <span>
                        <a href="#!" class="btn btn-twitter btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path
                                 d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                           </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!--Behind the block end-->


<?php include  __DIR__ . '/system/inc/footer.php'; ?>