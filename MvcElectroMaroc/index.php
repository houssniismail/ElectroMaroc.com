<?php
require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home = new HomeController();

$pages = ['add','addCategory','category','commend','Contact','dashboard','index','login','loginAdmin','ProductAdmin','products','regester','updatCategory','updateProduct','accounts'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include('Views/includes/404.php');
    }
}

?>
