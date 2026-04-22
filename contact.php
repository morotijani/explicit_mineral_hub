<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'Contact us - ';
   $navClass = "navbar-light w-100";
   include  __DIR__ . '/system/inc/head.php';
   include  __DIR__ . '/system/inc/topnav.php';
?>

    <div class="pattern-square"></div>
    <!-- Page Hero -->
    <section class="position-relative py-8 overflow-hidden bg-navy text-white">
        <div class="hero-overlay" style="opacity: 0.8;"></div>
        <img src="<?= PROOT; ?>assets/media/bg-1.jpg" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 0" alt="Contact Hero" />
        
        <div class="container position-relative z-2 py-lg-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb glass-breadcrumb px-4 py-2 d-inline-flex rounded-pill mx-auto">
                            <li class="breadcrumb-item"><a href="<?= PROOT; ?>" class="text-white-50">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                    <h1 class="display-3 fw-800 mb-0">Get In <span class="text-gradient-gold">Touch</span></h1>
                    <p class="lead text-white-50 mt-3">Strategic partners and global investors, we are ready to discuss your next mining venture.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Section start-->
    <section class="py-xl-9 py-5 bg-white">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Information -->
                <div class="col-lg-4" data-cue="slideInLeft">
                    <div class="pe-lg-4">
                        <span class="section-tag">Direct Access</span>
                        <h2 class="h1 mt-4 mb-5">Connect with our <span class="text-gradient-gold">Global Hub</span></h2>
                        
                        <div class="d-flex align-items-start gap-4 mb-5">
                            <div class="icon-circle bg-gold-subtle text-gold">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-800 mb-2">Headquarters</h5>
                                <p class="text-muted mb-0 small">12 Siaka Stevens Street,<br>Freetown, Sierra Leone.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-4 mb-5">
                            <div class="icon-circle bg-gold-subtle text-gold">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-800 mb-2">Email Inquiries</h5>
                                <p class="mb-0 small"><a href="mailto:info@explicitmineralhublimited.com" class="text-navy fw-600">info@explicitmineralhublimited.com</a></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-4">
                            <div class="icon-circle bg-gold-subtle text-gold">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-800 mb-2">Phone Lines</h5>
                                <div class="small">
                                    <a href="tel:+23276000000" class="text-muted d-block mb-1">+232 76 000 000</a>
                                    <a href="tel:+23277000000" class="text-muted d-block mb-1">+232 77 000 000</a>
                                    <a href="tel:+23278000000" class="text-muted d-block">+232 78 000 000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8" data-cue="slideInRight">
                    <div class="card border-0 shadow-xl rounded-4 overflow-hidden">
                        <div class="card-body p-4 p-lg-5">
                            <?php if (isset($_SESSION['success_message'])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['success_message']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['success_message']); ?>
                            <?php endif; ?>
                            <?php if (isset($_SESSION['error_message'])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['error_message']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['error_message']); ?>
                            <?php endif; ?>

                            <form class="row g-4 needs-validation" novalidate method="post" action="system/parsers/contact_submit.php">
                                <div class="col-md-6">
                                    <label for="contactFirstNameInput" class="form-label fw-700 small text-uppercase letter-spacing-1">First Name <span class="text-gold">*</span></label>
                                    <input type="text" class="form-control py-3 rounded-3" id="contactFirstNameInput" name="first_name" placeholder="Enter first name" required />
                                    <div class="invalid-feedback">Please enter first name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactLastNameInput" class="form-label fw-700 small text-uppercase letter-spacing-1">Last Name <span class="text-gold">*</span></label>
                                    <input type="text" class="form-control py-3 rounded-3" id="contactLastNameInput" name="last_name" placeholder="Enter last name" required />
                                    <div class="invalid-feedback">Please enter last name.</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactEmailInput" class="form-label fw-700 small text-uppercase letter-spacing-1">Email Address <span class="text-gold">*</span></label>
                                    <input type="email" class="form-control py-3 rounded-3" id="contactEmailInput" name="email" placeholder="example@company.com" required />
                                    <div class="invalid-feedback">Please enter a valid email.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactCompanyNameInput" class="form-label fw-700 small text-uppercase letter-spacing-1">Company Name</label>
                                    <input type="text" class="form-control py-3 rounded-3" id="contactCompanyNameInput" name="company_name" placeholder="Organization" />
                                </div>
                                <div class="col-md-6">
                                    <label for="contactPhoneInput" class="form-label fw-700 small text-uppercase letter-spacing-1">Phone Number</label>
                                    <input type="tel" class="form-control py-3 rounded-3" id="contactPhoneInput" name="phone" placeholder="+232 ..." />
                                </div>
                                <div class="col-md-12">
                                    <label for="contactTextarea" class="form-label fw-700 small text-uppercase letter-spacing-1">Your Message <span class="text-gold">*</span></label>
                                    <textarea class="form-control py-3 rounded-3" id="contactTextarea" name="message" placeholder="How can we assist you today?" rows="5" required></textarea>
                                    <div class="invalid-feedback">Please enter your message.</div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <button class="btn btn-navy w-100 py-3 rounded-pill shadow-lg text-uppercase fw-800 letter-spacing-2" type="submit">
                                        Send Transmission <i class="bi bi-send-fill ms-2"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section (Optional but Premium) -->
    <div class="container-fluid p-0">
        <div class="ratio ratio-21x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.3262602128766!2d-13.235123!3d8.484210!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMjknMDMuMiJOIDEzwrAxNCcwNi40Ilc!5e0!3m2!1sen!2ssl!4v1650000000000!5m2!1sen!2ssl" style="border:0; filter: grayscale(1) invert(1) contrast(1.2);" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>