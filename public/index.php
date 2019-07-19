<?php
use Entrance\Route;

//index.php가 있는 장소의 부모폴더 위치를 가져온다.
define("__ROOT", dirname(__DIR__));
define("__VIEW", __ROOT . "/Web/views");
define("__CACHE", __ROOT . "/Web/caches");

//캐쉬폴더가 깃에 없어도 재생성됨
if(!file_exists(__CACHE)) {
    mkdir(__CACHE);
}

require __ROOT .  "/vendor/autoload.php";
require __ROOT . "/web.php";

$url = isset($_GET['url']) ? "/" . $_GET['url'] : "/";

Route::route($url);
