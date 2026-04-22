<?php
    require_once __DIR__ . '/system/DatabaseConnector.php';
    $title = 'News/ Blog - ';
    $navClass = "navbar-light w-100";
    include __DIR__ . '/system/inc/head.php';
    include __DIR__ . '/system/inc/topnav.php';

    // Fetch categories for the filter dropdown
    $categoriesStmt = $dbConnection->query("SELECT * FROM categories ORDER BY name ASC");
    $categories = $categoriesStmt->fetchAll();

    // Pagination setup
    $postsPerPage = 6;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $postsPerPage;

    // Filtering and Searching
    $searchQuery = $_GET['search'] ?? '';
    $categorySlug = $_GET['category'] ?? '';

    $sql = "SELECT p.*, c.name as category_name, c.slug as category_slug, u.username as author_name 
            FROM posts p 
            LEFT JOIN categories c ON p.category_id = c.id
            LEFT JOIN users u ON p.user_id = u.id
            WHERE 1=1";

    $params = [];

    if (!empty($searchQuery)) {
        $sql .= " AND (p.title LIKE ? OR p.content LIKE ?)";
        $params[] = "%$searchQuery%";
        $params[] = "%$searchQuery%";
    }

    if (!empty($categorySlug)) {
        $sql .= " AND c.slug = ?";
        $params[] = $categorySlug;
    }

    // Get total posts for pagination
    $totalStmt = $dbConnection->prepare($sql);
    $totalStmt->execute($params);
    $totalPosts = $totalStmt->rowCount();
    $totalPages = ceil($totalPosts / $postsPerPage);

    // Get posts for the current page
    // Append validated integer LIMIT/OFFSET directly to SQL to avoid driver-specific binding issues
    $limit = (int) $postsPerPage;
    $off = (int) $offset;
    $sql .= " ORDER BY p.created_at DESC LIMIT " . $limit . " OFFSET " . $off;
    $postsStmt = $dbConnection->prepare($sql);
    $postsStmt->execute($params);
    $posts = $postsStmt->fetchAll();
?>

    <!-- Page Hero -->
    <section class="position-relative py-8 overflow-hidden bg-navy text-white">
        <div class="hero-overlay" style="opacity: 0.8;"></div>
        <img src="<?= PROOT; ?>assets/media/bg-1.jpg" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 0" alt="News Hero" />
        
        <div class="container position-relative z-2 py-lg-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb glass-breadcrumb px-4 py-2 d-inline-flex rounded-pill mx-auto">
                            <li class="breadcrumb-item"><a href="<?= PROOT; ?>" class="text-white-50">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Insights Hub</li>
                        </ol>
                    </nav>
                    <h1 class="display-3 fw-800 mb-0">Market <span class="text-gradient-gold">Insights</span></h1>
                    <p class="lead text-white-50 mt-3">Stay informed with the latest developments in Sierra Leone's mining sector and global mineral trends.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Blog list start-->
    <section class="py-xl-9 py-5 bg-white">
        <div class="container">
            <!-- Filter Bar -->
            <div class="row justify-content-center mb-6">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg rounded-pill overflow-hidden bg-light p-2">
                        <form method="GET" action="news.php" class="row g-0 align-items-center">
                            <div class="col-lg-5 col-md-4">
                                <div class="input-group input-group-flush">
                                    <span class="input-group-text bg-transparent border-0 ps-4"><i class="bi bi-search text-gold"></i></span>
                                    <input type="search" name="search" class="form-control bg-transparent border-0 py-3" placeholder="Search insights..." value="<?= htmlspecialchars($searchQuery) ?>" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 border-start-md">
                                <select class="form-select bg-transparent border-0 py-3 ps-4 cursor-pointer" name="category">
                                    <option value="">All Expertise Areas</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= htmlspecialchars($category['slug']) ?>" <?= ($categorySlug == $category['slug']) ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($category['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 p-1">
                                <button type="submit" class="btn btn-navy w-100 py-3 rounded-pill text-uppercase fw-800 letter-spacing-1">Filter Results</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Posts Grid -->
            <div class="row g-4 gy-5">
                <?php if (empty($posts)): ?>
                    <div class="col-12">
                        <div class="glass-card p-5 text-center">
                            <i class="bi bi-journal-x fs-1 text-gold mb-3 d-block"></i>
                            <h3 class="h4">No Insights Found</h3>
                            <p class="text-muted">We couldn't find any articles matching your current filters. Please try a different search term.</p>
                            <a href="news.php" class="btn btn-gold rounded-pill px-4 mt-3">Reset Filters</a>
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($posts as $post): ?>
                        <div class="col-lg-4 col-md-6" data-cue="fadeIn">
                            <article class="card border-0 h-100 shadow-sm hover-lift rounded-4 overflow-hidden bg-white">
                                <div class="position-relative overflow-hidden" style="height: 240px;">
                                    <a href="post.php?slug=<?= htmlspecialchars($post['slug']) ?>">
                                        <img src="<?= PROOT; ?>assets/media/blog/<?= htmlspecialchars($post['image'] ?: 'placeholder.jpg') ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="card-img-top h-100 w-100 object-fit-cover transition-all duration-500 hover-scale" />
                                    </a>
                                    <?php if ($post['category_name']): ?>
                                        <div class="position-absolute top-0 start-0 p-3">
                                            <span class="badge bg-gold-gradient rounded-pill text-uppercase px-3 py-2 small fw-700 letter-spacing-1"><?= htmlspecialchars($post['category_name']) ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <i class="bi bi-calendar3 text-gold small"></i>
                                        <span class="small text-muted fw-600"><?= pretty_date_notime($post['created_at']) ?></span>
                                    </div>
                                    <h3 class="h4 mb-3 fw-800">
                                        <a href="post.php?slug=<?= htmlspecialchars($post['slug']) ?>" class="text-navy text-decoration-none hover-gold transition-all"><?= htmlspecialchars($post['title']) ?></a>
                                    </h3>
                                    <p class="text-muted small mb-4 line-clamp-3">
                                        <?= mb_strimwidth(strip_tags($post['content']), 0, 120, "...") ?>
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-0 p-4 pt-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-gold-subtle rounded-circle d-flex align-items-center justify-content-center text-gold">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <span class="small fw-700 text-navy"><?= htmlspecialchars($post['author_name'] ?? 'Executive') ?></span>
                                        </div>
                                        <a href="post.php?slug=<?= htmlspecialchars($post['slug']) ?>" class="icon-link icon-link-hover text-gold fw-700 small text-uppercase">
                                            Read More <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
                <div class="row mt-6">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-premium justify-content-center gap-2">
                                <?php if ($page > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="?page=<?= $page - 1 ?>&search=<?= urlencode($searchQuery) ?>&category=<?= urlencode($categorySlug) ?>">
                                            <i class="bi bi-chevron-left"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center fw-800" href="?page=<?= $i ?>&search=<?= urlencode($searchQuery) ?>&category=<?= urlencode($categorySlug) ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>

                                <?php if ($page < $totalPages): ?>
                                    <li class="page-item">
                                        <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="?page=<?= $page + 1 ?>&search=<?= urlencode($searchQuery) ?>&category=<?= urlencode($categorySlug) ?>">
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
   

<?php include  __DIR__ . '/system/inc/footer.php'; ?>