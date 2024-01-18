
<?php

include __DIR__ . '/config.php';
include __DIR__ . '/helpers/AppManager.php';

require_once __DIR__ . '/models/User.php';

$userModel = new User();

if ($userModel->createUser("John", "123", "doe", "johndoe@gmail.com")) {
    echo "User created successfully!";
} else {
    echo "Failed to create user. May be user already exist!";
}


$users = $userModel->getAllActive();

dd($users);
