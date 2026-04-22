<?php
   require_once  __DIR__ . '/system/DatabaseConnector.php';
   $title = 'Projects - ';
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
                        <h1 class="mb-0">Projects</h1>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= PROOT; ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div class="pattern-square"></div>
    <!--Portfolio project start-->
    <section class="my-lg-7 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <a href="#permits" name="permits"></a>
                    <div class="mb-6 mb-lg-0">
                        <small class="text-primary text-uppercase ls-md fw-bold" name="permits">Permits</small>

                        <div class="my-4">
                            <h2 class="mb-3">Permits.</h2>
                            <p class="lead mb-0">M. Enterprise Ghana Limited is into joint-venture agreement with Neo Mining Limited, a Ghanaian registered private company.</p>
                        </div>

                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success text-opacity-50" viewBox="0 0 16 16">
                                        <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Neo Mining Ltd holds 100% interest in two concessions in prime gold potential areas in Ghana. The Seniagya Pekyerekye and Duayaw Nkwanta Prospecting licenses located in Ashanti and Ahafo Regions of Ghana respectively.</span>
                           </li>
                           <li class="d-flex mb-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success text-opacity-50" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Neo Mining concessions are strategically located within the Ashanti and Sefwi gold belts and within 50 kilometers from existing gold mines</span>
                           </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
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
                        data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                        <div class="swiper-wrapper pb-6">
                            <div class="swiper-slide">
                                <img src="<?= PROOT; ?>assets/media/project/permits.jpg" alt="project" class="img-fluid rounded-3" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= PROOT; ?>assets/media/project/permits1.jpg" alt="project" class="img-fluid rounded-3" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= PROOT; ?>assets/media/project/permits2.jpg" alt="project" class="img-fluid rounded-3" />
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
    <!--Portfolio project end-->

    <!--Testimonial start-->
    <section class="py-xl-9 py-5">
        <div class="container">
            <div class="row gy-7 gx-lg-7">
                <div class="col-lg-6 col-12" data-cue="fadeIn">
                    <div class="d-flex flex-column gap-3 mb-6">
                        <div>
                            <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                 d="M12.5 7.97559H5C4.46957 7.97559 3.96086 8.1863 3.58579 8.56137C3.21071 8.93644 3 9.44515 3 9.97559V17.9756C3 18.506 3.21071 19.0147 3.58579 19.3898C3.96086 19.7649 4.46957 19.9756 5 19.9756H12.5V20.9756C12.5 22.0365 12.0786 23.0539 11.3284 23.804C10.5783 24.5542 9.56087 24.9756 8.5 24.9756C8.23478 24.9756 7.98043 25.0809 7.79289 25.2685C7.60536 25.456 7.5 25.7104 7.5 25.9756C7.5 26.2408 7.60536 26.4952 7.79289 26.6827C7.98043 26.8702 8.23478 26.9756 8.5 26.9756C10.0908 26.9739 11.616 26.3413 12.7408 25.2164C13.8657 24.0915 14.4983 22.5664 14.5 20.9756V9.97559C14.5 9.44515 14.2893 8.93644 13.9142 8.56137C13.5391 8.1863 13.0304 7.97559 12.5 7.97559ZM12.5 17.9756H5V9.97559H12.5V17.9756ZM27 7.97559H19.5C18.9696 7.97559 18.4609 8.1863 18.0858 8.56137C17.7107 8.93644 17.5 9.44515 17.5 9.97559V17.9756C17.5 18.506 17.7107 19.0147 18.0858 19.3898C18.4609 19.7649 18.9696 19.9756 19.5 19.9756H27V20.9756C27 22.0365 26.5786 23.0539 25.8284 23.804C25.0783 24.5542 24.0609 24.9756 23 24.9756C22.7348 24.9756 22.4804 25.0809 22.2929 25.2685C22.1054 25.456 22 25.7104 22 25.9756C22 26.2408 22.1054 26.4952 22.2929 26.6827C22.4804 26.8702 22.7348 26.9756 23 26.9756C24.5908 26.9739 26.116 26.3413 27.2408 25.2164C28.3657 24.0915 28.9983 22.5664 29 20.9756V9.97559C29 9.44515 28.7893 8.93644 28.4142 8.56137C28.0391 8.1863 27.5304 7.97559 27 7.97559ZM27 17.9756H19.5V9.97559H27V17.9756Z"
                                 fill="#8B3DFF" />
                            </svg>
                        </div>
                        <div>
                           <h2>Geology and Structures of the Dua-Yaw Nkwanta Permit</h2>
                           <p class="">The license is situated within the Sefwi greenstone belt.</p>
                           <p class="">Underlain largely by metamorphosed lavas, pyroclastic and volcanoclastic rocks of the Birimian Super group and granitoids with intermediate composition.</p>
                           <p class="mb-0">A complex network of structures, mostly parallel and sub parallel to the greenstone belt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12" data-cue="fadeIn">
                    <div class="d-flex flex-column gap-3 mb-6">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trophy text-primary" viewBox="0 0 16 16">
                                <path
                                 d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z" />
                            </svg>
                        </div>
                        <div>
                           <h2>Geology and Structures of the Dua-Yaw Nkwanta Permit</h2>
                           <p class="">The license is situated within the Sefwi greenstone belt.</p>
                           <p class="">Underlain largely by metamorphosed lavas, pyroclastic and volcanoclastic rocks of the Birimian Super group and granitoids with intermediate composition.</p>
                           <p class="mb-0">A complex network of structures, mostly parallel and sub parallel to the greenstone belt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial end-->

    <section class="my-lg-7 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-6 mb-lg-0">
                        <a href="#reclamation" name="reclamation"></a>
                        <small class="text-primary text-uppercase ls-md fw-bold" name="reclamation">Reclamation</small>

                        <div class="my-4">
                            <h2 class="mb-3">Land Reclamation Project.</h2>
                            <p class="lead mb-0">MEG Visions Reclamation of neglected mine sites as necessary for restoration of ecological integrity but must be based on sound ecological principles. <br>MEG Adopts the following procedures for reclamation:.</p>
                        </div>

                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success text-opacity-50" viewBox="0 0 16 16">
                                        <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Earthworks/ slope battering,</span>
                           </li>
                           <li class="d-flex mb-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success text-opacity-50" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Spreading of oxide material,</span>
                           </li>
                           <li class="d-flex mb-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success text-opacity-50" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Spreading of top soil</span>
                           </li>
                           <li class="d-flex mb-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success text-opacity-50" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Construction of crest drains and raising of cover crops to control run-off and erosion.</span>
                           </li>
                           <li class="d-flex mb-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success text-opacity-50" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Tree and crop planting</span>
                           </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
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
                        data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                        <div class="swiper-wrapper pb-6">
                            <div class="swiper-slide">
                                <img src="<?= PROOT; ?>assets/media/project/reclamation1.jpg" alt="project" class="img-fluid rounded-3" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= PROOT; ?>assets/media/project/reclamation2.jpg" alt="project" class="img-fluid rounded-3" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= PROOT; ?>assets/media/project/reclamation3.jpg" alt="project" class="img-fluid rounded-3" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= PROOT; ?>assets/media/project/reclamation4.jpg" alt="project" class="img-fluid rounded-3" />
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


<?php include  __DIR__ . '/system/inc/footer.php'; ?>