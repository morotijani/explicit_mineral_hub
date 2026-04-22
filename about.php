<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'About us - ';
   $navClass = "navbar-light w-100";
   include  __DIR__ . '/system/inc/head.php';
   include  __DIR__ . '/system/inc/topnav.php';
?>

    <div class="pattern-square"></div>
    <!-- Page Hero -->
    <section class="position-relative py-8 overflow-hidden bg-navy text-white">
        <div class="hero-overlay" style="opacity: 0.8;"></div>
        <img src="<?= PROOT; ?>assets/media/bg-1.jpg" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 0" alt="About Hero" />
        
        <div class="container position-relative z-2 py-lg-5">
            <div class="row">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb glass-breadcrumb px-4 py-2 d-inline-flex rounded-pill">
                            <li class="breadcrumb-item"><a href="<?= PROOT; ?>" class="text-white-50">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Our Legacy</li>
                        </ol>
                    </nav>
                    <h1 class="display-3 fw-800 mb-0">Our <span class="text-gradient-gold">Legacy</span></h1>
                    <p class="lead text-white-50 mt-3">Leading the Sierra Leonean mineral frontier with integrity and excellence since 2025.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Who we are start-->
    <section class="py-xl-9 py-5 bg-white overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-cue="slideInLeft">
                    <div class="pe-lg-5">
                        <span class="section-tag">Since November 2025</span>
                        <h2 class="h1 mt-4 mb-4">The Hub of Mineral Mastery</h2>
                        <p class="lead mb-5 text-navy fw-600">Explicit Mineral Hub Limited is a registered Sierra Leonean entity dedicated to the highest standards of mining and trading.</p>
                        
                        <div class="mb-5">
                            <p>Established under the Companies Act of Sierra Leone, we have strategically positioned ourselves as the premier destination for global investors seeking professional consultancy in exploration, mining, and gold trading.</p>
                            <p class="mt-4">Our operations are centered in **Freetown**, where we coordinate a vast network of experts to deliver technical services that delineate high-value resource estimates and foster sustainable development.</p>
                        </div>

                        <div class="row g-4 mb-5">
                            <div class="col-6">
                                <div class="p-4 rounded-4 bg-light text-center border-bottom border-gold border-3">
                                    <h4 class="h2 mb-1 text-gold fw-800">100+</h4>
                                    <span class="small text-uppercase fw-700">Satisfied Clients</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-4 rounded-4 bg-light text-center border-bottom border-gold border-3">
                                    <h4 class="h2 mb-1 text-gold fw-800">Elite</h4>
                                    <span class="small text-uppercase fw-700">Tech Experts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-cue="slideInRight">
                    <div class="image-collage">
                        <div class="since-badge">Est. 2025</div>
                        <div class="collage-img collage-img-1 shadow-lg">
                            <img src="<?= PROOT; ?>assets/media/back-4.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Mining Operations">
                        </div>
                        <div class="collage-img collage-img-2 shadow-lg">
                            <img src="<?= PROOT; ?>assets/media/back-7.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Gold Hub">
                        </div>
                    </div>
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

    <!--Vision & Values start-->
    <section class="py-xl-9 py-5 bg-navy text-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-cue="slideInLeft">
                    <span class="section-tag">Vision & Values</span>
                    <h2 class="h1 mt-4 mb-4 text-white">Building the Future of <span class="text-gradient-gold">Global Mining</span></h2>
                    <p class="lead text-white-50 mb-5">We aspire to be the industry leader that provides quality service exceeding the expectations of our clients and all stakeholders.</p>
                    
                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="icon-circle bg-gold-subtle text-gold">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                        <div>
                            <h4 class="h5 mb-1 text-white">Elite Consultancy</h4>
                            <p class="small text-white-50">Providing technical excellence across the West African sub-region.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start gap-3">
                        <div class="icon-circle bg-gold-subtle text-gold">
                            <i class="bi bi-globe fs-4"></i>
                        </div>
                        <div>
                            <h4 class="h5 mb-1 text-white">Global Reach</h4>
                            <p class="small text-white-50">Connecting domestic and foreign investors with high-yield opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1" data-cue="slideInRight">
                    <div class="position-relative">
                        <div class="glass-card p-2 rounded-4 shadow-lg">
                            <img src="<?= PROOT; ?>assets/media/back-7.jpg" alt="Vision" class="img-fluid rounded-4" />
                        </div>
                        <div class="position-absolute top-50 start-0 translate-middle-y ms-n5 d-none d-xl-block">
                            <div class="glass-card p-4 rounded-4 shadow-lg bg-gold-gradient text-white" style="width: 250px;">
                                <h5 class="h2 fw-800 mb-0">No. 1</h5>
                                <p class="small mb-0 opacity-75 text-uppercase fw-700">Exploration Partner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Operational Excellence start-->
    <section class="py-xl-9 py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-2 order-lg-1" data-cue="slideInLeft">
                    <div class="image-stack">
                        <img src="<?= PROOT; ?>assets/media/back-8.jpg" alt="Excellence" class="img-fluid rounded-4 shadow-lg w-100" />
                        <div class="floating-stat bg-white p-4 shadow-xl rounded-4">
                            <i class="bi bi-tools text-gold fs-2 mb-2 d-block"></i>
                            <h5 class="mb-1">Advanced Equipment</h5>
                            <p class="small text-muted mb-0">Modern logistics for alluvial prospecting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 order-1 order-lg-2" data-cue="slideInRight">
                    <span class="section-tag">Operational Excellence</span>
                    <h2 class="h1 mt-4 mb-4">Strategic Mineral <span class="text-gradient-gold">Deployment</span></h2>
                    <p class="lead mb-5 text-muted">We deliver technical services in all forms of mineral exploration to delineate resource estimates and mine development.</p>
                    
                    <ul class="list-unstyled custom-list">
                        <li class="mb-3">
                            <i class="bi bi-geo-fill text-gold"></i>
                            <span>Regional Geology mastery of Sierra Leone.</span>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-graph-up-arrow text-gold"></i>
                            <span>Resource discovery and mine development optimization.</span>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-truck text-gold"></i>
                            <span>Source for requisite equipment for profitable mining.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Objectives start-->
    <section class="py-xl-9 py-5 bg-light">
        <div class="container text-center mb-5">
            <span class="section-tag mx-auto">Our Objectives</span>
            <h2 class="h1 mt-4">Principles of <span class="text-gradient-gold text-glow">Development</span></h2>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4" data-cue="zoomIn">
                    <div class="objective-card">
                        <div class="obj-icon"><i class="bi bi-rocket-takeoff text-gold"></i></div>
                        <h4>Success & Growth</h4>
                        <p>To attract private foreign investors to enter into joint-venture agreements with Gold mining firms in Africa.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-cue="zoomIn">
                    <div class="objective-card">
                        <div class="obj-icon"><i class="bi bi-gem text-gold"></i></div>
                        <h4>Optimized Operations</h4>
                        <p>To acquire potential Gold Concessions in the West African Sub-region with Sierra Leone as the main concentration.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-cue="zoomIn">
                    <div class="objective-card">
                        <div class="obj-icon"><i class="bi bi-bullseye text-gold"></i></div>
                        <h4>Sustainability</h4>
                        <p>To be a preferred entity noted for environmental and safety friendly practices, ensuring long-term sustainability.</p>
                    </div>
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

    <!--Behind the block end-->


<?php include  __DIR__ . '/system/inc/footer.php'; ?>