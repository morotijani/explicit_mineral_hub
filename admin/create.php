<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';
        $slug = php_url_slug($title);
        $category_id = $_POST['category_id'] ?? null;
        $date =  $_POST['date'] ?? '';
        $date = date('Y-m-d H:i:s', strtotime($date));

        // handle image upload
        $imageName = null;

        if (!empty($_FILES['image']['name'])) {
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $type = $_FILES['image']['type'];
            $size = $_FILES['image']['size'];
            $error = $_FILES['image']['error'];
            $name = $_FILES['image']['name'];

            // Validate file type (only jpg, jpeg, png, gif)
            $allowedTypes = ['image/jpeg','image/png','image/gif'];
            if (!in_array($type, $allowedTypes)) {
                $errors[] = "Invalid file type: " . sanitize($name) . "<br>";
            }

            // Validate file size (10MB max)
            if ($size > 10 * 1024 * 1024) {
                $errors[] = "File too large (max 10MB): " . sanitize($name) . "<br>";
            }

            if ($error === UPLOAD_ERR_OK) {
                // File uploaded successfully
                $imageName = uniqid() . '.' . $ext;
                $location = BASEURL . 'assets/media/blog/' . $imageName;
                move_uploaded_file($_FILES['image']['tmp_name'], $location);
            } else {
                $errors[] = "Error uploading file: " . sanitize($name) . "<br>";
            }
        }
        
        if (empty($title) || empty($content)) { $errors[] = 'Title and content required'; }

        if (empty($errors)) {
            $stmt = $dbConnection->prepare("INSERT INTO posts (title, slug, content, image, category_id, user_id, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$title, $slug, $content, $imageName, $category_id, $_SESSION['user_id'], $date]);
            redirect(PROOT . 'admin/blogs'); exit;
        }
    }

    $categoriesStmt = $dbConnection->query("SELECT * FROM categories ORDER BY name ASC");
    $categories = $categoriesStmt->fetchAll();
?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>New Post</title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #preview img {
            width: 120px;
            margin: 5px;
            border: 1px solid #ccc;
            padding: 3px;
        }
    </style>
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
        <h3>Create Post</h3>
        <?php if ($errors): ?>
        <div class="alert alert-danger">
            <?php echo implode('<br>', $errors); ?>
        </div>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <input name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="mb-2">
                <input name="image" type="file" id="image" class="form-control" accept="image/*" required>
                <div id="preview"></div>
            </div>
             <div class="mb-2">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">-- Select Category --</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?= htmlspecialchars($cat['id']) ?>"><?= htmlspecialchars($cat['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-2">
                <textarea name="content" rows="8" class="form-control" placeholder="Content (HTML allowed)" required></textarea>
            </div>
            <div class="mb-2">
                <input name="date" type="datetime-local" value="<?= date('Y-m-d\TH:i'); ?>" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Create</button> 
                <a href="blogs" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
    
    <script src="<?= PROOT; ?>assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/87lq0a69wq228bimapgxuc63s4akao59p3y5jhz37x50zpjk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Preview selected images
            $("#image").on("change", function() {
                $("#preview").html(""); // clear old previews
                // only one image file
                var file = this.files[0];
                
                if (!file.type.match('image.*')) {
                    alert(file.name + " is not an image file.");
                    return
                    // continue;
                }

                // Validate file size (10MB = 10 * 1024 * 1024)
                if (file.size > 10 * 1024 * 1024) {
                    alert(file.name + " exceeds 10MB size limit.");
                    return;
                    // continue;
                }

                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#preview").append("<img src='" + e.target.result + "'>");
                }
                reader.readAsDataURL(file);
            });
        });
        
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
