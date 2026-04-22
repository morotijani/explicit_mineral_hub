<?php
require_once('../system/DatabaseConnector.php');
if (!isset($_SESSION['user_id'])) {
    redirect(PROOT . 'admin/index');
    exit;
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $slug = php_url_slug($name);

    if (empty($name)) {
        $errors[] = 'Name is required';
    }

    if (empty($errors)) {
        $stmt = $dbConnection->prepare("INSERT INTO categories (name, slug) VALUES (?, ?)");
        $stmt->execute([$name, $slug]);
        redirect(PROOT . 'admin/category_list?created=true');
        exit;
    }
}
?>
<!doctype html>
<html>
update admin dashborad spelling s and gallery link
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>New Category - Admin</title>
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

        <h3>Create Category</h3>
        <?php if ($errors) : ?>
            <div class="alert alert-danger">
                <?php echo implode('<br>', $errors); ?>
            </div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Create</button>
                <a href="category_list" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>