<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { redirect( PROOT . 'admin/login'); exit; }

    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    if ($id) {
        $stmt = $dbConnection->prepare("SELECT image FROM posts WHERE id = ? LIMIT 1");
        $stmt->execute([$id]);
        $r = $stmt->fetchAll()[0];
        if ($r && $r['image']) {
            @unlink(BASEURL . 'assets/media/blog/' . $r['image']);
        }
        $d = $dbConnection->prepare("DELETE FROM posts WHERE id = ?");
        $d->execute([$id]);
    }
    redirect( PROOT . 'admin/blogs'); exit;
