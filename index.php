<?php
include("./api/db_include.php");

$request = $_SERVER['REQUEST_URI'];
$path = explode("?", $request);
$path[1] = isset($path[1]) ? $path[1] : null;
$resource = explode("/", $path[0]);

$pages = "";
$includeHeaderAndFooter = false;
switch ($resource[1]) {
    case '':
        $pages = "./mainpage.php";
        $includeHeaderAndFooter = true;
        break;
    case 'information':
        $pages = "./pages/sub01.php";
        $includeHeaderAndFooter = true;
        break;
    case 'statistics':
        $pages = "./pages/sub02.php";
        $includeHeaderAndFooter = true;
        break;
    case 'reservation':
        $pages = "./pages/sub03.php";
        $includeHeaderAndFooter = true;
        break;
    case 'goods':
        $pages = "./pages/sub04.php";
        $includeHeaderAndFooter = true;
        break;
    case 'login':
        $pages = "./pages/login.php";
        $includeHeaderAndFooter = false;
        break;
    case 'signup':
        $pages = "./pages/signup.php";
        $includeHeaderAndFooter = false;
        break;
    default:
        echo "잘못된 접근입니다.";
        exit();
}
include($pages);
include("./components/render.php");
?>
