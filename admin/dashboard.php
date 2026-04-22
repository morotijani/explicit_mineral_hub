<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { header('Location: index.php'); exit; }

    // Get recent posts
    $postStmt = $dbConnection->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5");
    $posts = $postStmt->fetchAll();

    // Get counts
    $contactCount = $dbConnection->query("SELECT COUNT(*) FROM contacts")->fetchColumn();
    $postCount = $dbConnection->query("SELECT COUNT(*) FROM posts")->fetchColumn();

?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
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

        <div class="row mb-3 text-center"> 
            <div class="col"> 
                <div class="card mb-4 rounded-3 shadow-sm"> 
                    <div class="card-header py-3"> 
                        <h4 class="my-0 fw-normal">Contacts</h4> 
                    </div> 
                    <div class="card-body"> 
                        <h1 class="card-title pricing-card-title"><?= number_format($contactCount) ?></h1> 
                    </div> 
                </div> 
            </div>
            <div class="col"> 
                <div class="card mb-4 rounded-3 shadow-sm"> 
                    <div class="card-header py-3"> 
                        <h4 class="my-0 fw-normal">News/Blog</h4> 
                    </div> 
                    <div class="card-body"> 
                        <h1 class="card-title pricing-card-title"><?= number_format($postCount) ?></h1> 
                    </div> 
                </div> 
            </div>
        </div>
       
        <h4 class="mb-3">Recent Posts</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $p): ?>
                <tr>
                    <td><?=htmlspecialchars($p['title'])?></td>
                    <td><?=htmlspecialchars($p['created_at'])?></td>
                    <td>
                    <a href="edit?id=<?=$p['id']?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="delete?id=<?=$p['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>
