<?php
require_once ('../system/DatabaseConnector.php');

    if (!isset($_SESSION['user_id'])) { redirect(PROOT . 'admin/login'); exit; }

    $id = $_GET['id'] ?? null;
    if (!$id) { redirect(PROOT . 'admin/blogs'); exit; }

    $stmt = $dbConnection->prepare("SELECT * FROM posts WHERE id = ? LIMIT 1");
    $stmt->execute([$id]);

    $post = $stmt->fetchAll()[0];

    if (!$post) { redirect(PROOT . 'admin/posts'); exit; }
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';
        $category_id = $_POST['category_id'] ?? null;
        $date =  $_POST['date'] ?? '';
        $date = date('Y-m-d H:i:s', strtotime($date));
        $slug = php_url_slug($title);
        $imageName = $post['image'];

        if (!empty($_FILES['image']['name'])) {
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $imageName = uniqid() . '.' . $ext;
            $location = BASEURL . 'assets/media/blog/' . $imageName;
            move_uploaded_file($_FILES['image']['tmp_name'], $location);

            // Optionally delete old image
            if ($post['image']) {
                @unlink(BASEURL . 'assets/media/blog/' . $post['image']);
            }
        }

        if (empty($title) || empty($content)) { $errors[] = 'Title and content required'; }


        if (empty($errors)) {
            $u = $dbConnection->prepare("UPDATE posts SET title=?, slug=?, content=?, image=?, category_id=?, created_at = ?, updated_at=NOW() WHERE id = ?");
            $u->execute([$title, $slug, $content, $imageName, $category_id, $date, $id]);
            redirect(PROOT . 'admin/blogs'); exit;
        }
    }

    $categoriesStmt = $dbConnection->query("SELECT * FROM categories ORDER BY name ASC");

?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit Post</title>
    <link href="/assets/css/style.css" rel="stylesheet">
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

        <h3>Edit Post</h3>
        <?php if ($errors): ?>
            <div class="alert alert-danger">
                <?php echo implode('<br>', $errors); ?>
            </div>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <input name="title" value="<?php echo sanitize($post['title']); ?>" class="form-control" required>
            </div>
            <?php if ($post['image']): ?>
            <div class="mb-2">
                <img src="<?php echo PROOT . 'assets/media/blog/' . sanitize($post['image']); ?>" style="max-width:200px" alt="">
            </div>
            <?php endif; ?>
            <div class="mb-2">
                <input name="image" type="file" class="form-control" accept="image/*">
            </div>
             <div class="mb-2">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">-- Select Category --</option>
                    <?php foreach ($categoriesStmt as $cat): ?>
                        <option value="<?= htmlspecialchars($cat['id']) ?>" <?= ($cat['id'] == $post['category_id']) ? 'selected' : '' ?>><?= htmlspecialchars($cat['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-2">
                <textarea name="content" rows="8" class="form-control" required>
                    <?php echo sanitize($post['content']); ?>
                </textarea>
            </div>
            <div class="mb-2">
                <input name="date" type="datetime-local" value="<?= date('Y-m-d\TH:i'); ?>" class="form-control" required>
            </div>
            <div>
                <button class="btn btn-primary">Save</button> 
                <a href="<?= PROOT; ?>admin/blogs" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <script src="<?= PROOT; ?>assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/87lq0a69wq228bimapgxuc63s4akao59p3y5jhz37x50zpjk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        
        // Testarea Editor
        // tinymce.init({
        //     selector: '#product_description',
        // });
    
        tinymce.init({ 
            selector: 'textarea',
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });
    </script>
</body>
</html>
