<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'Services - ';
   $navClass = "navbar-light w-100";
   include  __DIR__ . '/system/inc/head.php';
   include  __DIR__ . '/system/inc/topnav.php';
?>

    <div class="pattern-square"></div>
    <!-- Page Hero -->
    <section class="position-relative py-8 overflow-hidden bg-navy text-white">
        <div class="hero-overlay" style="opacity: 0.8;"></div>
        <img src="<?= PROOT; ?>assets/media/bg-1.jpg" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 0" alt="Services Hero" />
        
        <div class="container position-relative z-2 py-lg-5">
            <div class="row">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb glass-breadcrumb px-4 py-2 d-inline-flex rounded-pill">
                            <li class="breadcrumb-item"><a href="<?= PROOT; ?>" class="text-white-50">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Our Services</li>
                        </ol>
                    </nav>
                    <h1 class="display-3 fw-800 mb-0">Elite <span class="text-gradient-gold">Solutions</span></h1>
                    <p class="lead text-white-50 mt-3">Strategic consultancy and operational excellence in Sierra Leone’s mineral sub-region.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Industry Solutions Overview start-->
    <section class="py-xl-9 py-5 bg-white overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center mb-5" data-cue="fadeIn">
                    <span class="section-tag mx-auto">Our Expertise</span>
                    <h2 class="h1 mt-4">Precision-Driven <span class="text-gradient-gold">Mining Services</span></h2>
                    <p class="lead text-muted">Explicit Mineral Hub Limited provides elite consultancy across four strategic thematic areas, ensuring high-yield returns and sustainable growth.</p>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Mineral Exploration -->
                <div class="col-lg-3 col-md-6" data-cue="zoomIn">
                    <div class="service-card text-center h-100">
                        <div class="service-icon-wrapper mx-auto">
                            <i class="bi bi-search"></i>
                        </div>
                        <h3 class="h4">Mineral Exploration</h3>
                        <p class="small text-muted">Advanced detection and geologic mapping prior to development.</p>
                        <a href="#exploration" class="service-link mt-auto">Explore Depth <i class="bi bi-chevron-down"></i></a>
                    </div>
                </div>
                
         </section>
         <!--Industry we serve end-->

    <!--Mineral Exploration Detail-->
    <section id="exploration" class="py-xl-9 py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-cue="slideInLeft">
                    <div class="pe-lg-5">
                        <span class="section-tag">Scientific Precision</span>
                        <h2 class="h1 mt-4 mb-4">Mineral Exploration & <span class="text-gradient-gold">Geologic Mapping</span></h2>
                        <p class="lead mb-4">Exploration is the bedrock of successful mining. Our team identifies target deposits through two primary scientific methodologies.</p>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="glass-card p-4 border-gold-subtle">
                                    <i class="bi bi-water text-gold fs-2 mb-3 d-block"></i>
                                    <h5 class="mb-2">Alluvial Exploration</h5>
                                    <p class="small text-muted mb-0">Mapping river-based deposits and sediment layers.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="glass-card p-4 border-gold-subtle">
                                    <i class="bi bi-mountain text-gold fs-2 mb-3 d-block"></i>
                                    <h5 class="mb-2">In-situ Exploration</h5>
                                    <p class="small text-muted mb-0">Detecting primary hard-rock mineralizations.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mission-box">
                            <p>Explicit Mineral Hub Limited holds the specialized expertise to undertake all stages of exploration, from initial grassroots detection to full-scale production planning.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-cue="slideInRight">
                    <div class="image-stack">
                        <img src="<?= PROOT; ?>assets/media/back-5.jpg" alt="Exploration" class="img-fluid rounded-4 shadow-xl w-100" />
                        <div class="floating-stat bg-navy text-white p-4 shadow-xl rounded-4" style="bottom: -20px; right: -20px;">
                            <h4 class="h2 fw-800 text-gold mb-0">4</h4>
                            <span class="small text-uppercase fw-700 letter-spacing-1">Sub-Stages Covered</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Mining Services Detail-->
    <section id="production" class="py-xl-9 py-5 bg-navy">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-2 order-lg-1" data-cue="slideInLeft">
                    <div class="position-relative">
                        <div class="glass-card p-2 rounded-4 shadow-lg border-white-10">
                            <img src="<?= PROOT; ?>assets/media/back-4.jpg" alt="Mining" class="img-fluid rounded-4" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 order-1 order-lg-2" data-cue="slideInRight">
                    <span class="section-tag">Extraction Mastery</span>
                    <h2 class="h1 mt-4 mb-4 text-white">Advanced <span class="text-gradient-gold">Mining Processes</span></h2>
                    <p class="lead text-white-50 mb-5">We bridge the gap between discovery and delivery through sophisticated suction technology and gravitational separation.</p>
                    
                    <ul class="list-unstyled custom-list text-white-50">
                        <li class="mb-4 d-flex align-items-start gap-3">
                            <div class="icon-circle bg-gold-subtle text-gold small-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-1">Process Advisory</h5>
                                <p class="small mb-0">Technical guidance on optimizing the supply chain and joint-venture structures.</p>
                            </div>
                        </li>
                        <li class="mb-4 d-flex align-items-start gap-3">
                            <div class="icon-circle bg-gold-subtle text-gold small-icon">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-1">Suction Technology</h5>
                                <p class="small mb-0">Using vacuum suction dredges and high-efficiency sluices for maximum ore recovery.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Gold Trading Detail-->
    <section id="trading" class="py-xl-9 py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-cue="slideInLeft">
                    <div class="pe-lg-5">
                        <span class="section-tag">Global Trade</span>
                        <h2 class="h1 mt-4 mb-4">Strategic <span class="text-gradient-gold">Gold Trading</span></h2>
                        <p class="lead mb-5">Sierra Leone is a global hub for gold and diamonds. We coordinate the entire export cycle with full regulatory compliance.</p>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <ul class="list-unstyled custom-list">
                                    <li class="mb-3">
                                        <i class="bi bi-patch-check-fill text-gold"></i>
                                        <span>Official Assaying</span>
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-patch-check-fill text-gold"></i>
                                        <span>Customs Clearance</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled custom-list">
                                    <li class="mb-3">
                                        <i class="bi bi-patch-check-fill text-gold"></i>
                                        <span>Airway Bill Logistics</span>
                                    </li>
                                    <li class="mb-3">
                                        <i class="bi bi-patch-check-fill text-gold"></i>
                                        <span>Bank of Sierra Leone (BSL) Regs</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="p-4 bg-light rounded-4 border-start border-gold border-4">
                            <p class="small mb-0 text-navy fw-600">Note: All gold must be smelted into ore bars to ascertain purity before customs clearance. Export costs are calculated at 0.5% of total value.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" data-cue="slideInRight">
                    <div class="glass-card p-3 rounded-4 shadow-xl">
                        <img src="<?= PROOT; ?>assets/media/service-3.jpg" alt="Gold Trading" class="img-fluid rounded-4 shadow-lg w-100" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Logistics Detail-->
    <section id="logistics" class="py-xl-9 py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-2 order-lg-1" data-cue="slideInLeft">
                    <div class="image-stack">
                        <img src="<?= PROOT; ?>assets/media/back-6.jpg" alt="Logistics" class="img-fluid rounded-4 shadow-xl w-100" />
                        <div class="floating-stat bg-gold text-white p-4 shadow-xl rounded-4">
                            <i class="bi bi-tools fs-2 mb-2 d-block"></i>
                            <h5 class="mb-0 fw-800">Support System</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 order-1 order-lg-2" data-cue="slideInRight">
                    <span class="section-tag">Logistical Support</span>
                    <h2 class="h1 mt-4 mb-4">Artisanal Mining <span class="text-gradient-gold">Distribution</span></h2>
                    <p class="lead mb-5">We supply and distribute essential equipment to the artisanal mining industry, supporting production from 0.5 to 5 tonnes per hour.</p>
                    
                    <div class="row g-3 mb-5">
                        <div class="col-12">
                            <div class="p-3 bg-white rounded-3 shadow-sm d-flex align-items-center gap-3">
                                <div class="bg-gold-subtle text-gold px-3 py-2 rounded-circle fw-800">1</div>
                                <span class="fw-600 text-navy">Crushing & Screening Equipment</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 bg-white rounded-3 shadow-sm d-flex align-items-center gap-3">
                                <div class="bg-gold-subtle text-gold px-3 py-2 rounded-circle fw-800">2</div>
                                <span class="fw-600 text-navy">Grinding & Classifying Systems</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 bg-white rounded-3 shadow-sm d-flex align-items-center gap-3">
                                <div class="bg-gold-subtle text-gold px-3 py-2 rounded-circle fw-800">3</div>
                                <span class="fw-600 text-navy">Ore Beneficiation Modules</span>
                            </div>
                        </div>
                    </div>

                    <a href="<?= PROOT; ?>contact" class="btn btn-navy py-3 px-5 rounded-pill shadow-lg">Inquire About Equipment</a>
                </div>
            </div>
        </div>
    </section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>