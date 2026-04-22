<?php
require_once('../system/DatabaseConnector.php');
if (!isset($_SESSION['user_id'])) {
    redirect(PROOT . 'admin/index');
    exit;
}

// Handle Delete
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $stmt = $dbConnection->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->execute([$delete_id]);
    redirect(PROOT . 'admin/category_list?deleted=true');
    exit;
}

$stmt = $dbConnection->query("SELECT * FROM categories ORDER BY name ASC");
$categories = $stmt->fetchAll();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Manage Categories - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="dashboard" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="40" height="32" class="me-2" /> <span class="fs-4">M.Enterprise</span>
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="blogs">Blog</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contacts">Contacts</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="gallery">Gallery</a> 
                <a class="py-2 link-body-emphasis text-decoration-none" href="logout">Logout</a>
            </nav>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Categories</h3>
            <a class="btn btn-success" href="category_create">New Category</a>
        </div>

        <?php if (isset($_GET['deleted'])) : ?>
            <div class="alert alert-success">Category deleted successfully.</div>
        <?php endif; ?>

        <?php if (empty($categories)) : ?>
            <div class="alert alert-info">No categories yet.</div>
        <?php else : ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $cat) : ?>
                        <tr>
                            <td><?= htmlspecialchars($cat['name']) ?></td>
                            <td><?= htmlspecialchars($cat['slug']) ?></td>
                            <td><?= htmlspecialchars($cat['created_at']) ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="category_edit?id=<?= $cat['id'] ?>">Edit</a>
                                <a class="btn btn-sm btn-danger" href="category_list?delete=<?= $cat['id'] ?>" onclick="return confirm('Delete this category?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>