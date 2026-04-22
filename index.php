<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Home - ';
    $navClass = "transparent navbar-transparent navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';

    $news = $dbConnection->query("SELECT p.id, p.title, p.slug, p.content, p.image, p.created_at, c.name as category_name, u.username as author_name FROM posts p LEFT JOIN categories c ON p.category_id = c.id LEFT JOIN users u ON p.user_id = u.id ORDER BY p.created_at DESC LIMIT 3")->fetchAll();
    
?>

    <!--Hero start-->
    <section class="position-relative hero-premium overflow-hidden">
        <div class="hero-overlay"></div>
        <img src="<?= PROOT; ?>assets/media/bg-1.jpg" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 0" alt="Hero Background" />
        
        <div class="container position-relative z-2">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 col-xl-8" data-cue="zoomIn">
                    <div class="hero-glass-card">
                        <span class="section-tag mb-4">Sierra Leone's Gold Standard</span>
                        <h1 class="text-white hero-title">Mastering the Art of <span class="text-gradient-gold text-glow">Mineral Excellence</span></h1>
                        <p class="hero-subtitle">Empowering global ventures with elite consultancy in exploration, mining, and ethical gold trading across the Sierra Leonean frontier.</p>
                        
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="<?= PROOT; ?>about" class="btn btn-gold btn-lg px-5 py-3">Our Legacy</a>
                            <a href="<?= PROOT; ?>contact" class="btn btn-outline-light btn-lg px-5 py-3">Inquire Hub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#services" class="scroll-indicator d-none d-lg-flex text-decoration-none">
            <span class="small text-uppercase letter-spacing-1">Discover More</span>
            <div class="mouse"></div>
        </a>
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

    <!-- Latest News & Updates start -->
    <section class="py-xl-9 py-5 bg-white overflow-hidden">
        <div class="container">
            <div class="row align-items-end mb-5 mb-xl-7">
                <div class="col-lg-7" data-cue="fadeIn">
                    <span class="section-tag">Market Intelligence</span>
                    <h2 class="h1 mt-3">Latest News & <span class="text-gradient-gold">Updates</span></h2>
                    <p class="lead text-muted">Stay ahead with the latest strategic insights and operational developments from our regional mining hubs.</p>
                </div>
                <div class="col-lg-5 text-lg-end" data-cue="fadeIn">
                    <a href="<?= PROOT; ?>news" class="btn btn-navy rounded-pill px-5 py-3 shadow-lg text-uppercase fw-800 letter-spacing-1">
                        Access Insights Hub <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Blog Grid -->
            <div class="row g-4 gy-5">
                <?php if (empty($news)): ?>
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">No recent updates available. Check back soon for market news.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($news as $post): ?>
                        <div class="col-lg-4 col-md-6" data-cue="zoomIn">
                            <article class="card border-0 h-100 shadow-sm hover-lift rounded-4 overflow-hidden bg-white">
                                <div class="position-relative overflow-hidden" style="height: 240px;">
                                    <a href="post?slug=<?= sanitize($post['slug']) ?>">
                                        <img src="<?= PROOT; ?>assets/media/blog/<?= sanitize($post['image'] ?: 'placeholder.jpg') ?>" alt="<?= sanitize($post['title']) ?>" class="card-img-top h-100 w-100 object-fit-cover transition-all duration-500 hover-scale" />
                                    </a>
                                    <?php if ($post['category_name']): ?>
                                        <div class="position-absolute top-0 start-0 p-3">
                                            <span class="badge bg-gold-gradient rounded-pill text-uppercase px-3 py-2 small fw-700 letter-spacing-1"><?= sanitize($post['category_name']) ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-calendar3 text-gold small"></i>
                                        <span class="small text-muted fw-600"><?= pretty_date_notime($post['created_at']) ?></span>
                                    </div>
                                    <h3 class="h4 mb-3 fw-800">
                                        <a href="post?slug=<?= sanitize($post['slug']) ?>" class="text-navy text-decoration-none hover-gold transition-all"><?= sanitize($post['title']) ?></a>
                                    </h3>
                                    <p class="text-muted small mb-4 line-clamp-2">
                                        <?= mb_strimwidth(strip_tags($post['content'] ?? ''), 0, 100, "...") ?>
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-0 p-4 pt-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-xs bg-gold-subtle text-gold rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <span class="small fw-700 text-navy"><?= sanitize($post['author_name'] ?? 'Admin') ?></span>
                                        </div>
                                        <a href="post?slug=<?= sanitize($post['slug']) ?>" class="icon-link icon-link-hover text-gold fw-700 small text-uppercase">
                                            Read More <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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
        <section class="py-xl-9 py-5 overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-cue="slideInLeft">
                    <div class="pe-lg-5">
                        <span class="section-tag">A Legacy Redefined</span>
                        <h2 class="h1 mt-4 mb-4">Leading Sierra Leone's Mineral Frontier.</h2>
                        
                        <div class="mission-box">
                            <p>"To provide expert consultancy and strategic assistance to the global mining industry with integrity and excellence."</p>
                        </div>
                        
                        <p class="mb-4">We are a registered Sierra Leonean company established in November 2025 under the Companies Act of Sierra Leone. Our expertise spans mineral exploration, technical mining services, and ethical Gold trading.</p>
                        
                        <div class="stats-grid">
                            <div class="stat-item">
                                <span class="stat-value">100%</span>
                                <span class="stat-label">Compliant</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-value">Elite</span>
                                <span class="stat-label">Experts</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-value">Global</span>
                                <span class="stat-label">Network</span>
                            </div>
                        </div>

                        <div class="mt-5">
                            <a href="<?= PROOT; ?>about" class="btn btn-gold px-5">Learn More About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-cue="slideInRight">
                    <div class="image-collage">
                        <div class="since-badge">Est. 2025</div>
                        <div class="collage-img collage-img-1">
                            <img src="<?= PROOT; ?>assets/media/back-2.jpeg" class="w-100 h-100" style="object-fit: cover;" alt="">
                        </div>
                        <div class="collage-img collage-img-2">
                            <img src="<?= PROOT; ?>assets/media/back-1.jpeg" class="w-100 h-100" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Who we are end-->

    <!--Expert team start-->
    <section class="py-xl-9 py-5 bg-navy text-white" style="background: var(--emh-navy);">
        <div class="container" data-cue="fadeIn">
            <div class="row g-4">
                <div class="col-md-4" data-cue="zoomIn">
                    <div class="text-center p-4 h-100">
                        <div class="mb-4 text-gold" style="font-size: 2.5rem;">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4 class="text-white">Elite Technical Team</h4>
                        <p class="text-white-50">Our Sierra Leonean team brings decades of local and international expertise in mineralogy and engineering.</p>
                    </div>
                </div>
                <div class="col-md-4" data-cue="zoomIn">
                    <div class="text-center p-4 h-100">
                        <div class="mb-4 text-gold" style="font-size: 2.5rem;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="text-white">Fully Licensed Hub</h4>
                        <p class="text-white-50">Operational integrity backed by full compliance with the National Minerals Agency (NMA) of Sierra Leone.</p>
                    </div>
                </div>
                <div class="col-md-4" data-cue="zoomIn">
                    <div class="text-center p-4 h-100">
                        <div class="mb-4 text-gold" style="font-size: 2.5rem;">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h4 class="text-white">Gold Standard Ethics</h4>
                        <p class="text-white-50">We adhere strictly to ethical sourcing and transparent trading practices in every transaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Expert team end-->

    <!--Customer stories start-->
    <section class="py-xl-9 py-5 bg-light">
        <div class="container" data-cue="fadeIn">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-center mb-xl-7 mb-5">
                        <span class="section-tag">Testimonials</span>
                        <h2 class="mb-3">The Hub of Trust</h2>
                        <p class="mb-0">Hear from our global partners and satisfied clients.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm glass-card" data-cue="slideInLeft">
                        <div class="card-body p-5">
                            <div class="mb-4 text-gold">
                                <i class="bi bi-quote" style="font-size: 2rem;"></i>
                            </div>
                            <p class="mb-5 lead fs-6">
                                “As a mining engineer, I had a fantastic experience working with Explicit Mineral Hub Limited. Their team of experts provided exceptional consultancy services, guiding us with their extensive knowledge.”
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-md rounded-circle" />
                                <div class="ms-3">
                                    <h6 class="mb-0">John D.</h6>
                                    <span class="small text-muted">Mining Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm glass-card" data-cue="slideInUp">
                        <div class="card-body p-5">
                            <div class="mb-4 text-gold">
                                <i class="bi bi-quote" style="font-size: 2rem;"></i>
                            </div>
                            <p class="mb-5 lead fs-6">
                                "As a geologist, I can confidently say that Explicit Mineral Hub has been instrumental in our gold exploration. Their consultancy services are invaluable for navigating the Sierra Leonean industry."
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-md rounded-circle" />
                                <div class="ms-3">
                                    <h6 class="mb-0">Mark R.</h6>
                                    <span class="small text-muted">Geologist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm glass-card" data-cue="slideInRight">
                        <div class="card-body p-5">
                            <div class="mb-4 text-gold">
                                <i class="bi bi-quote" style="font-size: 2rem;"></i>
                            </div>
                            <p class="mb-5 lead fs-6">
                                "Explicit Mineral Hub stands out as a trusted partner in gold trading. Their expertise and network facilitated smooth transactions, allowing us to expand our business rapidly."
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-md rounded-circle" />
                                <div class="ms-3">
                                    <h6 class="mb-0">Emma T.</h6>
                                    <span class="small text-muted">Gold Trader</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Customer stories end-->


<?php include  __DIR__ . '/system/inc/footer.php'; ?>