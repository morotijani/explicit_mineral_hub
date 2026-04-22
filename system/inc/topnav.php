    <header>
        <nav class="navbar navbar-expand-lg <?= $navClass; ?>">
            <div class="container px-3">
                <a class="navbar-brand" href="<?= PROOT; ?>index"><img src="<?= PROOT; ?>assets/media/logo/logo.png" width="60" alt /></a>
                <button class="navbar-toggler offcanvas-nav-btn" type="button">
                    <i class="bi bi-list"></i>
                </button>
                <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                    <div class="offcanvas-header">
                        <a href="<?= PROOT; ?>index" class="text-inverse"><img src="<?= PROOT; ?>assets/media/logo/logo.png"
                            alt /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center">
                        <ul class="navbar-nav mx-auto align-items-lg-center">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PROOT; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PROOT; ?>about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PROOT; ?>projects">Project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PROOT; ?>services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PROOT; ?>news">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PROOT; ?>gallery">Gallery</a>
                            </li>
                        </ul>
                        <div class="mt-3 mt-lg-0 d-flex align-items-center">
                            <!-- <a href="<?= PROOT; ?>news" class="btn btn-light mx-2">News</a> -->
                            <a href="<?= PROOT; ?>contact" class="btn btn-warning">Request a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>   
    </header>

    <main>