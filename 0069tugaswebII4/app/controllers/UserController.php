<?php
require_once 'app/models/User.php';

class UserController
{
    private $userModel;
    public function __construct($dbConnection){
        $this->userModel = new User($dbConnection);
    }
    public function index(){
        $users = $this->userModel->getAllUsers();
        require_once 'app/views/userListView.php';
    }
    public function show($id){
    $user = $this->userModel->getUserById($id);
    if ($user) {
        require_once 'userDetail.php'; 
    } else {
        echo "User not found!";
    }
    }
    public function updateUser($id, $name, $email){
        $this->userModel->updateUser($id, $name, $email);
    }
    public function deleteUser($id){
        $this->userModel->deleteUser($id);
    }
    public function getUserById($id){
        return $this->userModel->getUserById($id);
    }
}
?>
