<?php
class SessionManager {
    private static $instance;
    private $userData;

    // Constructeur privé pour empêcher l'instanciation directe
    private function __construct() {
        $this->userData = [];
    }

    // Méthode statique pour récupérer l'instance de la classe
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getUserData() {
        return $this->userData;
    }

    public function setUserData($data) {
        $this->userData = $data;
    }
}
?>
