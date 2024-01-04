<?php
class UserManager {
    private static $instance;
    private $userList;

    private function __construct() {
        // Initialisation de la liste des utilisateurs (par exemple, à partir de la base de données)
        $this->userList = [];
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getUserList() {
        return $this->userList;
    }

    public function addUser($user) {
        $this->userList[] = $user;
    }
}
?>
