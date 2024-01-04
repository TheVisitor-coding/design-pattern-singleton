<?php
require_once 'SessionManager.php';
require_once 'UserManager.php';
require_once 'ProductManager.php';

$sessionManager = SessionManager::getInstance();
$sessionManager->setUserData(['user_id' => 1, 'username' => 'Manu']);

$userManager = UserManager::getInstance();
$userManager->addUser(['id' => 1, 'name' => 'Pablo Escobar', 'email' => 'pablo_escobar@mexique.com']);

$productManager = ProductManager::getInstance();
$productManager->addProduct(['id' => 1, 'name' => 'Babybel', 'price' => 2.99]);

// Afficher les données
echo "Session Data: ";
print_r($sessionManager->getUserData());

echo "User List: ";
print_r($userManager->getUserList());

echo "Product List: ";
print_r($productManager->getProductList());
?>
