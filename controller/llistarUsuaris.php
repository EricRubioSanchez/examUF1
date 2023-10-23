<?php

require_once '../model/pdo-articles.php';
require_once '../controller/session.php';


if (isset($_GET['search'])) $searchTerm = $_GET['search'];

session_start();
$userId = getSessionUserId();

$usuaris= selectAllUsers();


require_once '../view/llistarUsuaris.view.php';