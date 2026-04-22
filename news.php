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

    <!--Pageheader start-->
    <div class="pattern-square"></div>
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center">
                    <h1 class="mb-3">Blog/News page</h1>
                    <p class="mb-0">On this news page, We write stuff from time to time that might be interesting 🤷‍‍</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pageheader end-->

    <!--Blog list start-->
    <section class="mb-xl-9 my-4">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 col-md-10 col-12">
                    <form method="GET" action="news.php">
                        <div class="row g-2 g-sm-3 align-items-center">
                            <div class="col-lg-5 col-md-5 col-12">
                                <input type="search" name="search" class="form-control" placeholder="Search Blog" value="<?= htmlspecialchars($searchQuery) ?>" />
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <select class="form-select" name="category">
                                    <option value="">All Categories</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= htmlspecialchars($category['slug']) ?>" <?= ($categorySlug == $category['slug']) ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($category['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 d-grid">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row gy-5">
                <?php if (empty($posts)): ?>
                    <div class="col-12">
                        <div class="alert alert-info text-center">No posts found matching your criteria.</div>
                    </div>
                <?php else: ?>
                    <?php foreach ($posts as $post): ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <article>
                                <figure class="mb-4 zoom-img">
                                    <a href="post.php?slug=<?= htmlspecialchars($post['slug']) ?>">
                                        <img src="<?= PROOT; ?>assets/media/blog/<?= htmlspecialchars($post['image'] ?: 'placeholder.jpg') ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="img-fluid rounded-3" style="height: 250px; width: 100%; object-fit: cover;"/>
                                    </a>
                                </figure>
                                <?php if ($post['category_name']): ?>
                                    <a href="news.php?category=<?= htmlspecialchars($post['category_slug']) ?>" class="badge bg-primary-subtle text-primary-emphasis rounded-pill text-uppercase"><?= htmlspecialchars($post['category_name']) ?></a>
                                <?php endif; ?>
                                <h3 class="my-3 lh-base h4">
                                    <a href="post.php?slug=<?= htmlspecialchars($post['slug']) ?>" class="text-reset"><?= htmlspecialchars($post['title']) ?></a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= PROOT; ?>assets/media/logo/logo.png" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                                        <div class="ms-2">
                                            <span class="text-reset fs-6"><?= htmlspecialchars($post['author_name'] ?? 'Admin') ?></span>
                                        </div>
                                    </div>
                                    <div class="ms-3"><span class="fs-6"><?= pretty_date_notime($post['created_at']) ?></span></div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if ($totalPages > 1): ?>
                    <div class="col-lg-12">
                        <div class="mt-xl-7 mt-3">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <?php if ($page > 1): ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>&search=<?= urlencode($searchQuery) ?>&category=<?= urlencode($categorySlug) ?>">Previous</a></li>
                                    <?php endif; ?>

                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <li class="page-item <?= ($i == $page) ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i ?>&search=<?= urlencode($searchQuery) ?>&category=<?= urlencode($categorySlug) ?>"><?= $i ?></a></li>
                                    <?php endfor; ?>

                                    <?php if ($page < $totalPages): ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>&search=<?= urlencode($searchQuery) ?>&category=<?= urlencode($categorySlug) ?>">Next</a></li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
   

<?php include  __DIR__ . '/system/inc/footer.php'; ?>