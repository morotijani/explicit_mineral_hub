<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { redirect(PROOT . 'admin/index'); exit; }

    $stmt = $dbConnection->query("SELECT * FROM posts ORDER BY created_at DESC");
    $posts = $stmt->fetchAll();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Manage Blog - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container py-4">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom"> 
            <a href="dashboard" class="d-flex align-items-center link-body-emphasis text-decoration-none"> 
                <img src="<?= PROOT; ?>assets/media/logo/logo.png" width="40" height="32" class="me-2" /> <span class="fs-4">M.Enterprice</span> 
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto"> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="blogs">Blog</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contacts">Contacts</a> 
                <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Sites</a> 
                <a class="py-2 link-body-emphasis text-decoration-none" href="logout">Logout</a> 
            </nav> 
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h3>Blog Posts</h3>
            <a class="btn btn-success" href="create">New Post</a>
        </div>

        <?php if (isset($_GET['deleted'])): ?>
            <div class="alert alert-success">Post deleted successfully.</div>
        <?php endif; ?>
        <?php if (isset($_GET['created'])): ?>
            <div class="alert alert-success">Post created successfully.</div>
        <?php endif; ?>
        <?php if (isset($_GET['updated'])): ?>
            <div class="alert alert-success">Post updated successfully.</div>
        <?php endif; ?>
        <a class="btn btn-info mb-2" href="category_list">Manage Categories</a>
        <?php if (empty($posts)): ?>
            <div class="alert alert-info">No posts yet.</div>
        <?php else: ?>
            <table class="table table-striped">
                <thead>

                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created</th>

                        <th>Actions</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $p): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($p['title']); ?></td>
                        <td><?php echo htmlspecialchars($p['slug']); ?></td>
                        <td><?php echo htmlspecialchars($p['created_at']); ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="edit?id=<?php echo $p['id']; ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="delete?id=<?php echo $p['id']; ?>" onclick="return confirm('Delete this post?')">Delete</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>