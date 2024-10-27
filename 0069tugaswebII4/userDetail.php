<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

$dbConnection = getDBConnection();
$controller = new UserController($dbConnection);
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $user = $controller->getUserById($id);
} else {
    echo "ID tidak ada.";
    exit();
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Pengguna</h1>
        <?php if ($user): ?>
            <p>ID: <?php echo htmlspecialchars($user['id']); ?></p>
            <p>Name: <?php echo htmlspecialchars($user['name']); ?></p>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
        <?php else: ?>
            <p>User not found.</p>
        <?php endif; ?>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
