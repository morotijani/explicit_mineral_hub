<?php
require_once('../system/DatabaseConnector.php');
if (!isset($_SESSION['user_id'])) {
    redirect(PROOT . 'admin/index');
    exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id) {
    $d = $dbConnection->prepare("DELETE FROM categories WHERE id = ?");
    $d->execute([$id]);
}
redirect(PROOT . 'admin/category_list');
exit;