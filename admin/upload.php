<?php
    require_once ('../system/DatabaseConnector.php');
    if (isset($_POST['title']) && isset($_FILES['images'])) {
        $title = $_POST['title'];
        if (!empty($_FILES['images']['name'][0])) {
            $uploadDir = BASEURL . 'assets/media/gallery/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            foreach ($_FILES['images']['name'] as $key => $name) {
                $tmpName = $_FILES['images']['tmp_name'][$key];
                $size = $_FILES['images']['size'][$key];
                $type = $_FILES['images']['type'][$key];
                $error = $_FILES['images']['error'][$key];

                // Validate file type (only jpg, jpeg, png, gif)
                $allowedTypes = ['image/jpeg','image/png','image/gif'];
                if (!in_array($type, $allowedTypes)) {
                    echo "Invalid file type: " . sanitize($name) . "<br>";
                    continue;
                }

                // Validate file size (10MB max)
                if ($size > 10 * 1024 * 1024) {
                    echo "File too large (max 10MB): " . sanitize($name) . "<br>";
                    continue;
                }

                if ($error === UPLOAD_ERR_OK) {
                    $fileNewName = uniqid() . '_' . basename($name);
                    $targetFile = $uploadDir . $fileNewName;
                    if (move_uploaded_file($tmpName, $targetFile)) {
                        // insert into database
                        $sql = "INSERT INTO `gallery`(`gallery_id`, `gallery_title`, `gallery_file_path`, `gallery_file_name`) VALUES (?, ?, ?, ?)";
                        $stmt = $dbConnection->prepare($sql);
                        $stmt->execute([
                            guidv4(),
                            $title,
                            'assets/media/gallery/',
                            $fileNewName
                        ]);
                        echo "Uploaded: " . sanitize($name) . "<br>";
                        // redirect(PROOT . 'admin/gallery?uploaded=true');
                        // exit;
                    } else {
                        echo "Failed to upload: " . sanitize($name) . "<br>";
                    }
                } else {
                    echo "Error uploading: " . sanitize($name) . "<br>";
                }
            }
        } else {
            echo "No files selected.";
        }
    }

?>