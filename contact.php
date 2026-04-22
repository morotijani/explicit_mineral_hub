<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'Contact us - ';
   $navClass = "navbar-light w-100";
   include  __DIR__ . '/system/inc/head.php';
   include  __DIR__ . '/system/inc/topnav.php';
?>

    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                    <span class="section-tag">Get In Touch</span>
                    <h1 class="mb-3">Let's Discuss Your Next Venture</h1>
                    <p class="mb-0 lead">Our experts are ready to assist you in exploration, mining, and gold trading.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Pageheader end-->
    
    <!--Contact us start-->
    <section class="mb-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="row g-xl-7 gy-5">
                        <div class="col-md-7 col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <?php if (isset($_SESSION['success_message'])): ?>
                                        <div class="alert alert-success"><?= $_SESSION['success_message']; ?></div>
                                        <?php unset($_SESSION['success_message']); ?>
                                    <?php endif; ?>
                                    <?php if (isset($_SESSION['error_message'])): ?>
                                        <div class="alert alert-danger"><?= $_SESSION['error_message']; ?></div>
                                        <?php unset($_SESSION['error_message']); ?>
                                    <?php endif; ?>
                                    <form class="row g-3 needs-validation" novalidate method="post" action="system/parsers/contact_submit.php">
                                        <div class="col-lg-6 col-md-12">
                                            <label for="contactFirstNameInput" class="form-label">
                                                First Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="contactFirstNameInput" name="first_name" required />
                                            <div class="invalid-feedback">Please enter firstname.</div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <label for="contactLastNameInput" class="form-label">
                                                Last Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="contactLastNameInput" name="last_name" required />
                                            <div class="invalid-feedback">Please enter lastname.</div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="contactEmailInput" class="form-label">
                                                Email
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="contactEmailInput" name="email" required />
                                            <div class="invalid-feedback">Please enter email.</div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="contactCompanyNameInput" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="contactCompanyNameInput" name="company_name" />
                                            <div class="invalid-feedback">Please enter company name.</div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="contactPhoneInput" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" id="contactPhoneInput" name="phone" />
                                            <div class="invalid-feedback">Please enter phone.</div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="contactTextarea" class="form-label">Message</label>
                                            <textarea class="form-control" id="contactTextarea" name="message" placeholder="Write to us" rows="4" required></textarea>
                                            <div class="invalid-feedback">Please enter a message.</div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-gold w-100" type="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="mb-7">
                                <div class="icon-shape bg-gold bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-gold" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4>Head office</h4>
                                    <p class="mb-0">12 Siaka Stevens Street, Freetown, Sierra Leone.</p>
                                </div>
                                <br>
                                <div class="">
                                    <h4>Sub-office</h4>
                                    <p class="mb-0">100 JUBA HILL, Freetown, Sierra Leone.</p>
                                </div>
                            </div>
                            <div class="mb-7">
                                <div class="icon-shape bg-gold bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill text-gold" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-.239-.156Zm9.189-4.133L10.197 8.243 16 11.801V4.697Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4>Email</h4>
                                    <p class="mb-0"><a href="mailto:info@explicitmineralhublimited.com" class="text-primary">info@explicitmineralhublimited.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-7">
                                <div class="icon-shape bg-gold bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill text-gold" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4>Phone Us :</h4>
                                    <p class="mb-0"><a href="tel:+232 76 000 000" class="text-primary">+232 76 000 000</a>
                                    <p class="mb-0"><a href="tel:+232 77 000 000" class="text-primary">+232 77 000 000</a>
                                    <p class="mb-0"><a href="tel:+232 78 000 000" class="text-primary">+232 78 000 000</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include  __DIR__ . '/system/inc/footer.php'; ?>