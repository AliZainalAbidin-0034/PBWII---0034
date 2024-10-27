<?php
require_once 'config/database.php';
require_once 'app/controller/UserController.php';

// Initialize database connection
$dbConnection = getDBConnection();

// Initialize UserController
$userController = new UserController($dbConnection);

// Determine action based on query string
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Call the appropriate method based on action
switch ($action) {
    case 'detail':
        $userController->show($id);
        break;
    case 'edit':
        $userController->edit($id);
        break;
    case 'delete':
        $userController->delete($id);
        break;
    case 'index':
    default:
        $userController->index();
        break;
}
?>
