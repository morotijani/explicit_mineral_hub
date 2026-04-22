<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Home - ';
    $navClass = "transparent navbar-transparent navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';

    $news = $dbConnection->query("SELECT p.id, p.title, p.slug, p.content, p.image, p.created_at, c.name as category_name, u.username as author_name FROM posts p LEFT JOIN categories c ON p.category_id = c.id LEFT JOIN users u ON p.user_id = u.id ORDER BY p.created_at DESC LIMIT 3")->fetchAll();
    
?>

   <!--Hero start-->
    <section class="position-relative py-10 overflow-hidden">
       <div class="hero-overlay"></div>
       <img src="<?= PROOT; ?>assets/media/bg-1.jpg" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 0" alt="Hero Background" />
        <div class="container position-relative py-lg-10" data-cue="fadeIn">
            <div class="row py-lg-10 justify-content-center text-center">
                <div class="col-lg-9 col-12">
                    <div class="d-flex flex-column gap-6">
                        <div class="d-flex flex-column gap-4">
                            <h1 class="text-white-stable display-4 mb-0">Embarking On A Journey Of Mining Mastery</h1>
                            <p class="mb-0 text-white-50 lead px-lg-10">
                               Empowering Global Ventures in Exploration, Mining, and Gold Trading with Explicit Mineral Hub Limited
                            </p>
                        </div>
                        <div class="d-md-flex d-grid align-items-center justify-content-md-center gap-4">
                           <a href="<?= PROOT; ?>about" class="btn btn-gold px-5">Explore Our Legacy</a>
                           <a href="<?= PROOT; ?>projects" class="link-white icon-link icon-link-hover card-grid-link d-flex justify-content-center">
                                Recent Projects

                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                              </svg>
                           </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero end-->

    
    <!--Logo section start-->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1" data-cue="fadeIn">
                    <div class="text-center mb-4 mb-lg-7">
                        <!-- <h3 class="mb-0">See how over 700+ customers help the world work</h3> -->
                    </div>
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
                                        <img src="<?= PROOT; ?>assets/media/client-01.png" class="img-fluid" width="100" alt="logo" />
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="text-center">
                                        <img src="<?= PROOT; ?>assets/media/client-02.png" class="img-fluid" width="100" alt="logo" />
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="text-center">
                                        <img src="<?= PROOT; ?>assets/media/client-03.png" class="img-fluid" width="100" alt="logo" />
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="text-center">
                                    <img src="<?= PROOT; ?>assets/media/client-04.png" class="img-fluid" width="100" alt="logo" />
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="text-center">
                                    <img src="<?= PROOT; ?>assets/media/client-03.png" class="img-fluid" width="100" alt="logo" />
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
            </div>
        </div>
    </section>
    <!--Logo section end-->

    <section class="my-xl-9 my-5" data-cue="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3" data-cue="fadeIn">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="h1 mb-3">Latest News & Updates</h2>
                        <p class="mb-0">At least, not exclusively. Reduced recruiting costs, more efficient and effective communication.</p>
                    </div>
                </div>
            </div>
            <!-- Blog Card -->
            <div class="table-responsive-lg">
                <div class="row g-5 flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                    <?php foreach ($news as $post): ?>
                    <article class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                        <figure class="mb-4 zoom-img">
                            <a href="post?slug=<?= sanitize($post['slug']) ?>">
                                <img src="<?= PROOT; ?>assets/media/blog/<?= sanitize($post['image'] ?: 'placeholder.jpg') ?>" alt="<?= sanitize($post['title']) ?>" class="img-fluid rounded-3" />
                            </a>
                        </figure>

                        <a href="#!" class="badge bg-warning-subtle text-warning-emphasis rounded-pill text-uppercase"><?= sanitize($post['category_name'] ?? 'Uncategorized') ?></a>
                        <h3 class="my-3 lh-base h4">
                            <a href="post?slug=<?= sanitize($post['slug']) ?>" class="text-reset"><?= sanitize($post['title']) ?></a>
                        </h3>
                        <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                            <div class="d-flex align-items-center">
                                <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                                <div class="ms-2">
                                    <a href="#" class="text-reset fs-6"><?= sanitize($post['author_name'] ?? 'Admin') ?></a>
                                </div>
                            </div>
                            <div class="ms-3"><span class="fs-6"><?= pretty_date_notime($post['created_at']) ?></span></div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-cue="zoomIn">
                    <div class="mt-lg-8 mt-5">
                        <a href="<?= PROOT; ?>news" class="icon-link icon-link-hover text-dark">
                            Read more news
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
    <!--Our articles end-->

    <!--Service we offer start-->
    <section class="py-xl-9 py-5" data-cue="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-12">
                    <div class="text-center mb-xl-9 mb-5">
                        <span class="section-tag">Premium Mining Services</span>
                        <h2 class="h1 mt-3">Excellence in Every Grain</h2>
                        <p class="mt-4">We provide expert consultancy in exploration, mining, and Gold trading within Sierra Leone and beyond, assisting global mining groups with practical, high-level skills.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Mineral Exploration -->
                <div class="col-lg-3 col-md-6" data-cue="zoomIn">
                    <div class="service-card text-center">
                        <div class="service-icon-wrapper mx-auto">
                            <i class="bi bi-search"></i>
                        </div>
                        <h3 class="h4">Mineral Exploration</h3>
                        <p>Investigative activities to identify high-value mineral deposits before mining begins.</p>
                        <a href="<?= PROOT; ?>services" class="service-link">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                        <img src="<?= PROOT; ?>assets/media/service-1.jpg" class="service-card-bg" alt="">
                    </div>
                </div>
                <!-- Mining Services -->
                <div class="col-lg-3 col-md-6" data-cue="zoomIn">
                    <div class="service-card text-center">
                        <div class="service-icon-wrapper mx-auto">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h3 class="h4">Mining Services</h3>
                        <p>Advanced equipment and technical expertise to separate gravel and extract pure Ore.</p>
                        <a href="<?= PROOT; ?>services" class="service-link">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                        <img src="<?= PROOT; ?>assets/media/service-2.jpg" class="service-card-bg" alt="">
                    </div>
                </div>
                <!-- Gold Trading -->
                <div class="col-lg-3 col-md-6" data-cue="zoomIn">
                    <div class="service-card text-center">
                        <div class="service-icon-wrapper mx-auto">
                            <i class="bi bi-coin"></i>
                        </div>
                        <h3 class="h4">Gold Trading</h3>
                        <p>Professional gold purchasing, supply chain management, and global trade exploration.</p>
                        <a href="<?= PROOT; ?>services" class="service-link">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                        <img src="<?= PROOT; ?>assets/media/service-3.jpg" class="service-card-bg" alt="">
                    </div>
                </div>
                <!-- Mining Logistics -->
                <div class="col-lg-3 col-md-6" data-cue="zoomIn">
                    <div class="service-card text-center">
                        <div class="service-icon-wrapper mx-auto">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h3 class="h4">Mining Logistics</h3>
                        <p>Comprehensive equipment supply and logistical support for Artisanal Mining operations.</p>
                        <a href="<?= PROOT; ?>services" class="service-link">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                        <img src="<?= PROOT; ?>assets/media/service-4.jpg" class="service-card-bg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--Service we offer end-->
        
        <!--Who we are start-->
        <br><br>
        <section class="my-xl-9 my-5">
            <div class="container">
               <div class="row g-4">
                    <div class="col-xl-5 col-lg-6 col-12" data-cue="slideInLeft">
                        <div class="mb-4">
                            <span class="section-tag">A Legacy Redefined</span>
                            <h2 class="h1 mt-4 mb-3">Established November 2025: Leading Sierra Leone's Mineral Frontier.</h2>
                            <p class="mb-3">We provide expert consultancy in exploration, mining as well as Gold trading within Sierra Leone and beyond</p>
                            <p class="mb-0">We have established ourselves strategically to assist mining groups around the globe with practical skill to improve the mining industry.</p>
                        </div>

                        <a href="./about.html" class="icon-link icon-link-hover">
                            More about us
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path
                                fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                        <div class="row g-4" data-cues="slideInUp" data-delay="1000">
                            <div class="col-lg-6 col-md-6 col-12">
                                <a href="#!">
                                    <div
                                        class="rounded-3 card-lift"
                                        style="background-image: url(<?= PROOT; ?>assets/media/back-2.jpeg); background-repeat: no-repeat; height: 386px; background-size: cover"></div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <a href="#!">
                                    <div
                                        class="mb-4 rounded-3 card-lift"
                                        style="background-image: url(<?= PROOT; ?>assets/media/back-1.jpeg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                                </a>
                            <a href="#!">
                                <div
                                    class="mb-2 rounded-3 card-lift"
                                    style="background-image: url(<?= PROOT; ?>assets/media/back-3.jpg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Who we are end-->

<?php include  __DIR__ . '/system/inc/footer.php'; ?>