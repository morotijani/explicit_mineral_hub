<?php
    require_once ('../system/DatabaseConnector.php');

    if (isset($_SESSION['user_id'])) {
        redirect(PROOT . 'admin/dashboard');
        exit;
    }

    $err = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $stmt = $dbConnection->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            redirect(PROOT . 'admin/dashboard');
            exit;
        } else {
            $err = "Invalid credentials.";
        }
    }

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4 shadow-sm">
                    <h4>Admin Login</h4>
                    <?php if ($err): ?><div class="alert alert-danger"><?=$err?></div><?php endif;?>
                    <form method="post">
                        <div class="mb-3"><input name="username" class="form-control" placeholder="Username" required></div>
                        <div class="mb-3"><input name="password" type="password" class="form-control" placeholder="Password" required></div>
                        <button class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>