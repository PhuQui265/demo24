<?php
require_once "App/controller/productcontroller.php";

$url = $_GET['url'] ?? 'product/product';
$urlArr = explode('/', $url);

$controllerName = $urlArr[0] . 'controller';
$method = $urlArr[1] ?? 'product';
$param = $urlArr[2] ?? null;

$controller = new $controllerName();
if ($param) {
    $controller->$method($param);
} else {
    $controller->$method();
}
