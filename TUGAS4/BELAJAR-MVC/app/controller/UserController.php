<?php
require_once 'app/models/User.php';

class UserController
{
    private $userModel;

    public function __construct($dbConnection)
    {
        $this->userModel = new User($dbConnection);
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        require 'app/views/UserListView.php';
    }

    public function show($id)
    {
        $user = $this->userModel->getUserById($id);
        if (!$user) {
            die("User with ID $id not found.");
        }
        require 'app/views/UserDetailView.php';
    }

    public function edit($id)
    {
        $user = $this->userModel->getUserById($id);
        if (!$user) {
            die("User with ID $id not found.");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $this->userModel->updateUser($id, $nama, $email);
            header('Location: /');
            exit;
        } else {
            require 'app/views/UserEditView.php';
        }
    }

    public function delete($id)
    {
        $this->userModel->deleteUser($id);
        header('Location: /');
        exit;
    }
}
?>
