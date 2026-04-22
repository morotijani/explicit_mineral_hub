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
                    <h1 class="mb-3">Contact us</h1>
                    <p class="mb-0 lead">Please reach out to us if you have questions about our enterprise offerings, or anything else.</p>
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
                                            <button class="btn btn-warning" type="submit">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="mb-7">
                                <div class="icon-shape bg-warning bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset text-warning" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4>Head office</h4>
                                    <p class="mb-0">CJIC Tower, Indian Ocean Street South Legon Accra.</p>
                                </div>
                                <br>
                                <div class="">
                                    <h4>Sub-office</h4>
                                    <p class="mb-0">Konongo, Old Merchant Bank Building AC-0004-7151</p>
                                </div>
                            </div>
                            <div class="mb-7">
                                <div class="icon-shape bg-warning bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots text-warning" viewBox="0 0 16 16">
                                        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        <path
                                        d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4>Email</h4>
                                    <p class="mb-0"><a href="mailto:info@menterpriseghanalimited.com" class="text-warning">info@menterpriseghanalimited.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-7">
                                <div class="icon-shape bg-warning bg-opacity-10 rounded icon-md mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper text-warning" viewBox="0 0 16 16">
                                        <path
                                        d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                        <path
                                        d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4>Phone Us :</h4>
                                    <p class="mb-0"><a href="tel:+233 (0) 240 67 7938" class="text-warning">+233 (0) 240 67 7938</a>
                                    <p class="mb-0"><a href="tel:+233 (0) 540 94 4188" class="text-warning">+233 (0) 540 94 4188</a>
                                    <p class="mb-0"><a href="tel:+233 (0) 541 11 3697" class="text-warning">+233 (0) 541 11 3697</a>
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