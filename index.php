<?php
session_start();

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, "fr_FR");
include_once "./function/debug.php";
include_once "./include/pdo.php";
include_once "./function/display_title.php";
include_once "./function/test_input.php";
include_once "./function/textValide.php";
include_once "./function/isLoged.php";
include_once "./function/isAdmin.php";
include_once "./include/html.php";
include_once "./include/header.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "accueil";
}

$path = "./include/";
$contenu = glob($path . "*.inc.php");
$page = $path . $page . ".inc.php";
if (in_array($page, $contenu)) {
    include $page;
} else {
    include "./include/about.inc.php";
}

include_once "./include/footer.php";