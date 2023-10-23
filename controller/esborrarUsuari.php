<?php 
//Eric Rubio Sanchez
//Ex6
require_once '../model/pdo-users.php';
require_once '../controller/session.php';

session_start();
$userId = getSessionUserId();
if ($userId == 0) {
    header('Location: login.php');
    return;
}

deleteUser($userId);
logout();
redirectHome();

?>