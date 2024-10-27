<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

$dbConnection = getDBConnection();
$controller = new UserController($dbConnection);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $controller->deleteUser($id);
    header('Location: index.php?message=User%20deleted%20successfully');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>
