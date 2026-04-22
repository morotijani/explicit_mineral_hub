<?php
    require_once ('../system/DatabaseConnector.php');
    if (!isset($_SESSION['user_id'])) { redirect(PROOT . 'admin/index'); exit; }

    // Handle Delete
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $stmt = $dbConnection->prepare("DELETE FROM contacts WHERE contact_id = ?");
        $stmt->execute([$delete_id]);
        redirect(PROOT . 'admin/contacts?deleted=true');
        exit;
    }

    $stmt = $dbConnection->query("SELECT * FROM contacts ORDER BY created_at DESC");
    $contacts = $stmt->fetchAll();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contacts - Admin</title>
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
            <h3>Contact Submissions</h3>
        </div>

        <?php if (isset($_GET['deleted'])): ?>
            <div class="alert alert-success">Contact entry deleted successfully.</div>
        <?php endif; ?>

        <?php if (empty($contacts)): ?>
            <div class="alert alert-info">No contacts yet.</div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $c): ?>
                        <tr>
                            <td><?= sanitize($c['fname'] . ' ' . $c['lname']); ?></td>
                            <td><?= sanitize($c['email']); ?></td>
                            <td><?= sanitize($c['compnay_name']); ?></td>
                            <td><?= sanitize($c['phone_number']); ?></td>
                            <td><?=nl2br( sanitize(substr($c['message'], 0, 50))) . (strlen($c['message']) > 50 ? '...' : ''); ?></td>
                            <td><?= sanitize($c['created_at']); ?></td>
                            <td>
                                <!-- modal view -->
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewContactModal<?= $c['contact_id']; ?>">View</button>
                                <a href="contacts?delete=<?= $c['contact_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                            </td>
                        </tr>

                        <!-- modal details -->
                        <div class="modal fade" id="viewContactModal<?= $c['contact_id']; ?>" tabindex="-1" aria-labelledby="viewContactModalLabel<?= $c['contact_id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="viewContactModalLabel<?= $c['contact_id']; ?>">Contact Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Name:</strong> <?= sanitize($c['fname'] . ' ' . $c['lname']); ?></p>
                                        <p><strong>Email:</strong> <?= sanitize($c['email']); ?></p>
                                        <p><strong>Company:</strong> <?= sanitize($c['compnay_name']); ?></p>
                                        <p><strong>Phone:</strong> <?= sanitize($c['phone_number']); ?></p>
                                        <p><strong>Message:</strong><br><?=nl2br( sanitize($c['message'])); ?></p>
                                        <p><strong>Date:</strong> <?= sanitize($c['created_at']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>