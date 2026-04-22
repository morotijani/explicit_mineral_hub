<?php
    require_once __DIR__ . '/system/DatabaseConnector.php';

    $slug = $_GET['slug'] ?? '';
    if (!$slug) {
        header('Location: news.php');
        exit;
    }

    $sql = "SELECT p.*, c.name as category_name, c.slug as category_slug, u.username as author_name 
            FROM posts p 
            LEFT JOIN categories c ON p.category_id = c.id
            LEFT JOIN users u ON p.user_id = u.id
            WHERE p.slug = ? LIMIT 1";

    $stmt = $dbConnection->prepare($sql);
    $stmt->execute([$slug]);
    $post = $stmt->fetch();

    if (!$post) {
        header('Location: 404.php');
        exit;
    }

    $title = htmlspecialchars($post['title']) . ' - ';
    $navClass = "navbar-light w-100";
    include __DIR__ . '/system/inc/head.php';
    include __DIR__ . '/system/inc/topnav.php';
?>

<section class="py-5 py-lg-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="text-center">
                    <?php if ($post['category_name']): ?>
                        <a href="news.php?category=<?= htmlspecialchars($post['category_slug']) ?>" class="badge bg-primary-subtle text-primary-emphasis rounded-pill text-uppercase"><?= htmlspecialchars($post['category_name']) ?></a>
                    <?php endif; ?>
                    <h1 class="my-3"><?= htmlspecialchars($post['title']) ?></h1>
                    <p class="mb-0">Posted on <?= pretty_date($post['created_at']) ?> by <?= htmlspecialchars($post['author_name'] ?? 'Admin') ?></p>
                </div>
                <?php if ($post['image']): ?>
                    <figure class="mt-6">
                        <img src="<?= PROOT; ?>assets/media/blog/<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="img-fluid rounded-3" />
                    </figure>
                <?php endif; ?>
                <div class="mt-6 lead">
                    <?= nl2br($post['content']) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/system/inc/footer.php'; ?>
