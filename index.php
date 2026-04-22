<?php
    require_once  __DIR__ . '/system/DatabaseConnector.php';
    $title = 'Home - ';
    $navClass = "transparent navbar-transparent navbar-dark";
    include  __DIR__ . '/system/inc/head.php';
    include  __DIR__ . '/system/inc/topnav.php';

    $news = $dbConnection->query("SELECT p.id, p.title, p.slug, p.content, p.image, p.created_at, c.name as category_name, u.username as author_name FROM posts p LEFT JOIN categories c ON p.category_id = c.id LEFT JOIN users u ON p.user_id = u.id ORDER BY p.created_at DESC LIMIT 3")->fetchAll();
    
?>

   <!--Hero start-->
   <section class="position-relative py-10">
      <video class="w-100" autoplay muted loop style="object-fit: cover" playsinline>
            <source src="<?= PROOT; ?>assets/media/cover.mp4" type="video/mp4" />
        </video>
        <div class="container position-relative py-lg-10" data-cue="fadeIn">
            <div class="row py-lg-10 justify-content-center text-center">
                <div class="col-lg-9 col-12">
                    <div class="d-flex flex-column gap-6">
                        <div class="d-flex flex-column gap-4">
                            <h1 class="text-white-stable display-4 mb-0">Embarking On A Journey Of Mining Mastery</h1>
                            <p class="mb-0 text-white-50 lead px-lg-10">
                               Empowering Global Ventures in Exploration, Mining, and Gold Trading with M. Enterprise Ghana Limited
                            </p>
                        </div>
                        <div class="d-md-flex d-grid align-items-center justify-content-md-center gap-4">
                           <a href="<?= PROOT; ?>about" class="btn btn-warning rounded-pill">Read more</a>
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

                        <a href="#!" class="badge bg-primary-subtle text-primary-emphasis rounded-pill text-uppercase"><?= sanitize($post['category_name'] ?? 'Uncategorized') ?></a>
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
                    <div class="text-center mb-xl-9 mb-1">
                        <small class="text-uppercase ls-md fw-semibold text-warning">Service We Offer</small>
                    </div>
                </div>
            </div>
            <h2 class="mb-4">We provide expert consultancy in exploration, mining as well as Gold trading within Ghana and beyond. We have established ourselves strategically to assist mining groups around the globe with practical skill to improve the mining industry. <br>We provide consultancy services into four (4) thematic areas.</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-grid" data-cue="zoomIn">
                        <div class="card-grid-inner">
                            <h3 class="card-grid-heading">Mineral Exploration</h3>
                                <div class="card-grid-text">
                                    <p class="mb-0">Mineral exploration is an investigative activity prior to mining.</p>
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-block d-lg-none">
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-grid-image">
                                <img src="<?= PROOT; ?>assets/media/service-1.jpg" alt="service" class="rounded-3 img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-grid" data-cue="zoomIn">
                            <div class="card-grid-inner">
                                <h3 class="card-grid-heading">Mining Services</h3>
                                <div class="card-grid-text">
                                    <p class="mb-0">Our equipment separates gravel from black sand, extracting Ore.</p>
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path
                                            fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-block d-lg-none">
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-grid-image">
                                <img src="<?= PROOT; ?>assets/media/service-2.jpg" alt="service" class="rounded-3 img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-grid" data-cue="zoomIn">
                            <div class="card-grid-inner">
                                <h3 class="card-grid-heading">Gold Trading</h3>
                                <div class="card-grid-text">
                                    <p class="mb-0">Gold Purchasing and Supply, Exploration of Gold.</p>
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-block d-lg-none">
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-grid-image">
                                <img src="<?= PROOT; ?>assets/media/service-3.jpg" alt="service" class="rounded-3 img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-grid" data-cue="zoomIn">
                            <div class="card-grid-inner">
                                <h3 class="card-grid-heading">Small Scale Mining Logistics</h3>
                                <div class="card-grid-text">
                                    <p class="mb-0">Supplying equipment to Artisanal Mining industry.</p>
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-block d-lg-none">
                                    <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-grid-image">
                                <img src="<?= PROOT; ?>assets/media/service-4.jpg" alt="service" class="rounded-3 img-fluid" />
                            </div>
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
                            <small class="text-uppercase ls-md fw-semibold">who we are</small>
                            <h2 class="h1 mt-4 mb-3">We are a registered Ghanaian company established in 2010.</h2>
                            <p class="mb-3">under the government of Ghana Act 1962(N0. 151). We provide expert consultancy in exploration, mining as well as Gold trading within Ghana and beyond</p>
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

    <!--Expert team start-->
    <section>
        <div class="container" data-cue="fadeIn">
            <div class="row border-top border-bottom">
                <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people-fill text-warning" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                        </div>

                        <h4>Expert team</h4>
                        <p class="mb-0">Vivamus eget neque lacus. Pellentesque egauris ex.</p>
                    </div>
                </div>
                <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trophy-fill text-warning" viewBox="0 0 16 16">
                                <path
                                d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
                           </svg>
                        </div>

                        <h4>Award winning agency</h4>
                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur elitorceat .</p>
                    </div>
                </div>
                <div class="col-md-4" data-cue="zoomIn">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-stars text-warning" viewBox="0 0 16 16">
                                <path
                                d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                           </svg>
                        </div>

                        <h4>11+ Year Exp.</h4>
                        <p class="mb-0">Pellen tesque eget, mauris lorem iupsum neque lacus.</p>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!--Expert team end-->

    <!--Customer stories start-->
    <section class="py-xl-9 py-5 bg-gray-100">
        <div class="container-fluid" data-cue="fadeIn">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="mb-3">Customer success stories</h2>
                        <p class="mb-0">What Our Clients Are Saying</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <!-- Testimonials with logo -->
                    <div class="card shadow-sm" data-cue="slideInLeft">
                        <div class="card-body">
                            <p class="mb-5 lead">
                                “As a mining engineer, I had a fantastic experience working with M. Enterprise Ghana Limited. Their team of experts provided exceptional consultancy services, guiding us with their extensive knowledge and practical skills.”
                            </p>
                            <div class="d-md-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mb-3 mb-lg-0">
                                    <div>
                                        <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-lg rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 h5">John D.</h6>
                                        <span class="small text-body-tertiary">Mining Engineer</span>
                                    </div>
                                </div>
                                <div class="d-none d-md-block text-inverse">
                                    <img src="<?= PROOT; ?>assets/media/nologo.png" width="50" alt="logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Testimonials with logo -->
                    <div class="card shadow-sm" data-cue="slideInRight">
                        <div class="card-body">
                            <p class="mb-5 lead">
                                "As a geologist, I can confidently say that MEG has been instrumental in our gold exploration endeavors. Their consultancy services have been invaluable in helping us navigate the complexities of the industry."
                            </p>
                            <div class="d-md-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mb-3 mb-lg-0">
                                    <div>
                                        <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-lg rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 h5">Mark R.</h6>
                                        <span class="small text-body-tertiary">Mining Operations Manager</span>
                                    </div>
                                </div>
                                <div class="d-none d-md-block text-inverse">
                                    <img src="<?= PROOT; ?>assets/media/nologo.png" width="50" alt="logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Testimonials with logo -->
                    <div class="card shadow-sm" data-cue="slideInRight">
                        <div class="card-body">
                            <p class="mb-5 lead">
                                "As a gold trader, MEG stands out as a trusted partner in the gold trading industry. Their expertise and extensive network have facilitated smooth transactions, allowing us to expand our business."
                            </p>
                            <div class="d-md-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mb-3 mb-lg-0">
                                    <div>
                                        <img src="<?= PROOT; ?>assets/media/avatar.png" alt="Avatar" class="avatar avatar-lg rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 h5">Emma T.</h6>
                                        <span class="small text-body-tertiary">Gold Trader</span>
                                    </div>
                                </div>
                                <div class="d-none d-md-block text-inverse">
                                    <img src="<?= PROOT; ?>assets/media/nologo.png" width="50" alt="logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Customer stories end-->

    <!--Logo section start-->
    <section class="py-xl-9 py-5">
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

<?php include  __DIR__ . '/system/inc/footer.php'; ?>