<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: ../index.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - TODO App</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow p-4">
                <h3 class="text-center mb-3">Login</h3>
                <?php if(isset($_GET['error'])): ?>
                    <div class="alert alert-danger"><?= $_GET['error']; ?></div>
                <?php endif; ?>
                <form action="check_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
